<?php
$this->breadcrumbs = array (
		'Peticion Clientes' => array (
				'index' 
		),
		$model->id 
);

$this->menu = array (
		array (
				'label' => 'Ver peticiones',
				'url' => array (
						'index' 
				) 
		),
		array (
				'label' => 'Administrar peticiones',
				'url' => array (
						'admin' 
				) 
		) 
);
?>



<h1>View PeticionCliente #<?=$model->id; ?></h1>

<?php

$this->widget ( 'booster.widgets.TbDetailView', array (
		'data' => $model,
		'attributes' => array (
				'id',
				'servicio_extra_id',
				'largo_habitacion',
				'ancho_habitacion',
				'alto_habitacion',
				'orientacion',
				'matirial_ventana_id',
				'alto_ventana',
				'ancho_ventana',
				'fecha_pedido',
		) 
) );
?>

<?php if(Yii::app()->user->name == "admin") {?>
<div class="col-md-3">
	<h3><?php echo CHtml::link(utf8_encode('Generar presupuesto'),array('presupuestoPeticion/create&cliente='.$model->cliente_id.'&peticion_id='.$model->id)); ?></h3>
</div>

<div class="col-md-4">
	<h3><?php echo CHtml::link('Generar presupuesto automático',array('presupuestoPeticion/createAuto&cliente='.$model->cliente_id.'&peticion_id='.$model->id)); ?></h3>
</div>
<?php }?>
