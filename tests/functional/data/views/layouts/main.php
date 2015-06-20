<?php
/**
 * layout.php
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://mrphp.com.au/
 */

$content = '';
$viewPath = '@vendor/cornernote/yii2-ace/src/views/layouts';

$regex = '|(\\' . DIRECTORY_SEPARATOR . '[^\\' . DIRECTORY_SEPARATOR . ']*\\' . DIRECTORY_SEPARATOR . '[^\\' . DIRECTORY_SEPARATOR . ']*\.php)$|';
preg_match($regex, __FILE__, $matches);
require(Yii::getAlias('@vendor/cornernote/yii2-ace/src/views' . $matches[1]));