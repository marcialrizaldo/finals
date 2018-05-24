<?php
use app\models\Team;
use yii\helpers\Html;
?>

<h1>
	<span class="pull-left">
		<?= Html::a('<i class="glyphicon glyphicon-fire"></i>',['/
			team/create'],['class'=>'btn btn-primary btn-sn']);
		?>
	</span>
	Teams
</h1>
    

<table class="table table-borderd table-stripped">
	<tr>
		<th>Player Name</th>
		<th>Team name</th>
		<th>Team captain</th>
	</tr>

	<?php foreach ($team as $team): ?> 
		<tr>
			<th><?=Html::a($team->player->fullname,['/team/view','id'=> $team ->id])?></th>
			<th><?= $team->team_name ?></th>
			<th><?= $team->team_captain ?></th>
		</tr>
		<?php endforeach; ?>
</table>
