<?php
use yii\widgets\DetailView;
use yii\helpers\html;


$this->params['breadcrums'][] = ['label'=> 'Tournament','url'=>['/team/index']];
$this->params['breadcrums'][] = $model->team_id;

?>
<h1>View Tournament</h1>

<?= DetailView::widget([
'model' => $model,
'attributes' => [
'id',
'team_id',
'event_name',
'prize_pool'
]]); ?>

<div class="pull-right">
    <?= Html::a('', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger glyphicon glyphicon-trash',
            'data' => [
                'confirm' => 'Are you sure you want to remove this tournament?',
                'method' => 'post',
            ],
        ]) ?>
	<?= Html::a('Update Team',
	['tournament/update', 'id'=> $model->id],
	['class' => 'btn btn-primary glyphicon glyphicon-ok']); ?>
	
</div>
