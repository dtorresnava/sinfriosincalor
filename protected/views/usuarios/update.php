<?php
$this->breadcrumbs = array (
		'Usuarioses' => array (
				'index' 
		),
		$model->id => array (
				'view',
				'id' => $model->id 
		),
		'Update' 
);

$this->menu = array (
		array (
				'label' => 'Ver clientes',
				'url' => array (
						'clientes' 
				) 
		),
		array (
				'label' => 'Ver empleados',
				'url' => array (
						'empleados'
				)
		),
		array (
				'label' => 'Registrar empleado',
				'url' => array (
						'create' 
				) 
		),
		array (
				'label' => 'Mas info',
				'url' => array (
						'view',
						'id' => $model->id 
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

<h1>Modificar usuario <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>