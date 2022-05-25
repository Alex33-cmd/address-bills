<?php
/* @var $this AddressController */
/* @var $model Address */

$this->breadcrumbs=array(
	'Адреса'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Список адресов', 'url'=>array('index')),
	array('label'=>'Управление адресами', 'url'=>array('admin')),
);
?>

<h1>Добавить адрес</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>