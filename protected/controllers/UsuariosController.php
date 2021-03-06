<?php
class UsuariosController extends Controller {
	/**
	 *
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 *      using two-column layout. See 'protected/views/layouts/column2.php'.
	 *     
	 */
	public $layout = '//layouts/column2';
	
	/**
	 *
	 * @return array action filters
	 *        
	 */
	public function filters() {
		return array (
				'accessControl' 
		) // perform access control for CRUD operations
;
	}
	
	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * 
	 * @return array access control rules
	 *        
	 */
	public function accessRules() {
		return array (
				array (
						'allow', // allow all users to perform 'index' and 'view' actions
						'actions' => array (
								'index',
								'view' 
						),
						'users' => array (
								'admin' 
						), 
				),
				array (
						'allow', // allow authenticated user to perform 'create' and 'update' actions
						'actions' => array (
								'create',
								'update' 
						),
						'users' => array (
								'*' 
						), 
				),
				array(
						'allow',
						'actions' => array(
								'empleados',
								'clientes'
						),
						'users' => array(
								'admin'
						),
				),
				array (
						'allow', // allow admin user to perform 'admin' and 'delete' actions
						'actions' => array (
								'admin',
								'delete' 
						),
						'users' => array (
								'admin' 
						), 
				),
				array(
						'allow',
						'actions'=> array(
								'confirmarusuario'
						),
						'users' => array(
								'*'
						)
				),
				array (
						'deny', // deny all users
						'users' => array (
								'*' 
						) 
				)
		);
	}
	
	/**
	 * Displays a particular model.
	 * 
	 * @param integer $id
	 *        	the ID of the model to be displayed
	 *        	
	 */
	public function actionView($id) {
		$this->render ( 'view', array (
				'model' => $this->loadModel ( $id ) 
		) );
	}
	
	
	
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate() {
		$model = new Usuarios ();
		$smg="";
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		
		if (isset ( $_POST ['Usuarios'] )) {
			$model->attributes = $_POST ['Usuarios'];
			
			if ($model->save ()){
				$smg="Usuario creaddo correctamente, revisar el correo para activar su cuenta";
				$mail= new EnviarEmail();
				$subject = 'Confirmar cuenta';
				$message = 'Para confirmar su cuenta vaya a la siguiente direccion ....';
				$message .= "<a href='http://sinfriosincalor.esy.es/index.php?r=usuarios/create&user=".$model->usuario."&codactivate=".$model->password."'>Confirmar cuenta</a>";
				
				$mail->enviar(
						array("sinfriosincalorvlcpyme@gmail.com", "admin"), 
						array($model->email, $model->nombre), 
						$subject, 
						$message
						);
				$model = new Usuarios ();
				$this->render ('create', array (
						'model' => $model,
						'smg'=>$smg
				) );
			}
		}
		if(isset($_GET["user"]) && isset($_GET["codactivate"])){
			$usuario=$_GET['usuario'];
			$codactivate= $_GET['codactivate'];

			$modelusuario=Usuarios::model()->findByAttributes(array(
					'password' => $codactivate
			));
			if(isset($modelusuario)){
				$modelusuario->activo=1;
				$modelusuario->save();
			}		
		}
		
		$this->render ( 'create', array (
				'model' => $model,
				'smg'=>$smg
		) );
	}
	
	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * 
	 * @param integer $id
	 *        	the ID of the model to be updated
	 *        	
	 */
	public function actionUpdate($id) {
		$model = $this->loadModel ( $id );
		$smg="";
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		
		if (isset ( $_POST ['Usuarios'] )) {
			$model->attributes = $_POST ['Usuarios'];
			$model->password=md5($model->password);
			if ($model->save ())
				$this->redirect ( array (
						'view',
						'id' => $model->id 
				) );
		}
		
		$this->render ( 'update', array (
				'model' => $model,
				'smg'=>$smg
		) );
	}
	
	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * 
	 * @param integer $id
	 *        	the ID of the model to be deleted
	 *        	
	 */
	public function actionDelete($id) {
		if (Yii::app ()->request->isPostRequest) {
			// we only allow deletion via POST request
			$this->loadModel ( $id )->delete ();
			
			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if (! isset ( $_GET ['ajax'] ))
				$this->redirect ( isset ( $_POST ['returnUrl'] ) ? $_POST ['returnUrl'] : array (
						'admin' 
				) );
		} else
			throw new CHttpException ( 400, 'Invalid request. Please do not repeat this request again.' );
	}
	
	/**
	 * Lists all models.
	 */
	public function actionIndex() {
		$dataProvider = new CActiveDataProvider ( 'Usuarios' );
		$this->render ( 'index', array (
				'dataProvider' => $dataProvider 
		) );
	}
	
	/**
	 * Manages all models.
	 */
	public function actionAdmin() {
		$model = new Usuarios ( 'search' );
		$model->unsetAttributes (); // clear any default values
		if (isset ( $_GET ['Usuarios'] ))
			$model->attributes = $_GET ['Usuarios'];
		
		$this->render ( 'admin', array (
				'model' => $model 
		) );
	}
	
	
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * 
	 * @param
	 *        	integer the ID of the model to be loaded
	 *        	
	 */
	public function loadModel($id) {
		$model = Usuarios::model ()->findByPk ( $id );
		if ($model === null)
			throw new CHttpException ( 404, 'The requested page does not exist.' );
		return $model;
	}
	
	/**
	 * Performs the AJAX validation.
	 * 
	 * @param
	 *        	CModel the model to be validated
	 *        	
	 */
	protected function performAjaxValidation($model) {
		if (isset ( $_POST ['ajax'] ) && $_POST ['ajax'] === 'usuarios-form') {
			echo CActiveForm::validate ( $model );
			Yii::app ()->end ();
		}
	}
	
	
	public function actionConfirmarusuario(){
		$usuario=$_GET['user'];
		$codactivacion=$_GET['codactivate'];
		
		$modeluser = Usuarios::model()->usuario($usuario);
		if($codactivacion==$modeluser->password){
			$this->render ('confirmarusuario');	
		}
		
	}
	
	public function actionEmpleados()
	{
		$dataProvider=new CActiveDataProvider(Usuarios::model()->empleados());
		$this->render('index',array(
				'dataProvider'=>$dataProvider,
		));	
	}
	
	
	public function actionClientes()
	{
		$dataProvider=new CActiveDataProvider(Usuarios::model()->clientes());
		$this->render('index',array(
				'dataProvider'=>$dataProvider,
		));
	
	
	}
}
