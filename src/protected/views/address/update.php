<?php
/* @var $this AddressController */
/* @var $model Address */

$this->breadcrumbs=array(
	'Адреса'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Изменить',
);

$this->menu=array(
	array('label'=>'Список адресов', 'url'=>array('index')),
	array('label'=>'Добавить адрес', 'url'=>array('create')),
	array('label'=>'Просмотр адреса', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Управление адресами', 'url'=>array('admin')),
);
?>

<h1>Изменить адрес <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>