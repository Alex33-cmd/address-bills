<?php
/* @var $this AddressController */
/* @var $model Address */

$this->breadcrumbs=array(
	'Адреса'=>array('index'), 
    'Тест',
);

$this->menu=array(
	array('label'=>'Список адресов', 'url'=>array('index')),
);
?>

<h1>Test</h1>

<?php
    if (isset($model)) {
        echo var_dump($model);
    };
?>