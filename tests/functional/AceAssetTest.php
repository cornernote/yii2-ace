<?php
/**
 * ReturnUrlTest.php
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://mrphp.com.au/
 */

namespace tests;


use cornernote\ace\web\AceAsset;
use Yii;

class AceAssetTest extends TestCase
{
    public function testRegister()
    {
        $view = $this->getView();
        $this->assertEmpty($view->assetBundles);
        AceAsset::register($view);
        $this->assertEquals([
            'cornernote\ace\web\AceAsset',
            'yii\web\YiiAsset',
            'yii\web\JqueryAsset',
            'yii\bootstrap\BootstrapPluginAsset',
            'yii\bootstrap\BootstrapAsset',
            'rmrevin\yii\fontawesome\AssetBundle',
            'cornernote\ace\web\AceBaseAsset',
            'cornernote\ace\web\AceExtraAsset',
            'cornernote\ace\web\AceIEAsset',
        ], array_keys($view->assetBundles));

        $view->params['breadcrumbs'][] = 'test';
        Yii::$app->session->addFlash('success', 'test');

        $content = $view->renderFile('@tests/data/views/layouts/main.php');
        $this->assertContains('ace_yii.css', $content);
        $this->assertContains('ace.min.css', $content);

        $this->assertContains('jquery.js', $content);
        $this->assertContains('bootstrap.js', $content);
        $this->assertContains('ace_yii.js', $content);
        $this->assertContains('ace.min.js', $content);
    }
}