<?php
$this->breadcrumbs=array(
	'Ofertases'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'Ver ofertas','url'=>array('index')),
array('label'=>'Añadir oferta','url'=>array('create')),
array('label'=>'Actualizar oferta','url'=>array('update','id'=>$model->id)),
array('label'=>'Borrar oferta','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Administrar ofertas','url'=>array('admin')),
);
?>

<h1>Ver ofertas #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'nombre',
		'descuento_producto',
		'descuento_servicio',
		'descripcion',
		'fecha_ini',
		'fecha_fin',
),
)); ?>
