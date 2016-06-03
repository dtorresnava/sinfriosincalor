<?php
$this->breadcrumbs = array (
		'Usuarioses' => array (
				'index' 
		),
		$model->id 
);

$this->menu = array (
		array (
				'label' => 'Ver usuarios',
				'url' => array (
						'index' 
				) 
		),
		array (
				'label' => 'Añadir usuario',
				'url' => array (
						'create' 
				) 
		),
		array (
				'label' => 'Modificar usaurio',
				'url' => array (
						'update',
						'id' => $model->id 
				) 
		),
		array (
				'label' => 'Eliminar usuario',
				'url' => '#',
				'linkOptions' => array (
						'submit' => array (
								'delete',
								'id' => $model->id 
						),
						'confirm' => 'Est�s seguro de eliminar al usaurio?' 
				) 
		),
		array (
				'label' => 'Administrar usuarios',
				'url' => array (
						'admin' 
				) 
		) 
);
?>

<h1>Detalle del usuario #<?php echo $model->id; ?></h1>


<?php
if (Yii::app ()->user->name == 'admin') {
	$this->widget ( 'booster.widgets.TbDetailView', array (
			'data' => $model,
			'attributes' => array (
					'id',
					'nombre',
					'dni',
					'roles',
					'calle',
					'poblacion',
					'provincia',
					'cp',
					'email',
					'telefono',
					'fecha_alta',
					'usuario',
					'password' 
			) 
	) );
}else{
	$this->widget ( 'booster.widgets.TbDetailView', array (
			'data' => $model,
			'attributes' => array (
					'nombre',
					'usuario',
					'roles',
					'email',
					'fecha_alta' 
			) 
	) );;	
}
?>
