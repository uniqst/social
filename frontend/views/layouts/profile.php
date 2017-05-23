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
<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Hello social',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Выйти', 'url' => ['/site/logout']],
    ];
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
    <style type="text/css">
      .list-group-item{
        background: none;
        border: none;
      }
      a{
        color: black;
      }
    </style>
    <div class="container">

        <?= Alert::widget() ?>
        <div class="row">
          <div class="col-md-2" style="padding: 0">
            <ul class="list-group">
              <li class="list-group-item justify-content-between">
              <a href="/"><i class="fa fa-home" aria-hidden="true"></i>
              Моя страница</a>
              </li>
              <li class="list-group-item justify-content-between">
                <a href="<?=Url::to(['/messages'])?>"><i class="fa fa-envelope-open" aria-hidden="true"></i>
                Сообщения</a>
                <span class="badge badge-default badge-pill">200</span>
              </li>
              <li class="list-group-item justify-content-between">
              <a href="<?=Url::to(['/news'])?>"><i class="fa fa-list-alt" aria-hidden="true"></i>
                Новости</a>
              </li>
              <li class="list-group-item justify-content-between">
              <a href="<?=Url::to('/friends')?>"><i class="fa fa-handshake-o" aria-hidden="true"></i>
                Друзья</a>
              </li>
              <li class="list-group-item justify-content-between">
              <a href="<?=Url::to(['/groups'])?>"><i class="fa fa-users" aria-hidden="true"></i>
                Групы</a>
              </li>
              <li class="list-group-item justify-content-between">
                  <a href="<?=Url::to(['/photo'])?>"><i class="fa fa-picture-o" aria-hidden="true"></i>
                Фотографии</a>
              </li>
              <li class="list-group-item justify-content-between">
              <a href="<?=Url::to(['/video'])?>"><i class="fa fa-youtube-play" aria-hidden="true"></i>
                Видео</a>
              </li>
              <li class="list-group-item justify-content-between">
              <a href="<?=Url::to(['/games'])?>"><i class="fa fa-gamepad" aria-hidden="true"></i>
                Игры</a>
              </li>
            </ul>
          </div>
          <div class="col-md-10">
               <?= $content ?>
          </div>
        </div>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
