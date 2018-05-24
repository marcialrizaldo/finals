<?php
use app\models\tournament;
use yii\helpers\Html;
?>

<h1>
	<span class="pull-left">
		<?= Html::a('<i class="glyphicon glyphicon-stats"></i>',['/
			tournament/create'],['class'=>'btn btn-primary btn-sn']);
		?>
	</span>
	Tournament
</h1>
    

<table class="table table-borderd table-stripped">
	<tr>
		<th>Team Name</th>
		<th>Event name</th>
		<th>Prize pool</th>
	</tr>

	<?php foreach ($tournaments as $tournament): ?> 
		<tr>
			<th><?=Html::a($tournament->team->team_name,['/tournament/view','id'=> $tournament ->id])?></th>
			<th><?= $tournament->event_name ?></th>
			<th><?= $tournament->prize_pool ?></th>
		</tr>
		<?php endforeach; ?>
</table>

