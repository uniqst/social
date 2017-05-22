<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Фотографии';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-photo">
<h1>Мои фотографии</h1>
<div class="row">
<div class="col-md-3 col-sm-4 col-xs-12 text-center" style="margin-bottom: 20px;">
<img src="/<?=$model->avatar;?>" height="150px;">
</div>
<?php foreach($model->gallery as $photo):?>
 <div class="col-md-3 col-sm-4 col-xs-12 text-center" style="margin-bottom: 20px;">
<img src="/<?=$photo->photo;?>"  height="150px;">
</div>
<?php endforeach;?>
</div>
</div>
