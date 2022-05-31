<?php
class TestAction extends CAction
{
    public function run()
    {
		// $model = new Address;
		// $model->gorod = 'SPb';
		// $this->render('test',array(
		// 	'model'=>$model,
		// ));
		
		// $model = Address::model()->find('gorod = :param', array('param'=>'Санкт-Петербург'));
		// $this->render('test',array(
			// 	'model'=>$model,
			// ));
		
        $model = new Address;
		$model->gorod = 'NYC';
		if($model->validate()) {
			$model->save();
		}
		echo var_dump($model->attributes);
		// CController::render('test',array('model'=>$model));

		// $this->render('test',array('model'=>$model));
    }
}