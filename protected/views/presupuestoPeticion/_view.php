<div class="">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('peticion_cliente_id')); ?>:</b>
	<?php echo CHtml::encode($data->peticion_cliente_id); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('producto_id')); ?>:</b>
	<?php echo CHtml::encode($data->producto_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('servicio_id')); ?>:</b>
	<?php echo CHtml::encode($data->servicio_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('presupuesto_producto')); ?>:</b>
	<?php echo CHtml::encode($data->presupuesto_producto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('presupuesto_servicio')); ?>:</b>
	<?php echo CHtml::encode($data->presupuesto_servicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_presupuesto')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_presupuesto); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_alta_presupuesto')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_alta_presupuesto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('validar')); ?>:</b>
	<?php echo CHtml::encode($data->validar); ?>
	<br />

	*/ ?>
	<hr>
</div>