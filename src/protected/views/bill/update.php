<?php
/* @var $this BillController */
/* @var $model Bill */

$this->breadcrumbs=array(
	'Счета'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Изменить',
);

$this->menu=array(
	array('label'=>'Список счетов', 'url'=>array('index')),
	array('label'=>'Добавить счет', 'url'=>array('create')),
	array('label'=>'Просмотр счета', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Управление счетами', 'url'=>array('admin')),
);
?>

<h1>Update Bill <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>