<?php
$this->breadcrumbs=array(
	'Material Ventana Metadatas'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List MaterialVentanaMetadata','url'=>array('index')),
array('label'=>'Create MaterialVentanaMetadata','url'=>array('create')),
array('label'=>'Update MaterialVentanaMetadata','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete MaterialVentanaMetadata','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage MaterialVentanaMetadata','url'=>array('admin')),
);
?>

<h1>View MaterialVentanaMetadata #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'descripcion',
		'observaciones',
),
)); ?>
