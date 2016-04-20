<?php
$this->breadcrumbs=array(
	'Factura Metadatas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List FacturaMetadata','url'=>array('index')),
	array('label'=>'Create FacturaMetadata','url'=>array('create')),
	array('label'=>'View FacturaMetadata','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage FacturaMetadata','url'=>array('admin')),
	);
	?>

	<h1>Update FacturaMetadata <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>