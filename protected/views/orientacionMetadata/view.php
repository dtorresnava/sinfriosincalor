<?php
$this->breadcrumbs=array(
	'Orientacion Metadatas'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List OrientacionMetadata','url'=>array('index')),
array('label'=>'Create OrientacionMetadata','url'=>array('create')),
array('label'=>'Update OrientacionMetadata','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete OrientacionMetadata','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage OrientacionMetadata','url'=>array('admin')),
);
?>

<h1>View OrientacionMetadata #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'descripcion',
),
)); ?>
