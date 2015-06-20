<?php

namespace cornernote\ace\web;

use yii\web\AssetBundle;

/**
 * Configuration for Ace Admin client script files
 */
class AceAsset extends AssetBundle
{
    public $sourcePath = '@vendor/cornernote/yii2-ace/src/assets';
    public $css = [
        'css/ace_yii.css',
    ];
    public $js = [
        'js/ace_yii.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'rmrevin\yii\fontawesome\AssetBundle',
        'cornernote\ace\web\AceBaseAsset',
        'cornernote\ace\web\AceExtraAsset',
        'cornernote\ace\web\AceIEAsset',
    ];
}
