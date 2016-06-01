<?php
// _menu.php
$items = array (
		array (
				'label' => 'Productos',
				'url' => array (
						'/productos/index'
				),
				'visible' =>Yii::app()->user->name != "admin"
		),
		array (
				'label' => 'Servicios',
				'url' => array (
						'/servicios/index'
				),
				'visible' =>Yii::app()->user->name != "admin"
		),
		array(
				'label'=>'Pedir presupuesto',
				'url'=>array(
						'peticionCliente/create'
				),
				'visible'=>!Yii::app()->user->isGuest && Yii::app()->user->name !="admin"
		),
		array(
				'label'=>'Ver peticiones',
				'url'=>array(
						'peticionCliente/admin'
				),
				'visible'=>Yii::app()->user->name == "admin"
		),
		array(
				'label'=>'Ver presupuestos',
				'url'=>array(
						'presupuestoPeticion/admin'
				),
				'visible'=>Yii::app()->user->name == "admin"
		),
		array (
				'label' => 'Usuarios',
				'url' => array (
						'/usuarios/admin'
				),
				'visible' =>Yii::app()->user->name == "admin"
		),
// 		array (
// 				'label' => 'Orientacion habitacion',
// 				'url' => array (
// 						'/orientacionMetadata/admin'
// 				),
// 				'visible' =>Yii::app()->user->name == "admin"
// 		),
// 		array (
// 				'label' => 'Material ventana ',
// 				'url' => array (
// 						'/materialVentanaMetadata/admin'
// 				),
// 				'visible' =>Yii::app()->user->name == "admin"
// 		),
		array (
				'label' => 'About',
				'url' => array (
						'/site/page',
						'view' => 'about' 
				),
				'visible' =>Yii::app()->user->name != "admin"
		),
		array (
				'label' => 'Contacto',
				'url' => array (
						'/site/contact' 
				),
				'visible' =>Yii::app()->user->name != "admin"
		),
		array (
				'label' => 'Dar de alta',
				'url' => array (
						'/usuarios/create'
				),
				'visible' =>Yii::app()->user->isGuest
		),
		array (
				'label' => 'Servicios',
				'url' => array (
						'/servicios/admin'
				),
				'visible' =>Yii::app()->user->name == "admin"
		),
		array (
				'label' => 'Ofertas',
				'url' => array (
						'/ofertas/admin'
				),
				'visible' =>Yii::app()->user->name =="admin"
		),
		array (
				'label' => 'Producto',
				'url' => array (
						'/productos/admin'
				),
				'visible' =>Yii::app()->user->name == "admin"
		),
		array (
				'label' => 'Fabricante',
				'url' => array (
						'/fabricante/admin'
				),
				'visible' =>Yii::app()->user->name == "admin"
		),
		array (
				'label' => 'Login',
				'class' => 'loginButtom',
				'url' => array (
						'/site/login' 
				),
				'visible' => Yii::app ()->user->isGuest 
		) 
);