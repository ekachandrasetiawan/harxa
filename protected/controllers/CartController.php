<?php

class CartController extends Controller
{
	public function actionAdmin()
	{
		$this->render('admin');
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
	public function actionAddToCart(){
		// check if cart compare on session
		$check = Cart::model()->checkCartBySession();
		if(!$check){
			// if check is false then we will create new cart
			$cart = Cart::model()->startNewCart();

		}else{
			$cart = $check;
		}

		$cartDetail = new CartDetail;
		$cartDetail->cart_id = $cart->id;
		$cartDetail->qty = (int) $_POST['qty'];
		$cartDetail->product_id = $_POST['product_id'];
		$cartDetail->price = $_POST['price'];
		if($cartDetail->save()){
			$this->redirect(array('showCart'));
		}

		
	}
    
    public function actionShoppingcart()
    {
        $session=Yii::app()->session->sessionID;
        
        $models = Cart::model()->findByAttributes(array('sess_id'=>$session));
        
        
        if(!$models) throw new CHttpException(404,'Shopiing Cart Not Found');
        $detail=CartDetail::model()->findAllByAttributes(array('cart_id'=>$models->id));
        if(!$detail) throw new CHttpException(404,'Shopping Cart Not Found');
        $this->render('cart/index',array('models'=>$models,'detail'=>$detail));
    }

	public function actionShowCart($id=null){
		if($id==null){
			// search by session
			$cart = Cart::model()->checkCartBySession();
			echo Yii::app()->session->sessionID;
			// dei();

		}
		else{
			// search by id
			$cart = Cart::model()->findByPk($id);
		}


		$cartDetailProvider = new CArrayDataProvider($cart->cartDetails,array());


		$this->render('cartList',array('cart'=>$cart,'cartDetailProvider'=>$cartDetailProvider));
	}


}