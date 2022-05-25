<?php
/* @var $this AddressController */
/* @var $model Address */

$this->breadcrumbs=array(
	'Адреса'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Список адресов', 'url'=>array('index')),
	array('label'=>'Добавить адрес', 'url'=>array('create')),
	array('label'=>'Изменить адрес', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить адрес', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Управление адресами', 'url'=>array('admin')),
);
?>

<h1>Просмотр адреса №<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'gorod',
		'adres',
		'dom',
		'korpus',
		'kvartira',
	),
)); ?>
