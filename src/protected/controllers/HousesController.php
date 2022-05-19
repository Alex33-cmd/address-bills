<?php

class HousesController extends Controller
{
    /*
        @var string
        the default layout for the view
        using two column layout
        protected/views/layouts/column2.php
    */
    public $layout = '//layouts/column2';

    /*
        @return array
        filter of the certain actions
    */
    public function filters() {
        return array(
            'accessControl', // access control for CRUD operations
            'postOnly + delete', //delete only via POST request
        );
    }

    /*
        @return array
        access control rules used by 'accessControl' filter (above)
    */
    public function accessRules() 
    {   
        return array(
            // allow all users to perform 'index' and 'view' actions
            array('allow', 'actions' => array('index','view'), 'users'=>array('*')),
            // allow authenticated users (@ symbol) to perform 'create' and 'update' actions
            array('allow', 'actions' => array('create','update'), 'users'=>array('@')),
            // allow admin users to perform 'admin' and 'delete' actions
            array('allow', 'actions' => array('admin','delete'), 'users'=>array('admin')),
            // deny all users to do anything else
            array('deny', 'users'=>array('*')),
        );
        
    }

    /*
        Returns model based on Primary Key given in GET variable
        If model is not found -> Http exception will be raised
        
        @param integer
        @return Houses model
        @throws Http exception
    */
    public function loadModel($id)
    {
        $model = Houses::model()->findByPk($id);
        if (model === null) {
            throw new CHttpException(404, 'Запрашиваемой страницы не существует.');
        }
    }

    /**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

    /*
        Action that Controller is going to take

        @param integer
        displays a particular model
        $id the ID of the model to be displayed
    */
    public function actionView($id)
    {
        $this->render('view', array('model'=>$this->loadModel($id)));
    }

    /*
        Action that Controller is going to take

        creates a new model
        on success -> redirect to 'view' page
    */
    public function actionCreate()
    {
        // loading the 'Houses' model
        $model = new Houses;

        // if AJAX validation is needed
        // $this->performAJAXValidation($model);

        // clicking the 'Create' button POSTs 'Houses'
        // getting information out of form
        if(isset($_POST['Houses'])){
            $model->attributes=$_POST['Houses'];
            if($model->save())
                // view record with specific id
                $this->redirect(array('view', 'id'=>$model->id));
        }
        $this->render('create', array('model'=>$model));
    }

    /*
        Action that Controller is going to take

        @param integer
        updates a particular model
        $id the ID of the model to be updated
        on success -> redirect to 'view' page
    */
    public function actionUpdate($id)
    {
        $model=$this->loadModel($id);

        // if AJAX validation is needed
        // $this->performAJAXValidation($model);

        if(isset($_POST['Houses'])){
            $model->attributes=$_POST['Houses'];
            if($model->save())
                // view record with specific id
                $this->redirect(array('view', 'id'=>$model->id));
        }
        $this->render('update', array('model'=>$model));
    }
}