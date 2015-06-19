<?php

namespace cornernote\aceadmin\web;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Configuration for Ace Admin Extra client script files
 */
class AceIEAsset extends AssetBundle
{
    public $sourcePath = '@vendor/cornernote/ace-admin-theme/assets';
    public $js = [
        'js/html5shiv.min.js',
        'js/respond.min.js',
    ];
    public $jsOptions = ['condition' => 'lte IE 8'];
}
