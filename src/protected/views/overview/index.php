<?php
/* @var $this OverviewController */
/* @var $model Overview */

// echo var_dump($model);
?>

<h1>Общий вид</h1>

<?php 
foreach ($model as $m) 
{
    foreach ($m as $a) 
    {
        echo var_dump($a) . '<br>';
    }
    echo '<br>';
    foreach ($m->bills as $blls) 
    {
        foreach ($blls->attributes as $b) 
        {
            echo var_dump($b) . '<br>';
        }
        echo '<br>';
    }
    echo '<br>';
}


//     $this->widget('zii.widgets.grid.CGridView',array(
// 	'id'=>'overview-grid',
// 	'dataProvider'=>$model,
//     'columns'=>array(
//     'id',
//     'adres',
//     // 'bills',
//     // array('header' => 'Bill', 'value' => '$data->value'),
// 	),
// )); 
?>
