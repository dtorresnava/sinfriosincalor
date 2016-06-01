<?php
$this->breadcrumbs=array(
	'Material Ventana Metadatas'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List MaterialVentanaMetadata','url'=>array('index')),
array('label'=>'Manage MaterialVentanaMetadata','url'=>array('admin')),
);
?>

<h1>Create MaterialVentanaMetadata</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>