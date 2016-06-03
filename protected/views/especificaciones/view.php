<?php
$this->breadcrumbs=array(
	'Especificaciones'=>array('index'),
);

$this->menu=array(
array('label'=>'Ver especificaciones','url'=>array('index')),
array('label'=>'Modificar especificacion','url'=>array('update','id'=>$model->id)),
array('label'=>'Borrar especificacion','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Administrar especificaciones','url'=>array('admin')),
);

$producto=Productos::model()->findByPk($model->producto_id);
$modelo=$producto->modelo;
?>

<h1>Especificaciones modelo: <?=$modelo ?></h1>
<h5><?php echo CHtml::link('Volver a los productos',array('productos/index')); ?></h5>

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
		'conexion_pequenya',
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
