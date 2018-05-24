<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<h1>Update Tournament</h1>

<div class="row">
	<div class="col-md-6">

		<?php $form = ActiveForm::begin() ?>

			<?= $form->field($model, 'event_name')->textInput() ?>

			<?= $form->field($model, 'prize_pool')->textInput() ?>
			
			<div class="form-group">
    	<?= Html::submitButton("Update Tournament", ['class'=>'btn btn-primary']); ?>
			</div>


			<?php ActiveForm::end(); ?>
	</div>
</div>
