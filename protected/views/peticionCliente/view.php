<?php
$this->breadcrumbs = array (
		'Peticion Clientes' => array (
				'index' 
		),
		$model->id 
);

$this->menu = array (
		array (
				'label' => 'List PeticionCliente',
				'url' => array (
						'index' 
				) 
		),
		array (
				'label' => 'Create PeticionCliente',
				'url' => array (
						'create' 
				) 
		),
		array (
				'label' => 'Update PeticionCliente',
				'url' => array (
						'update',
						'id' => $model->id 
				) 
		),
		array (
				'label' => 'Delete PeticionCliente',
				'url' => '#',
				'linkOptions' => array (
						'submit' => array (
								'delete',
								'id' => $model->id 
						),
						'confirm' => 'Are you sure you want to delete this item?' 
				) 
		),
		array (
				'label' => 'Manage PeticionCliente',
				'url' => array (
						'admin' 
				) 
		) 
);
?>

<h1>View PeticionCliente #<?php echo $model->id; ?></h1>

<?php

$this->widget ( 'booster.widgets.TbDetailView', array (
		'data' => $model,
		'attributes' => array (
				'id',
				'cliente_id',
				'numero_pedido',
				'largo_habitacion',
				'ancho_habitacion',
				'alto_habitacion',
				'orientacion',
				'matirial_ventana_id',
				'alto_ventana',
				'ancho_ventana',
				'fecha_pedido',
				'imagen_id' 
		) 
) );
?>

<?php if(Yii::app()->user->name == "admin") {?>
<div class="col-md-3">
	<h3><?php echo CHtml::link(utf8_encode('Generar presupuesto'),array('presupuestoPeticion/create&cliente='.$model->cliente_id.'&peticion_id='.$model->id)); ?></h3>
</div>

<div class="col-md-4">
	<h3><?php echo CHtml::link(utf8_encode('Generar presupuesto automático'),array('presupuestoPeticion/createAuto&cliente='.$model->cliente_id.'&peticion_id='.$model->id)); ?></h3>
</div>
<?php }?>
