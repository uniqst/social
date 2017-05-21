<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Лента новостей';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
<div class="row">
<div class="col-md-8">
   <div class="list-group">
   <?php foreach($model as $news):?>
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start news" style="background: white; border-radius: 10px;">
    <div class="d-flex w-100 justify-content-between">
    <img src="/<?=$news->userProfile->avatar?>" style="border-radius: 50%; width: 50px; height: 50px;">
    <?=$news->userProfile->name?> <?=$news->userProfile->surname?>
    <img src="<?=$news->photo?>" width="100%">
      <h2><?=$news->name?></h2>
      <small>3 days ago</small>
    </div>
    <p class="mb-1"><?=$news->content?></p>
  </a>
  <?php endforeach;?>
</div>
</div>
</div>
</div>
