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
		$this->render('index');
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
				
				$email = new EnviarEmail();
				$subject=$model->subject;
				$message = $model->body;
				$message.="<br><br>";
					
				$email->enviar(array($model->email,$model->name),
						array("sinfriosincalorvlcpyme@gmail.com", "admin"),
						$subject,
						$message);
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
public function actionLogin()
	{
		$model=new LoginForm;

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
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
	
	/**
	 * 
	 */
	public function actionRecuperarpassword(){
		$model = new RecuperarPassword();
		$mse = "";
		if(isset($_POST['RecuperarPassword'])){
			$model->attributes = $_POST['RecuperarPassword'];
			if(!$model->validate()){
				$mse='<strong>Error al enviar el formulario</strong>';
			}else {
				$modelusuario = new Usuarios();
				$modelusuario=Usuarios::model()->findByAttributes(array(
						'email' => $model->email,
						'usuario'=>$model->usuario
				));
				
				
				
				if(isset($modelusuario)){
					$password = $model->generaPass();
					$modelusuario->password=md5($password);
					$modelusuario->save();
					$mse='<strong>'.$password.'</strong>';
					$email = new EnviarEmail();
					$subject="Has solicitado recuperar el password en ";
					$subject.=Yii::app()->name;
					$message = "Bienvenid@".$modelusuario->nombre." su password es ";
					$message.=$password;
					$message.="<br><br>";
					$message.="<a href='http://sinfriosincalor.esy.es/index.php?'> Recuperar password </a>";
					
					$email->enviar(array("sinfriosincalorvlcpyme@gmail.com","admin"),
							array($modelusuario->email, $modelusuario->usuario),
							$subject,
							$message);
				}
				$mse='<h3><strong>Se ha enviado un email con la nueva contraseña</strong><h3>';
			}
		}
		$model = new RecuperarPassword();
		$this->render('recuperarpassword', array('model'=>$model, 'mse'=>$mse));
	}
	
	
	
}