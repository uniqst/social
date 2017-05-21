<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Лента новостей';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>
	<?php foreach($model as $new):?>
	 <div class="news">
		<h2><?=$new->name?></h2>
		<img src="<?=$new->photo?>" style="width: 100%" />
		<p><?=$new->content?></p>
	 </div>
	<?php endforeach;?>

</div>
