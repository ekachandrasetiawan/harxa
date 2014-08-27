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

	public function actionUpdateShippingAddr($id){
		$model = ShippingAddr::model()->findByPk($id);
		if(!$model) throw new CHttpException(404,'Data Not Found');
		if(isset($_POST['ShippingAddr'])){
			$model->attributes = $_POST['ShippingAddr'];
			if($model->save()){
				$this->redirect(array('shipping'));
			}
		}


		$this->render('updateShippingAddr',array('model'=>$model));
	}

	public function actionSetAsPrimaryShippingAddr($id)
	{
		$model = ShippingAddr::model()->findByPk($id);
		if(!$model)throw new CHttpException(404,'Not Found');

		$oldPrimary = ShippingAddr::model()->findByAttributes(array('user_id'=>Yii::app()->user->getID(),'primary'=>1));
		if($oldPrimary && $model){
			$oldPrimary->primary = 0;
			$oldPrimary->save();
		}
		if($model){
			$model->primary = 1;
			$model->save();
		}
		$this->redirect(Yii::app()->user->returnUrl);
	}


	public function actionGetCity($term){

		$ongkir = Ongkir::getCity($term);
		$ret = array();
		if($ongkir){
			echo $ongkir;
		}
		// var_dump($ongkir);
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