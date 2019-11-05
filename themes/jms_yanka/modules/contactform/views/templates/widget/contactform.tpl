<section class="contact-form">
  <form action="{$urls.pages.contact}" method="post" {if $contact.allow_file_upload}enctype="multipart/form-data"{/if}>

    {if $notifications}
      <div class="col-xs-12 alert {if $notifications.nw_error}alert-danger{else}alert-success{/if}">
        <ul>
          {foreach $notifications.messages as $notif}
            <li>{$notif}</li>
          {/foreach}
        </ul>
      </div>
    {/if}
    {if !$notifications || $notifications.nw_error}
    <section class="form-fields row">

      <div class="col-lg-12 col-md-12 col-sm-12 col-sm-12">
          <div class="addon-title">
            <h3>{l s='Drop Us a Line' d='Shop.Theme.Global'}</h3>
          </div>
      </div>

      <div class="form-group col-md-12 col-sx-12">
          <label>{l s='Select Option' d='Shop.Theme.Global'}</label>
          <select name="id_contact" class="form-control form-control-select">
            {foreach from=$contact.contacts item=contact_elt}
              <option value="{$contact_elt.id_contact}">{$contact_elt.name}</option>
            {/foreach}
          </select>
      </div>

      <div class="form-group col-md-12 col-sx-12">
          <label>{l s='Email address' d='Shop.Theme.Global'}</label>
          <input
            class="form-control"
            name="from"
            type="email"
            value="{$contact.email}"
            placeholder="john.smith@example.com"
          />
      </div>

      {if $contact.orders}
        <div class="form-group col-md-12 col-sx-12">
            
            <select name="id_order" class="form-control form-control-select">
              <option value="">{l s='Select reference' d='Shop.Forms.Help'}</option>
              {foreach from=$contact.orders item=order}
                <option value="{$order.id_order}">{$order.reference}</option>
              {/foreach}
            </select>
        </div>
      {/if}

      {if $contact.allow_file_upload}
        <div class="form-group file-upload col-md-12 col-sx-12">
            <label>{l s='Choose File' d='Shop.Theme.Global'}</label>
            <input placeholder="{l s='Choose file' d='Shop.Forms.Help'}" type="file" name="fileUpload" class="filestyle" data-buttonText="{l s='Choose file' d='Shop.Theme.Actions'}">
        </div>
      {/if}

      <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <label>{l s='Your message' d='Shop.Theme.Global'}</label>
          <textarea
            class="form-control"
            name="message"
            placeholder="{l s='Write your message here' d='Shop.Forms.Help'}"
            rows="6"
          >{if $contact.message}{$contact.message}{/if}</textarea>
      </div>

    </section>


    <footer class="form-footer text-sm-right">
        <style>
          input[name=url] {
            display: none !important;
          }
        </style>
        <input type="text" name="url" value=""/>
        <input type="hidden" name="token" value="{$token}" />
        <input class="btn-default active" type="submit" name="submitMessage" value="{l s='Submit' d='Shop.Theme.Actions'}">
      </footer>
    {/if}
  </form>
</section>
