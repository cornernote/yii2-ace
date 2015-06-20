<?php
use cebe\gravatar\Gravatar;

/* @var $this \yii\web\View */
?>

<div id="navbar" class="navbar navbar-default">

    <div class="navbar-container" id="navbar-container">
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
            <span class="sr-only"><?= Yii::t('app', 'Toggle sidebar'); ?></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="navbar-header pull-left">
            <a href="<?= Yii::$app->homeUrl ?>" class="navbar-brand">
                <small>
                    <i class="fa fa-leaf"></i>
                    <?= Yii::$app->name ?>
                </small>
            </a>
        </div>

        <div class="navbar-buttons navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">
                <li class="light-blue">

                    <?php if (Yii::$app->user && !Yii::$app->user->isGuest) { ?>
                        <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                            <?= Gravatar::widget([
                                'email' => Yii::$app->user->identity->email,
                                'options' => [
                                    'class' => 'nav-user-photo',
                                    'alt' => Yii::$app->user->identity->username,
                                ],
                                'size' => 40,
                            ]); ?>
                            <span class="user-info">
								<small>Welcome,</small> <?= Yii::$app->user->identity->username ?>
    						</span>
                            <i class="ace-icon fa fa-caret-down"></i>

                        </a>
                        <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                            <li>
                                <a href="<?= \yii\helpers\Url::to(['/user/settings/profile']) ?>"><i class="ace-icon fa fa-user"></i> Profile</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="<?= \yii\helpers\Url::to(['/user/security/logout']) ?>" data-method="post"><i class="ace-icon fa fa-power-off"></i> Sign out</a>
                            </li>
                        </ul>
                    <?php } ?>

                </li>
            </ul>
        </div>
    </div>
</div>