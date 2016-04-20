<?php
$this->breadcrumbs=array(
	'Factura Metadatas'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List FacturaMetadata','url'=>array('index')),
array('label'=>'Manage FacturaMetadata','url'=>array('admin')),
);
?>

<h1>Create FacturaMetadata</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>