<?php
use common\models\Player;
use yii\helpers\Html;
?>

<h1>
	<span class="pull-left">
		<?= Html::a('<i class="glyphicon glyphicon-user"></i>',['/
			player/create'],['class'=>'btn btn-primary btn-sn']);
		?>
	</span>
	Players
</h1>

<table class="table table-borderd table-stripped">
	<tr>
		<th>Fullname</th>
		<th>IGN</th>
		<th>Country</th>
	</tr>

	<?php foreach ($players as $player): ?> 
		<tr>
			<th><?=Html::a($player->fullname,['/player/view','id'=> $player ->id])?></th>
			<th><?= $player->IGN ?></th>
			<th><?= $player->country ?></th>
		</tr>
		<?php endforeach; ?>
</table>

