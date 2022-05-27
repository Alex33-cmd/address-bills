<?php

class ApiController extends Controller
{
    /**
     * Default response format
     */
    private $format = 'json';
    /**
     * @return array action filters
     */


    public function filters()
    {
        return array();
    }

    public function actionList()
    {
            // Get model instance
            $models = Bill::model()->findAll();
                // echo var_dump($models);

            if (empty($models)) {
                $this->_sendResponse(200,
                    sprintf('No items where found for model <b>%s</b>', $_GET['model']), "text/html");
            } else {
                // Prepare response
                $rows = array();
                foreach ($models as $model)
                    $rows[] = $model->attributes;
                // Send the response
                $this->_sendResponse(200, CJSON::encode($rows));
            }
    }

    public function actionView()
    {
            //Check id-a from get
            if(!isset($_GET['id'])) 
            $this->_sendResponse(500, 'Error: Parameter <b>id</b> is missing' );

            // Get model instance
            $model = Bill::model()->findByPk($_GET['id']);

            if(is_null($model)) 
            $this->_sendResponse(404, 'No Item found with id '.$_GET['id'], "text/html");
            else 
            $this->_sendResponse(200, CJSON::encode($model));
    }
    

    public function actionCreate()
    {
    }

    public function actionUpdate()
    {
    }

    public function actionDelete()
    {
    }

    private function _getStatusCodeMessage($status)
    {
        $codes = Array(
            200 => 'OK',
            400 => 'Bad Request',
            401 => 'Unauthorized',
            402 => 'Payment Required',
            403 => 'Forbidden',
            404 => 'Not Found',
            500 => 'Internal Server Error',
            501 => 'Not Implemented',
        );
        return (isset($codes[$status])) ? $codes[$status] : '';
    }

    private function _sendResponse($status = 200, $body = '', $content_type = 'application/json')
    {
        // set the status
        $status_header = 'HTTP/1.1 ' . $status . ' ' . $this->_getStatusCodeMessage($status);
        header($status_header);
        // and the content type
        header('Content-type: ' . $content_type);

        if($body != '')
        {
            // send the body
            echo $body;
        }
        else{

            $message = '';

            switch($status)
            {
                case 401:
                    $message = 'You must be authorized to view this page.';
                    break;
                case 404:
                    $message = 'The requested URL ' . $_SERVER['REQUEST_URI'] . ' was not found.';
                    break;
                case 500:
                    $message = 'The server encountered an error processing your request.';
                    break;
                case 501:
                    $message = 'The requested method is not implemented.';
                    break;
            }
            echo $body;
        }
        Yii::app()->end();
    }
}