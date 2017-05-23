<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Сообщения';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-message">
<h1>Сообщения</h1>
<div class="list-group">
<?php foreach($model as $message):?>
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">От <?=$message->from->name?> <?=$message->from->surname?></h5>
      <small><?=$message->date?></small>
    </div>
    <p class="mb-1"><?=$message->content?></p>
  </a>
  <?php endforeach;?>
</div>
</div>
