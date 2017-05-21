<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body style="background: url('/images/background.jpg');">
<?php $this->beginBody() ?>
<div class="wrap container">
<div class="row">
<div class="col-md-2 сol-sm-3" style="margin-top: 30px;">
<nav class="navbar navbar-default sidebar" role="navigation">
    <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>      
    </div>
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php if(Yii::$app->controller->route == 'profile/index'){ echo "class='active'";} ?> ><a href="/">Моя страница<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
        <li class="dropdown" <?php if(Yii::$app->controller->route == 'profile/friends'){ echo "class='active'";} ?>>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Друзья<span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a href="{{URL::to('createusuario')}}">Crear</a></li>
            <li><a href="#">Modificar</a></li>
            <li><a href="#">Reportar</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">Informes</a></li>
          </ul>
        </li>          
        <li <?php if(Yii::$app->controller->route == 'profile/news'){ echo "class='active'";} ?> ><a href="<?=Url::to(['profile/news'])?>">Новости<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a></li>        
        <li <?php if(Yii::$app->controller->route == 'profile/configuration'){ echo "class='active'";} ?>><a href="#">Настройки<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a></li>
         <li><a href="<?=Url::to(['site/logout'])?>">Выйти<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a></li>
      </ul>
    </div>
  </div>
</nav>
</div>
<div class="col-md-10 col-sm-9" style="padding: 30px;">
<?=$content?>
</div>
</div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
