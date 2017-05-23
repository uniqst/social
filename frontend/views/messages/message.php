<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Сообщения: '.$model->name.' '.$model->surname;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-message bgwhite">
<div class="list-group">
<h1>Сообщения: <?=$model->name?> <?=$model->surname?></h1>
<?php foreach($model->from as $message):?>
<a href="" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1"><img src="/<?=$message->from->avatar?>" style="width: 40px; border: 1px solid grey; border-radius: 50%"></h5>
      <small>3 days ago</small>
    </div>
    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    <small>Donec id elit non mi porta.</small>
  </a>
<?php endforeach;?>
</div>
</div>
