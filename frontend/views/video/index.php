<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Видео';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-video">
<div class="row">
<div class="col-md-8">
<?php foreach($model->video as $video):?>
<iframe width="100%" height="300" src="<?=$video->name?>" frameborder="0" allowfullscreen></iframe>
<?php endforeach;?>
</div>
</div>
</div>
