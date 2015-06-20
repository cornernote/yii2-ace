<?php

namespace cornernote\ace\web;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Configuration for Ace Admin Extra client script files
 */
class AceExtraAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/cornernote-ace/assets';
    public $js = [
        'js/ace-extra.min.js',
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];
}
