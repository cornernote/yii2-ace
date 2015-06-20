# Yii2 Ace

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
        'cornernote\web\AceAsset',
    ];
}
```


## Example Layout

An example Yii2 layout exists at `views/layouts/main.php`.

You can use it directly by pasting the following into your `views/layouts/main.php`:

```
use app\assets\AppAsset;

AppAsset::register($this);

$viewPath = '@vendor/cornernote/yii2-ace/views/layouts';

$regex = '|(\\' . DIRECTORY_SEPARATOR . '[^\\' . DIRECTORY_SEPARATOR . ']*\\' . DIRECTORY_SEPARATOR . '[^\\' . DIRECTORY_SEPARATOR . ']*\.php)$|';
preg_match($regex, __FILE__, $matches);
require(Yii::getAlias('@vendor/cornernote/yii2-ace/views' . $matches[1]));
```
