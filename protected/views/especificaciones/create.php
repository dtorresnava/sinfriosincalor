<?php
$this->breadcrumbs = array (
		'Especificaciones' => array (
				'index' 
		),
		'Create' 
);

$this->menu = array (
		array (
				'label' => 'Manage Especificaciones',
				'url' => array (
						'admin' 
				) 
		) 
);
?>

<h1>Añadir especificaciones</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>