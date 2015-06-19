<?php

namespace cornernote\ace\web;

use yii\web\AssetBundle;

/**
 * Configuration for Ace Admin client script files
 */
class AceBaseAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/cornernote-ace/assets';
    public $css = [
        'fonts/fonts.googleapis.com.css',
        'css/ace.min.css',
    ];
    public $js = [
        'js/ace-elements.min.js',
        'js/ace.min.js',
    ];
}
