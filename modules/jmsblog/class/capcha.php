<?php
/**
* 2007-2017 PrestaShop
*
* Jms Blog
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2017 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

class Capcha
{
    public function __construct()
    {
        session_start();
        $this->chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    }

    public function generate_string($input, $strength = 5) {
        $input_length = strlen($input);
        $random_string = '';
        for($i = 0; $i < $strength; $i++) {
            $random_character = $input[mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }

        return $random_string;
    }

    public function generateCapcha() {
        $image = imagecreatetruecolor(200, 50);

        imageantialias($image, true);

        $colors = [];

        $red = rand(125, 175);
        $green = rand(125, 175);
        $blue = rand(125, 175);

        for($i = 0; $i < 5; $i++) {
            $colors[] = imagecolorallocate($image, $red - 20*$i, $green - 20*$i, $blue - 20*$i);
        }

        imagefill($image, 0, 0, $colors[0]);

        for($i = 0; $i < 10; $i++) {
            imagesetthickness($image, rand(2, 10));
            $rect_color = $colors[rand(1, 4)];
            imagerectangle($image, rand(-10, 190), rand(-10, 10), rand(-10, 190), rand(40, 60), $rect_color);
        }
        // $black = imagecolorallocate($image, 0, 0, 0);
        $white = imagecolorallocate($image, 255, 255, 255);
        // $textcolors = [$black, $white];
        $module_path = dirname(dirname(__FILE__));
        $fonts = [$module_path.'\fonts\Acme.ttf', $module_path.'\fonts\Ubuntu.ttf', $module_path.'\fonts\Merriweather.ttf', $module_path.'\fonts\PlayfairDisplay.ttf'];
        $string_length = 6;
        $captcha_string = $this->generate_string($this->chars, $string_length);
        $_SESSION['capcha'] = $captcha_string;
        for($i = 0; $i < $string_length; $i++) {
          $letter_space = 170/$string_length;
          $initial = 15;

          imagettftext($image, 20, rand(-15, 15), $initial + $i*$letter_space, rand(20, 40), $white, $fonts[array_rand($fonts)], $captcha_string[$i]);
        }

        header('Content-type: image/png');
        imagepng($image);
        imagedestroy($image);
    }

}
