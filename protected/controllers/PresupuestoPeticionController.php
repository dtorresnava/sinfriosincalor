<?php
YII_DEBUG;
class PresupuestoPeticionController extends Controller {
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
								'view',
								'validar'
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
								'admin' 
						) 
				),
				
				array (
						'allow', // allow admin user to perform 'admin' and 'delete' actions
						'actions' => array (
								'admin',
								'delete',
								'createAuto'
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
		$model = new PresupuestoPeticion ();
		
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		
		if (isset ( $_POST ['PresupuestoPeticion'] )) {
			$model->attributes = $_POST ['PresupuestoPeticion'];
			$model->validar = 0;
			$model->fecha_presupuesto = date('d/m/Y');
			if ($model->save ())		
				
				$this->redirect ( array (
						'view',
						'id' => $model->id 
				) );
		}
		
		$this->render ( 'create', array (
				'model' => $model,
		) );
	}
	
	/**
	 * Generar presupuesto de forma automática
	 */
	
	public function actionCreateAuto(){
		$model = new PresupuestoPeticion ();
		
		if(isset($_GET['cliente']) && $_GET['peticion_id']){
			$cliente_id=$_GET["cliente"];
			$peticion_id=$_GET['peticion_id'];
			
			$usermodel= new Usuarios();
			$peticionmodel = new PeticionCliente();
			
			
			$usermodel=Usuarios::model()->findByAttributes(array(
					'id'=>$cliente_id
			));
			
			$peticionmodel= PeticionCliente::model()->findByAttributes(array(
					'id'=>$peticion_id
			));
			
			
			$productos=Productos::model()->findAll();
			$num=0;
			foreach($productos as $producto){
				$num++;
			}
			$randomselect=rand(0, $num-1);
			$model->producto_id=$productos[$randomselect]->id;
			$model->presupuesto_producto=$productos[$randomselect]->precio;
			
			$servicios=Servicios::model()->findAll();
			$num=0;
			foreach($servicios as $servicio){
				$num++;
			}
			$randomselect=rand(0, $num-1);
			$model->servicio_id=$servicios[$randomselect]->id;
			$model->presupuesto_servicio=$servicios[$randomselect]->precio_hora;
			
			$model->peticion_cliente_id=$peticion_id;
			$model->validar = 0;
			$model->fecha_presupuesto = date('d/m/Y');
			
			
			$smg="No se ha podido generar el presupuesto";
			if($model->save (false)){
				$smg="Se ha generado el presupuesto";
				
				$usuario=new Usuarios();
				$usuario = Usuarios::model()->findByPk($cliente_id);
				
				$mail= new EnviarEmail();
				$subject = 'Presupuesto producto y servicio nº: '.$model->id;
				$message = 'Se ha generado el presupuesto para ver los detalles y validar el presupuesto acceda mediante el siguiente enlace:';
				$message .= "<a href='http://sinfriosincalor.esy.es/index.php?r=presupuestoPeticion/view&id=".$model->id."'>Ver y Validar presupuesto</a>";
				
				$mail->enviar(
						array("sinfriosincalorvlcpyme@gmail.com", "admin"),
						array($usuario->email, $usuario->nombre),						
						$subject,
						$message
						);
					
			}
			
			$this->render ( 'view', array (
					'model' => $model,
					'numfilas'=>$smg
			) );
			
		}
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
		
		if (isset ( $_POST ['PresupuestoPeticion'] )) {
			$model->attributes = $_POST ['PresupuestoPeticion'];
			if ($model->save ())
				$this->redirect ( array (
						'view',
						'id' => $model->id 
				) );
		}
		
		$this->render ( 'update', array (
				'model' => $model 
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
		$dataProvider = new CActiveDataProvider ( 'PresupuestoPeticion' );
		$this->render ( 'index', array (
				'dataProvider' => $dataProvider 
		) );
	}
	
	/**
	 * Manages all models.
	 */
	public function actionAdmin() {
		$model = new PresupuestoPeticion ( 'search' );
		$model->unsetAttributes (); // clear any default values
		if (isset ( $_GET ['PresupuestoPeticion'] ))
			$model->attributes = $_GET ['PresupuestoPeticion'];
		
		$this->render ( 'admin', array (
				'model' => $model 
		) );
	}
	
	/**
	 * Validar el presupuesto acción que realiza el usuario
	 * 
	 */
	public function actionValidar(){
		
		$smg="No entras en el if";
		if (isset($_GET['presupuesto_id'])&& isset($_GET['name'])){
			
			$idPresu=$_GET['presupuesto_id'];
			$user=$_GET['name'];
			$userPeticion="";
			
			$presupuesto = new PresupuestoPeticion();
			$usuario = new Usuarios();
			$pteciones = new PeticionCliente();
			 
			$presupuesto = PresupuestoPeticion::model()->findByPk($idPresu);
			if(isset($presupuesto)){
				
				$pteciones = PeticionCliente::model()->findByPk((int)$presupuesto->peticion_cliente_id);
				
				$usuario = Usuarios::model()->findByAttributes(array(
						'usuario'=>$user
				));
				
				if($usuario->id == $pteciones->cliente_id){
					$presupuesto->validar=1;
					$presupuesto->fecha_alta_presupuesto=date('d/m/Y');
					$presupuesto->save(false);
				}
			}
			
			
			$smg="Si entras en el if y validas";
			
		}
		
		$this->render ( 'validar', array(
				'smg'=>$smg
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
		$model = PresupuestoPeticion::model ()->findByPk ( $id );
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
		if (isset ( $_POST ['ajax'] ) && $_POST ['ajax'] === 'presupuesto-peticion-form') {
			echo CActiveForm::validate ( $model );
			Yii::app ()->end ();
		}
	}
}
