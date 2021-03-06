<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
     
    
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
        $models = Pages::model()->findByPk('1');
        
        $this->render('index',array('models'=>$models));
		//$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		/*$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}*/


		$model=new UserLogin;
		$cart = Cart::model()->checkCartBySession();
		// var_dump($cart);
		// die();
		if (Yii::app()->user->isGuest) {
			
			// collect user input data
			if(isset($_POST['UserLogin']))	
			{
				// echo Yii::app()->user->returnUrl;
				// die('aa');
				$model->attributes=$_POST['UserLogin'];
				// validate user input and redirect to previous page if valid
				if($model->validate()) {
					// UPDATE CART
					if($cart):
						$cart->sess_id = Yii::app()->session->sessionID;
						$cart->save();
					endif;
					
					$this->lastViset();
					// if (Yii::app()->user->returnUrl=='/index.php')
					if(preg_match('/\/index\.php/', Yii::app()->user->returnUrl))
						$this->redirect(Yii::app()->user->returnUrl);
					else
						$this->redirect(Yii::app()->user->returnUrl);
				}
			}
			// display the login form
			$this->render('login',array('model'=>$model));
		} else{
			$this->redirect(Yii::app()->user->returnUrl);
		}

		// display the login form
		// $this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
	private function lastViset() {
		$lastVisit = User::model()->notsafe()->findByPk(Yii::app()->user->id);
		$lastVisit->lastvisit = time();
		$lastVisit->save();
	}
    
    public function actionProfile()
    {
     $models = Pages::model()->findByPk('2');
     if(!$models) throw new CHttpException(404,'Page Profile Not Found');
     $this->render('profile/index',array('models'=>$models));   
    }
    
    public function actionGalleryView($id)
    {
     $models = GalleryDetail::model()->findAllByAttributes(array('gallery_id'=>$id));
     if(!$models) throw new CHttpException(404,'Gallery Data Not Found');
     $this->render('gallery/galleryView',array('models'=>$models));   
    }
    
    public function actionTrunk()
    {
       $models = Pages::model()->findByPk('3');
       if(!$models) throw new CHttpException(404,'Page Not Found');
       $this->render('trunk/index',array('models'=>$models));           
    }
    public function actionRegister()
    {
        $this->render('account/register');
    }
     public function actionMyaccount()
    {
        $this->render('account/myaccount');
    }
    public function actionGallery(){
        $models = Gallery::model()->findAll();

        $this->render('gallery/index',array('models'=>$models));
    }
    
    public function actionProduct()
    {
        $dataProvider=new CActiveDataProvider('Product',array('pagination'=>array('pageSize'=>10)));
        $models=Product::model()->findAll();
        $this->render('product/index',array('dataProvider'=>$dataProvider,'models'=>$models));
    }
    public function actionProductlist()
    {
        $models=Product::model()->findAll();
        $this->render('product/productlist',array('models'=>$models));
    }
    
    public function actionProductdetail($id)
    {
        $models = Product::model()->findByPk($id);
        if(!$models) throw new CHttpException(404,'Product Data Not Found');
        $this->render('product/productdetail',array('models'=>$models));
    }


    

}