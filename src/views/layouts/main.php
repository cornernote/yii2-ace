<?php
use cornernote\ace\web\AceAsset;
use yii\bootstrap\Nav;
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

!empty($viewPath) || $viewPath = '@vendor/cornernote/yii2-ace/src/views/layouts';
!empty($viewNavbar) || $viewNavbar = $viewPath . '/_navbar';
!empty($viewSidebar) || $viewSidebar = $viewPath . '/_sidebar';
!empty($viewFooter) || $viewFooter = $viewPath . '/_footer';
!empty($viewContent) || $viewContent = $viewPath . '/_content';

AceAsset::register($this);
?>

<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="UTF-8">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title . ' :: ' . Yii::$app->name) ?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <?php $this->head() ?>
    </head>
    <?php $this->beginBody() ?>
    <body class="no-skin">

    <?= $this->render($viewNavbar) ?>

    <div class="main-container" id="main-container">

        <?= $this->render($viewSidebar) ?>

        <?= $this->render($viewContent, ['content' => $content]) ?>

        <?= $this->render($viewFooter) ?>

    </div>


    </body>
    <?php $this->endBody() ?>
    </html>

<?php $this->endPage() ?>