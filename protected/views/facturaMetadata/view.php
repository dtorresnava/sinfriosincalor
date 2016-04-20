<?php
$this->breadcrumbs=array(
	'Factura Metadatas'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List FacturaMetadata','url'=>array('index')),
array('label'=>'Create FacturaMetadata','url'=>array('create')),
array('label'=>'Update FacturaMetadata','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete FacturaMetadata','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage FacturaMetadata','url'=>array('admin')),
);
?>

<h1>View FacturaMetadata #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'producto_id',
		'factura_id',
		'cantidad',
		'id',
),
)); ?>
