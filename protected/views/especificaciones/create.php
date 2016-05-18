<?php
$this->breadcrumbs = array (
		'Especificaciones' => array (
				'index' 
		),
		'Create' 
);

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

if(isset($_GET['modelop'])){
	$modelop=$_GET['modelop'];
}

?>

<h1>Añadir especificaciones <?= $modelop;  ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>