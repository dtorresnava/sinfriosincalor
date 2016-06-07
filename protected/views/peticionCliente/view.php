<div class="centerviewStyle">
	<?php
	$this->breadcrumbs = array (
			'Peticion Clientes' => array (
					'index' 
			),
			$model->id 
	);
	
	$this->menu = array (
			array (
					'label' => 'Administrar peticiones',
					'url' => array (
							'admin' 
					) 
			) 
	);
	?>
	
	<?php 
		$usuarioPeticion = new PeticionCliente();
		$usuarioPeticion = Usuarios::model()->findByPk($model->cliente_id);
	?>
	
	<h4><b><?php echo CHtml::encode($model->getAttributeLabel('cliente_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($usuarioPeticion->nombre),array('usuarios/view','id'=>$usuarioPeticion->id)); ?></h4>
	<br />
	
	<h1>Detalle petición número:<?=$model->id?></h1>
	<h3>fecha de la petición <?=$model->fecha_pedido?></h3>
	
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
			) 
	) );
	?>

<?php if(Yii::app()->user->name == "admin") {?>
<div class="col-md-6">
	<h3><?php echo CHtml::link(utf8_encode('Generar presupuesto'),array('presupuestoPeticion/create&cliente='.$model->cliente_id.'&peticion_id='.$model->id)); ?></h3>
</div>

<div class="col-md-6">
	<h3><?php echo CHtml::link('Generar presupuesto automático',array('presupuestoPeticion/createAuto&cliente='.$model->cliente_id.'&peticion_id='.$model->id)); ?></h3>
</div>
<?php }?>
</div>