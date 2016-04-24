<?php
$this->breadcrumbs = array (
		'Especificaciones' => array (
				'index' 
		),
		'Create' 
);

$modelo = $_GET['modelop'];

$this->menu = array (
		array (
				'label' => 'List Especificaciones',
				'url' => array (
						'index' 
				) 
		),
		array (
				'label' => 'Manage Especificaciones',
				'url' => array (
						'admin' 
				) 
		) 
);
?>

<h1>Añadir especificaciones al modelo: <?=$modelo ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>