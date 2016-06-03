<?php
$this->breadcrumbs=array(
	'Servicioses'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'Ver servicios','url'=>array('index')),
array('label'=>'Añadir servicio','url'=>array('create')),
array('label'=>'Actualizar servicio','url'=>array('update','id'=>$model->id)),
array('label'=>'Borrar servicio','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Administrar servicios','url'=>array('admin')),
);
?>

<h1>Detalle servicio #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'nombre',
		'descripcion',
		'precio_hora',
),
)); ?>
