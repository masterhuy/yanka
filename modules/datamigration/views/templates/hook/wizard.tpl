{*
* 2007-2016 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2017-2020 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<style type="text/css">
    .info-container{
        padding:15px;
    }
    .info-container progress{
        float:right;
    }
    #migration_wizard{
        position: relative;
        display: block;
    }
    #migration_wizard ul.anchor {
        position: relative;
        display: block;
        float: left;
        list-style: none;
        padding: 0;
        margin: 0 0 10px 0;
        clear: both;
        width: 100%;
    }
    #migration_wizard li {
        width: 33%;
        float: left;
        position: relative;
        display: block;
        overflow: hidden;
    }
    #migration_wizard .stepContainer {
        position: relative;
        display: block;
        clear: both;
    }
    #migration_wizard li a .chevron {
        border: 16px solid transparent;
        border-left: 14px solid #fff;
        border-right: 0;
        position: absolute;
        right: -14px;
        top: 0;
    }
    #migration_wizard li a.selected .chevron{
        border-left: 14px solid #363A41;
    }
    #migration_wizard li a.done .chevron{
        border-left: 14px solid #72C279;
    }
    #migration_wizard li a.disabled .chevron{
        border-left: 14px solid #ccc;
    }
    #migration_wizard li a.done {
        color: #fff;
        background-color: #72C279;
    }
    #migration_wizard li a.selected {
        color: #F8F8F8;
        cursor: text;
        background-color: #363A41;
    }
    #migration_wizard li a.disabled {
        color: #777;
        background-color: #ccc;
    }
    #migration_wizard li a {
        color: #ccc;
        height: 32px;
        display: block;
        position: relative;
        margin: 0 16px 0 0;
        text-decoration: none;
        outline-style: none;
    }
    #migration_wizard li a .stepNumber {
        position: relative;
        float: left;
        width: 24px;
        height: 32px;
        margin-right: 3px;
        text-align: center;
        padding: 0 5px;
        font-size: 30px;
        line-height: 32px;
        color: #fff;
    }
    #migration_wizard li a .stepDesc {
        position: relative;
        text-align: left;
        font-size: 13px;
        height: 32px;
        display: table-cell;
        vertical-align: middle;
        line-height: 13px;
    }
    #migration_wizard .actionBar {
        height: 30px;
    }
    #migration_wizard .msgBox {
        position: relative;
        display: none;
        float: left;
        margin: 4px 0 0 5px;
        padding: 5px;
        border: 1px solid gold;
        background-color: #ffd;
        color: #5A5655;
        -webkit-border-radius: 5px;
        border-radius: 5px;
    }
    #migration_wizard .loader {
        display: none;
    }
    #migration_wizard .actionBar a {
        float: right;
        margin-right: 10px;
    }
    .show-detail, .hide-detail{
        cursor: pointer;
        float:left;
    }
    .title .name{
        float:left;
    }
    .title{
        overflow:auto;
    }

</style>
<div class="panel">
    <div class="bootstrap">
    <div class="module_error alert alert-danger" style="display:none">
    </div></div>
    <div id="migration_wizard">
        <ul class="steps nbr_steps_">
            {$index=1}
            {foreach from=$wizard.steps item=step key=key}
                <li><a href="#step-{$key}">
                <label class="stepNumber">{$index}</label>
                <span class="stepDesc">
                 {$step}<br />
                </span><span class="chevron"></span>
                </a></li>
                {$index = $index +1}
            {/foreach}
        </ul>
        {foreach from=$wizard.content item=content key=key}
            <div id="step-{$key}">
                {$content}
               <!-- step content -->
            </div>
        {/foreach}
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
    $('#migration-container').on('click', '.show-detail', function() {
        parent = $(this).parent().parent();
        parent.find('.info-container').slideDown();
        $(this).toggleClass('show-detail hide-detail');
        $(this).find('i').html('expand_less');
    });
    $('#migration-container').on('click', '.hide-detail', function() {
        parent = $(this).parent().parent();
        parent.find('.info-container').slideUp();
        $(this).toggleClass('hide-detail show-detail');
        $(this).find('i').html('expand_more');
    });
    $("label[for='JDM_CHECKALL_on']").click(function() {
        $("label[for^='JDM_'][for$='on'][for!='JDM_CHECKALL_on']").click();
    });
    $("label[for='JDM_CHECKALL_off']").click(function() {
        $("label[for^='JDM_'][for$='off'][for!='JDM_CHECKALL_off']").click();
    });
    var forward = false;
    var currentStep = 1;
