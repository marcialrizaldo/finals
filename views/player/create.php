<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<h1>New Player</h1>

<div class="row">
	<div class="col-md-6">

		<?php $form = ActiveForm::begin() ?>

			<?= $form->field($model, 'fullname')->textInput() ?>

			<?= $form->field($model, 'IGN')->textInput() ?>

			<?= $form->field($model, 'country')->textInput() ?>
			

			<div class="form-group">
				<?= Html::submitButton('Submit',['class'=>'btn btn-primary']) ?>
			</div>

			<?php ActiveForm::end(); ?>
	</div>
</div>
