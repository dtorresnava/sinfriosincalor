<?php
$this->breadcrumbs=array(
	'Especificaciones'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Especificaciones','url'=>array('index')),
array('label'=>'Create Especificaciones','url'=>array('create')),
array('label'=>'Update Especificaciones','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Especificaciones','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Especificaciones','url'=>array('admin')),
);
?>

<h1>View Especificaciones #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'producto_id',
		'potencia_frio',
		'potencia_calor',
		'eficiencia_frio',
		'eficiencia_calor',
		'consumo_frio',
		'consumo_calor',
		'dimencion_alto_ue',
		'dimencion_ancho_ue',
		'dimencion_largo_ue',
		'peso_ue',
		'conexion_pequeña',
		'conexion_grande',
		'tipo_caudal',
		'posicion_tubos_conextion',
		'peso_ui',
		'dimencion_alto_ui',
		'dimencion_ancho_ui',
		'dimencion_largo_ui',
		'cantidad_unidades',
),
)); ?>
