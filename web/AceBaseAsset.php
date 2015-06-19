<?php

namespace cornernote\aceadmin\web;

use yii\web\AssetBundle;

/**
 * Configuration for Ace Admin client script files
 */
class AceBaseAsset extends AssetBundle
{
    public $sourcePath = '@vendor/cornernote/ace-admin-theme/assets';
    public $css = [
        'fonts/fonts.googleapis.com.css',
        'css/ace.min.css',
    ];
    public $js = [
        'js/ace-elements.min.js',
        'js/ace.min.js',
    ];
}
