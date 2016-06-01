<?php
$this->breadcrumbs=array(
	'Material Ventana Metadatas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List MaterialVentanaMetadata','url'=>array('index')),
	array('label'=>'Create MaterialVentanaMetadata','url'=>array('create')),
	array('label'=>'View MaterialVentanaMetadata','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage MaterialVentanaMetadata','url'=>array('admin')),
	);
	?>

	<h1>Update MaterialVentanaMetadata <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>