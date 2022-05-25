<?php
/* @var $this BillController */
/* @var $model Bill */

$this->breadcrumbs=array(
	'Счета'=>array('index'),
	'Добавить',
);

$this->menu=array(
	array('label'=>'Список счетов', 'url'=>array('index')),
	array('label'=>'Управление счетами', 'url'=>array('admin')),
);
?>

<h1>Добавить Счет</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>