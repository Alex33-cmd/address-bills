<?php
/* @var $this BillController */
/* @var $model Bill */

$this->breadcrumbs=array(
	'Счета'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Список счетов', 'url'=>array('index')),
	array('label'=>'Добавить счет', 'url'=>array('create')),
	array('label'=>'Изменить счет', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить счет', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Управление счетами', 'url'=>array('admin')),
);
?>

<h1>Просмотр счета №<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'foreignID',
		'nomer',
		'usluga',
		'data',
	),
)); ?>
