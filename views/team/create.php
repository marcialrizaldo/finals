<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Player;
?>
<h1>Team Create</h1>

<div class="row">
	<div class="col-md-6">

		<?php $form = ActiveForm::begin() ?>

		<div>
    	<?= $form->errorSummary($model); ?>
		</div>

			<?= $form->field($model, 'team_name')->textInput() ?>

			<?= $form->field($model,'player_id')->dropDownList(ArrayHelper::map(
				Player::find()->asArray()->all(), 'id','fullname'))?>

			<?= $form->field($model, 'team_captain')->textInput() ?>
			

			<div class="form-group">
				<?= Html::submitButton('Submit',['class'=>'btn btn-primary']) ?>
			</div>

			<?php ActiveForm::end(); ?>
	</div>
</div>
