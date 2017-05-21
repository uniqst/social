<?php
use yii\helpers\Html;
use yii\helpers\Url;

use yii\bootstrap\ActiveForm;
use yii\bootstrap\Modal;


$this->title = Yii::$app->user->identity->username;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row" >
	<div class="col-md-4">
			<p>
        <?= Html::img($model->userProfile->avatar, ['value' => Url::to(['/profile/gallery']) , 'width' => '100%', 'id' => 'modalButton']) ?>
    </p>
		<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'id' => 'form']]); ?>
			<?= $form->field($avatar, 'file')->fileInput(['id' => 'input', 'title' => 'Редактировать', 'style' => 'width: 100%'])->label(false) ?>
		<?php ActiveForm::end(); ?>
	</div>
 	<style type="text/css">
 		.modal-content{
 			height: 93vh;

 		}
 	</style>

    <?php
     Modal::begin([
    'id' => 'modal',
    'class' => 'container-fluid',
    'size' => 'modal-lg',
    ]);
    echo "<div id='modalContent'></div>";

    Modal::end();
    ?>
	<div class="col-md-8" style="padding: 0;">
	    <div class="bgwhite">
		<h1 style="margin-top: 0px;"><?=$model->userProfile->name?> <?=$model->userProfile->surname?></h1>
		<h2><?=$model->userProfile->status?></h2>
		<table class="table">
		<tr>
		<td>Дата рождения</td>
		<td><?=$model->userProfile->born?></td>
		</tr>
		<tr>
		<td>Город</td>
		<td><?=$model->userProfile->city?></td>
		</tr>
		<tr>
		<td>Семейное положение</td>
		<td><?=$model->userProfile->marital_status?></td>
		</tr>
		</table>
		</div>
		<div class="bgwhite">
			
		</div>
	</div>

</div>

</div>

