<?php
use yii\widgets\DetailView;
use yii\helpers\html;


$this->params['breadcrums'][] = ['label'=> 'Players','url'=>['/player/index']];
$this->params['breadcrums'][] = $model->fullname;

?>

<h1>View Product</h1>
<?= DetailView::widget([
'model' => $model,
'attributes' => [
'id',
'fullname',
'IGN',
'country',
]]); ?>

<div class="pull-right">
    <?= Html::a('', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger glyphicon glyphicon-trash',
            'data' => [
                'confirm' => 'Are you sure you want to remove this player?',
                'method' => 'post',
            ],
        ]) ?>
	<?= Html::a('Update Player',
	['player/update', 'id'=> $model->id],
	['class' => 'btn btn-primary glyphicon glyphicon-ok']); ?>
	
</div>
