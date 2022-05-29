<?php
// namespace App\Models;

class OverviewController extends Controller {

    public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('overview'),
				'users'=>array('*'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

    public function actionIndex()
	{
        // $data=Address::model()->with('bills')->findAll();

        $data=Address::model()->findAll(array(
            'with'=>array(
                'bills.foreign',
            )
        ));

        // $tablesDataProvider = new CArrayDataProvider($data);

		$this->render('index',array(
			'model'=>$data,
		));
        

        

        // $dataProvider=new CActiveDataProvider('Bill', array(
        //     'criteria'=>array(
        //         'condition'=>'id=1',
        //     ),
        // ));
        // $this->render('index',array(
		// 	'dataProvider'=>$dataProvider->getData(),
		// ));
        // // $dataProvider->getData() will return a list of Post objects
    }
}