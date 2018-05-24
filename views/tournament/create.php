<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Tournament;
use app\models\Team;
?>
<h1>Create Tournament</h1>

<div class="row">
	<div class="col-md-6">

		<?php $form = ActiveForm::begin() ?>

			<?= $form->field($model, 'event_name')->textInput() ?>

			<?= $form->field($model,'team_id')->dropDownList(ArrayHelper::map(
				Team::find()->asArray()->all(), 'id','team_name'))?>

			<?= $form->field($model, 'prize_pool')->textInput() ?>
			

			<div class="form-group">
				<?= Html::submitButton('Submit',['class'=>'btn btn-primary']) ?>
			</div>

			<?php ActiveForm::end(); ?>
	</div>
</div>
