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

    <div class="container">

        <?= Alert::widget() ?>
        <div class="row">
          <div class="col-md-2" style="padding: 0">
            <ul class="list-group" srytlk>
              <li class="list-group-item justify-content-between">
              <span class="fa fa-home"></span>
              Моя страница
              </li>
              <li class="list-group-item justify-content-between">
                Сообщения
                <span class="badge badge-default badge-pill">200</span>
              </li>
              <li class="list-group-item justify-content-between">
                Новости
              </li>
              <li class="list-group-item justify-content-between">
                Друзья
              </li>
              <li class="list-group-item justify-content-between">
                Групы
              </li>
              <li class="list-group-item justify-content-between">
                Галлерея
              </li>
              <li class="list-group-item justify-content-between">
                Видео
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
