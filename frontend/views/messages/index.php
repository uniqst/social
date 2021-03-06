<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$this->title = 'Сообщения';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-message bgwhite">
<h1>Сообщения</h1>
<div class="list-group">
<?php foreach($model as $message):?>
<a href="<?=Url::to(['/messages/message', 'from' => $message->from_id])?>" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1"><img src="/<?=$message->from->avatar?>" style="width: 40px; border: 1px solid grey; border-radius: 50%"> <?=$message->from->name?> <?=$message->from->surname?></h5>
      <small>3 days ago</small>
    </div>
    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    <small>Donec id elit non mi porta.</small>
  </a>
<?php endforeach;?>
</div>
</div>

