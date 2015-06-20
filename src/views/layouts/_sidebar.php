<?php
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this \yii\web\View */

$controller = Yii::$app->controller;
?>

<div id="sidebar" class="sidebar responsive">
    <div class="sidebar-shortcuts" id="sidebar-shortcuts">
        <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
            <?php echo Html::a('<i class="ace-icon fa fa-plus"></i>', ['/'], ['class' => 'btn btn-success']); ?>
            <?php echo Html::a('<i class="ace-icon fa fa-book"></i>', ['/'], ['class' => 'btn btn-info']); ?>
            <?php echo Html::a('<i class="ace-icon fa fa-users"></i>', ['/user/admin/index'], ['class' => 'btn btn-warning']); ?>
            <?php echo Html::a('<i class="ace-icon fa fa-signal"></i>', ['/'], ['class' => 'btn btn-danger']); ?>
        </div>
        <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
            <?php echo Html::a('', ['/'], ['class' => 'btn btn-success']); ?>
            <?php echo Html::a('', ['/'], ['class' => 'btn btn-info']); ?>
            <?php echo Html::a('', ['/user/admin/index'], ['class' => 'btn btn-warning']); ?>
            <?php echo Html::a('', ['/'], ['class' => 'btn btn-danger']); ?>
        </div>
    </div>

    <ul class="nav nav-list">
        <li class="">
            <a href="<?= Yii::$app->homeUrl ?>">
                <i class="menu-icon fa fa-tachometer"></i>
                <span class="menu-text"> Dashboard </span>
            </a>

            <b class="arrow"></b>
        </li>

        <li class="<?php echo ($controller && $controller->module->id == 'user' && $controller->id == 'admin') || ($controller && $controller->module->id == 'rbac') ? 'open active' : '' ?>">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-users"></i>
                    <span class="menu-text">
                        Users
                    </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="<?php echo $controller && $controller->module->id == 'user' && $controller->id == 'admin' && $controller->action->id == 'create' ? 'active' : '' ?>">
                    <a href="<?= Url::to(['/user/admin/create']) ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Create User
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="<?php echo $controller && $controller->module->id == 'user' && $controller->id == 'admin' && $controller->action->id == 'index' ? 'active' : '' ?>">
                    <a href="<?= Url::to(['/user/admin/index']) ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        List Users
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="<?php echo $controller && $controller->module->id == 'rbac' && $controller->id == 'role' && $controller->action->id == 'index' ? 'active' : '' ?>">
                    <a href="<?= Url::to(['/rbac/role/index']) ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        List Roles
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="<?php echo $controller && $controller->module->id == 'rbac' && $controller->id == 'permission' && $controller->action->id == 'index' ? 'active' : '' ?>">
                    <a href="<?= Url::to(['/rbac/permission/index']) ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        List Permissions
                    </a>
                    <b class="arrow"></b>
                </li>
            </ul>
        </li>

    </ul>
    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>
    <script>
        try {
            ace.settings.check('sidebar', 'collapsed');
        } catch (e) {
        }
    </script>
</div>

