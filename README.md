# Yii2 Ace Admin


## Ace Admin

Version 1.3.3


## Installation

Add the following to your `composer.json`:

```json
{
    "require": {
        "cornernote/yii2-ace-admin": "dev-master"
    }
}
```

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

$viewPath = '@vendor/cornernote/yii2-ace-admin/views/layouts';

$regex = '|(\\' . DIRECTORY_SEPARATOR . '[^\\' . DIRECTORY_SEPARATOR . ']*\\' . DIRECTORY_SEPARATOR . '[^\\' . DIRECTORY_SEPARATOR . ']*\.php)$|';
preg_match($regex, __FILE__, $matches);
require(Yii::getAlias('@vendor/cornernote/yii2-ace-admin/views' . $matches[1]));
```