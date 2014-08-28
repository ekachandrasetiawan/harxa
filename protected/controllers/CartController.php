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
    
    public function actionCheckOut()
    {
    	$cart = Cart::model()->checkCartBySession();
    	if (Yii::app()->user->isGuest) {
			// $model=new UserLogin;
			Yii::app()->user->returnUrl = $this->createUrl('cart/checkOut');
			$this->redirect(array('site/login'));
		}
    	/*if($cart->state == 0)
    		$cart->state = 1;
    		$cart->update();*/
        $this->render('checkout');
    }
    
    public function actionTimeSchedule(){
        $this->render('timeschedule');
    }
    
    public function actionShippingAddress(){
    	$cart = Cart::model()->checkCartBySession();
    	if(!$cart){
			throw new ChttpException(404,'You must shipping first');
		}

    	$model = ShippingAddr::model()->getPrimaryShippingAddr();
    	$shipmentTo = ShipmentTo::model()->findByAttributes(array('cart_id'=>$cart->id));
    	if(!$shipmentTo)
    		$shipmentTo = new ShipmentTo;
		
    	
    	if(isset($_POST['ShipmentTo'])){
    		

    		$shipmentTo->attributes = $_POST['ShipmentTo'];
    		$shipmentTo->cart_id = $cart->id;
    		if($shipmentTo->save()){
    			$this->redirect(array('shippingMethod'));
    		}
    	}

        $this->render('shippingaddress',array('model'=>$model,'shipmentTo'=>$shipmentTo));
    }

   	public function actionSetShipmentTo(){
   		if(!isset($_POST['id'])){
   			throw new CHttpException(404,'Id Not Posted');
   		}

   		$id = (int) $_POST['id'];

   		$addr = ShippingAddr::model()->findByPk($id);
   		if(!$addr) throw new CHttpException(404,'Shipping Address Not Found');
   		header('Content-type:application/json');
   		echo CJSON::encode($addr->attributes);
   	}
    


    public function actionShippingMethod(){
    	$cart = Cart::model()->checkCartBySession();
    	$sh = new Ongkir;
    	$costs = $sh->getCost($cart->ShipmentTo->city);
    	/*echo '<pre>';
    	var_dump($costs);
    	echo '</pre>';*/
    	$this->render('shippingmethod',array('cart'=>$cart,'costs'=>$costs)); 
    }
    
    public function actionPaymentMethod(){
        $this->render('paymentmethod');
    }
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
			//echo Yii::app()->session->sessionID;
			if($cart==null){
				/*$cart = new Cart;
				$cart->type = 1;
				$cart->state = 0;
				$cart->save();*/
				$cart = Cart::model()->startNewCart();
			}
			// var_dump($cart);

		}
		else{
			// search by id
			$cart = Cart::model()->findByPk($id);

		}


		// die();

		if(isset($cart->cartDetails)):
			$cartDetailProvider = new CArrayDataProvider($cart->cartDetails,array());
		else:
			$cartDetailProvider = new CArrayDataProvider(CartDetail::model()->findAllByAttributes(array('cart_id'=>$cart->id)));
		endif;


		$this->render('cartList',array('cart'=>$cart,'cartDetailProvider'=>$cartDetailProvider));
	}

	public function actionSelectSchedule()
    {
    	$data['setting'] = Setting::model()->getSchedule();

    	foreach($data['setting']->settingDetails as $i=>$det)
        {
          if($det->param == 'open_start')
          {
            $data['open'] = $det->value;
          }
          elseif($det->param=='open_close')
          {
            $data['close'] = $det->value;
          }
          /*elseif($det->param=='schedule_time')
          {
            $times = $det->value;
          }*/
          else{
            $data[$det->param] = $det->value;
            // echo $det->param;
          }
          // echo 'a';
        }
        /*echo $open.'<br/>';
        echo $close.'<br/>';*/
        
        $datetime1 = new DateTime($data['open']);
        $datetime2 = new DateTime($data['close']);
        $interval = $datetime1->diff($datetime2);
        $data['diff'] = $interval->format('%a');
        // echo $interval->format('%a');

        if(isset($_POST)){
        	// var_dump($_POST);
        	// DISINI ACTIONNYA
        }


    	$this->render('selectSchedule',$data);
    }


}