<?php
/* @var $this BillController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Счета',
);

$this->menu=array(
	array('label'=>'Добавить счет', 'url'=>array('create')),
	array('label'=>'Управление счетами', 'url'=>array('admin')),
);
?>

<h1>Счета</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
