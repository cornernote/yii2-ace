# Yii2 Ace

[![Latest Version](https://img.shields.io/github/tag/cornernote/yii2-ace.svg?style=flat-square&label=release)](https://github.com/cornernote/yii2-ace/tags)
[![Software License](https://img.shields.io/badge/license-BSD-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/cornernote/yii2-ace/master.svg?style=flat-square)](https://travis-ci.org/cornernote/yii2-ace)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/cornernote/yii2-ace.svg?style=flat-square)](https://scrutinizer-ci.com/g/cornernote/yii2-ace/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/cornernote/yii2-ace.svg?style=flat-square)](https://scrutinizer-ci.com/g/cornernote/yii2-ace)
[![Total Downloads](https://img.shields.io/packagist/dt/cornernote/yii2-ace.svg?style=flat-square)](https://packagist.org/packages/cornernote/yii2-ace)

Ace admin theme for Yii2.


## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
$ composer require cornernote/yii2-ace "*"
```

or add

```
"cornernote/yii2-ace": "*"
```

to the `require` section of your `composer.json` file.



Add the following to your `AppAsset.php`:

```php
class AppAsset extends AssetBundle
{
    public $depends = [
        'cornernote\ace\web\AceAsset',
    ];
}
```


## Example Layout

An example Yii2 layout exists at `views/layouts/main.php`.

You can use it directly by pasting the following into your `views/layouts/main.php`:

```
use app\assets\AppAsset;

AppAsset::register($this);

$viewPath = '@vendor/cornernote/yii2-ace/src/views/layouts';

$regex = '|(\\' . DIRECTORY_SEPARATOR . '[^\\' . DIRECTORY_SEPARATOR . ']*\\' . DIRECTORY_SEPARATOR . '[^\\' . DIRECTORY_SEPARATOR . ']*\.php)$|';
preg_match($regex, __FILE__, $matches);
require(Yii::getAlias('@vendor/cornernote/yii2-ace/src/views' . $matches[1]));
```
