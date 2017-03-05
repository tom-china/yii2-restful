<?php

	namespace api\modules\v1\controllers;

	use yii\rest\ActiveController;

	/**
	 * Country Controller API
	 *
	 * @author Budi Irawan <deerawan@gmail.com>
	 */
	class UserController extends ActiveController
	{
	    public $modelClass = 'api\modules\v1\models\User';

	    //设计返回json
	    public function behaviors()  
	    {  
	        $behaviors = parent::behaviors();  
	        $behaviors['contentNegotiator']['formats'] = ['application/json' => \yii\web\Response::FORMAT_JSON];  
	  
	  
	        return $behaviors;  
	    }
	}