// Initialize Smart Wizard
    $('#migration_wizard').smartWizard({
        onLeaveStep: onLeaveStepCallBack,
        onShowStep: onShowStepCallBack,
        onFinish: onFinishStepCallBack,
    });
    function openConnection() {
        var source = new EventSource("{$sse_url}");
        var table;
        source.onmessage = function(event) {
            $('#step-migration .alert-success').show();
            var result = JSON.parse( event.data );
            if (event.lastEventId == 'MESSAGE') {
                $('#migration-message').html(result.value);
            } else if (event.lastEventId == 'insert') {
                progress = $('p.progress-'+result.key);
                progress.find('.progress').html(result.value);
                progress.find('progress').val(result.value);
                $('#migration-message').html(result.key+': insert record '+result.value);
            } else if(event.lastEventId == 'CLOSE') {
                $('#migration-message').html('Done');
                $('#step-migration .alert-success').show();
                $('#migration-container').hide();
                $('#migration_wizard .stepContainer').css('height','');
                $('#migration_wizard .actionBar').html('<a href="{$clear_cache_url}" class="btn btn-success">Clear Cache And Rebuild Index</a>');
                source.close();
            } else if (event.lastEventId == 'error') {
                source.close();
                alert(result.value);
            } else if (event.lastEventId == 'ENDPROCESS') {
                source.close();
                openConnection();
            }
            else {
                $('#migration-message').html(result.value);
                console.log(result.value);
            }
        };
    }
    function onFinishStepCallBack()
    {
        $('#migration_wizard .buttonFinish').addClass('disabled');
        openConnection();
    }
    function onShowStepCallBack(anchor, context)
    {
        $('#migration_wizard .stepContainer').css('height','');
        $('#migration_wizard .stepContainer').css('overflow','auto');
        if (context.toStep == 1) {
            forward = false;
        }
    }
    function onLeaveStepCallBack(anchor, context)
    {
        // console.log(context);
        $('.module_error').hide();
        var check_url = "{$check_url}";
        var config_process_url = '{$config_process_url}';
        if (forward || context.fromStep > context.toStep) {
            forward = false;
            return true;
        } else {
            $('#migration_wizard .buttonNext').addClass('disabled');
            if (context.fromStep == 1) {
                form = $('#connection');
                ajax_url = check_url;
            } else if (context.fromStep == 2){
                form = $('#configuration');
                ajax_url = config_process_url;
            }
            $.ajax({
                type:"POST",
                url : ajax_url,
                dataType: 'json',
                data : form.serialize(),
                success : function(datas)
                {
                    console.log(datas);

                    if (!datas.status)
                    {
                        forward = false;
                        $('.module_error').html(datas.message);
                        $('.module_error').show();
                    } else {
                        if (datas.source !== undefined) {
                            html = '';
                            datas.source.forEach(function(shop) {
                                html += '<option value="'+shop.id_shop+'">'+shop.name+'</option>';
                            });
                            $('#JDM_SOURCE').html(html);
                        }
                        if (datas.data !== undefined) {
                            $('#migration-container').find('.message').remove();
                            if (datas.data.length < 1) {
                                $('#migration-container').append('<h1 class="message">No Data Selected</h1>');
                                console.log('add');
                            } else {
                                $('#migration-container').find('.view-clone').remove();
                                for (var k in datas.data) {
                                    dataview = $('.migration-data').clone();
                                    dataview.attr('class', 'view-clone '+k+'-migration');
                                    dataview.find('.name').html(k);
                                    infocontainer = dataview.find('.info-container');
                                    info = $(infocontainer.find('.info')).clone();
                                    for (var table in datas.data[k]) {
                                        if (datas.data[k][table] != 0) {
                                            info.attr('class', 'progress-'+table);
                                            info.find('.tablename').html(table);
                                            info.find('.total').html(datas.data[k][table]);
                                            info.find('progress').attr('max', datas.data[k][table]);
                                            dataview.find('.info-container').append($(info).clone());
                                        }
                                    }
                                    dataview.find('.info').remove();
                                    $('#migration-container').append(dataview.show());

                                }
                            }
                        }
                        forward = true;
                        $('#migration_wizard').smartWizard('goForward');
                    }
                    $('#migration_wizard .buttonNext').removeClass('disabled');
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    console.log(XMLHttpRequest, textStatus, errorThrown);
                    jAlert("TECHNICAL ERROR: \n\nDetails:\nError thrown: " + XMLHttpRequest + "\n" + 'Text status: ' + textStatus);
                }
            });
        }
        return false;
    }
});
</script>