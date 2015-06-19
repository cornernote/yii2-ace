<?php

namespace cornernote\aceadmin\web;

use yii\web\AssetBundle;

/**
 * Configuration for Ace Admin client script files
 */
class AceAsset extends AssetBundle
{
    public $sourcePath = '@vendor/cornernote/yii2-ace-admin/assets';
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
        'cornernote\aceadmin\web\AceBaseAsset',
        'cornernote\aceadmin\web\AceExtraAsset',
        'cornernote\aceadmin\web\AceIEAsset',
    ];
}
