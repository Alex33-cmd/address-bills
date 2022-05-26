<?php
/* @var $this AddressController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Адреса',
);

$this->menu=array(
	array('label'=>'Добавить адрес', 'url'=>array('create')),
	array('label'=>'Управление адресами', 'url'=>array('admin')),
	array('label'=>'Тест', 'url'=>array('test')),
);
?>

<h1>Список адресов</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
