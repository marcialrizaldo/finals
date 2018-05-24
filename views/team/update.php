<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<h1>Update Team</h1>

<div class="row">
	<div class="col-md-6">

		<?php $form = ActiveForm::begin() ?>

			<?= $form->field($model, 'team_name')->textInput() ?>

			<?= $form->field($model, 'team_captain')->textInput() ?>
			
			<<div class="form-group">
    	<?= Html::submitButton("Update Team", ['class'=>'btn btn-primary']); ?>
			</div>


			<?php ActiveForm::end(); ?>
	</div>
</div>
