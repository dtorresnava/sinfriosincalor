<?php
class PeticionClienteController extends Controller {
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
								'@' 
						) 
				),
				array (
						'allow', // allow authenticated user to perform 'create' and 'update' actions
						'actions' => array (
								'create',
								'update'
						),
						'users' => array (
								'@' 
						) 
				),
				array (
						'allow', // allow admin user to perform 'admin' and 'delete' actions
						'actions' => array (
								'admin',
								'delete' 
						),
						'users' => array (
								'admin' 
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
		$model = new PeticionCliente ();
		$modelFoto=new SubirFoto();
		$usuario = new Usuarios();
		$id=Yii::app()->user->id;
		
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		
		if (isset ( $_POST ['PeticionCliente'] )) {
			$model->attributes = $_POST ['PeticionCliente'];
			$model->fecha_pedido=date ( 'd/m/Y' );
			$model->numero_pedido=0;
			if ($model->save ()){
				$usuario = Usuarios::model()->findByAttributes(array(
						'id' => $id
				));
				$mail= new EnviarEmail();
				$subject = 'Petición presupuesto nº: '.$model->numero_pedido;
				$message = 'tiene una nueva petición de presupuesto.';
				$message .= "<a href='http://sinfriosincalor.esy.es/index.php?r=peticionCliente/view&id=".$model->id."'>Ver petici�n</a>";
				
				$mail->enviar(
						array($usuario->email, $usuario->nombre),
						array("sinfriosincalorvlcpyme@gmail.com", "admin"),
						$subject,
						$message
						);
				$smg="se ha enviado un email al administrador para generar tu presupuesto, en unos minutos tendrá su respuesta";
				
				$this->redirect ( array (
						'view',
						'id' => $model->id,
						'smg'=>$smg
				) );
			}
		}
		
		$this->render ( 'create', array (
				'model' => $model,
				'modelFoto'=>$modelFoto,
				'id'=>$id
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
		
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		
		if (isset ( $_POST ['PeticionCliente'] )) {
			$model->attributes = $_POST ['PeticionCliente'];
			if ($model->save ())
				$this->redirect ( array (
						'view',
						'id' => $model->id 
				) );
		}
		
		$this->render ( 'update', array (
				'model' => $model,
				'id'=>$id
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
		$dataProvider = new CActiveDataProvider ( 'PeticionCliente' );
		$this->render ( 'index', array (
				'dataProvider' => $dataProvider 
		) );
	}
	
	/**
	 * Manages all models.
	 */
	public function actionAdmin() {
		$model = new PeticionCliente ( 'search' );
		$model->unsetAttributes (); // clear any default values
		if (isset ( $_GET ['PeticionCliente'] ))
			$model->attributes = $_GET ['PeticionCliente'];
		
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
		$model = PeticionCliente::model ()->findByPk ( $id );
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
		if (isset ( $_POST ['ajax'] ) && $_POST ['ajax'] === 'peticion-cliente-form') {
			echo CActiveForm::validate ( $model );
			Yii::app ()->end ();
		}
	}
}
