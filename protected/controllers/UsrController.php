<?php

class UsrController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionShipping(){
		$model = ShippingAddr::model()->findAllByAttributes(array('user_id'=>Yii::app()->user->getID()));
		
		$this->render('shipping',array('model'=>$model));
	}

	public function actionCreateShipping()
	{
		$model = new ShippingAddr;
		if(isset($_POST['ShippingAddr'])){
			$model->attributes = $_POST['ShippingAddr'];
			if($model->save()){
				$this->redirect(array('shipping'));
			}
		}

		$this->render('createShipping',array('model'=>$model));
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/


}