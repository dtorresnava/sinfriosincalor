<?php
$this->breadcrumbs = array (
		'Usuarios' => array (
				'index' 
		),
		'Create' 
);

$this->menu = array (
		array (
				'label' => 'Ver Usuarios',
				'url' => array (
						'index' 
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

<h1 class="posstitle">Crear usuario</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model, 'smg'=>$smg)); ?>