<?php
require dirname(__DIR__).'/vendor/autoload.php';

use carry0987\Captcha\SVGCaptcha as SVGCaptcha;

if (isset($_POST['svgcaptcha_difficulty']) && !empty($_POST['svgcaptcha_difficulty'])) {
    $obj = null; 
    switch ($_POST['svgcaptcha_difficulty']) {
        case 'easy':
            $obj = SVGCaptcha::getInstance(4, $width = 300, $height = 130, $difficulty = SVGCaptcha::EASY);
            $c = $obj->getSVGCaptcha();
            echo $c[1];
            //Answer
            //echo $c[0];
            break;
        case 'medium':
            $obj = SVGCaptcha::getInstance(4, $width = 300, $height = 130, $difficulty = SVGCaptcha::MEDIUM);
            $c = $obj->getSVGCaptcha();
            echo $c[1];
            //Answer
            //echo $c[0];
            break;
        case 'hard':
            $obj = SVGCaptcha::getInstance(4, $width = 300, $height = 130, $difficulty = SVGCaptcha::HARD);
            $c = $obj->getSVGCaptcha();
            echo $c[1];
            //Answer
            //echo $c[0];
            break;
        default:
            break;
    }
}
