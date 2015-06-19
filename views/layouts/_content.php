<?php
use yii\widgets\Breadcrumbs;
use cornernote\ace\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<div class="main-content">
    <?php if (isset($this->params['breadcrumbs'])) { ?>
        <div class="breadcrumbs">
            <?= Breadcrumbs::widget([
                'links' => $this->params['breadcrumbs'],
            ]) ?>
        </div>
    <?php } ?>

    <div class="page-content">

        <div class="page-header">
            <h1>
                <?= $this->title ?>
            </h1>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </div>

    </div>
</div>
