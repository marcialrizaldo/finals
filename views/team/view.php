<?php
use yii\widgets\DetailView;
use yii\helpers\html;


$this->params['breadcrums'][] = ['label'=> 'Team','url'=>['/team/index']];
$this->params['breadcrums'][] = $model->team_name;

?>
<h1>View Team</h1>

<?= DetailView::widget([
'model' => $model,
'attributes' => [
'id',
'player_id',
'team_name',
'team_captain'
]]); ?>

<div class="pull-right">
    <?= Html::a('', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger glyphicon glyphicon-trash',
            'data' => [
                'confirm' => 'Are you sure you want to remove this team?',
                'method' => 'post',
            ],
        ]) ?>
	<?= Html::a('Update',
	['team/update', 'id'=> $model->id],
	['class' => 'btn btn-primary glyphicon glyphicon-ok']); ?>
	
</div>
