<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cliente_id')); ?>:</b>
	<?php echo CHtml::encode($data->cliente_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero_pedido')); ?>:</b>
	<?php echo CHtml::encode($data->numero_pedido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('largo_habitacion')); ?>:</b>
	<?php echo CHtml::encode($data->largo_habitacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ancho_habitacion')); ?>:</b>
	<?php echo CHtml::encode($data->ancho_habitacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alto_habitacion')); ?>:</b>
	<?php echo CHtml::encode($data->alto_habitacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('orientacion')); ?>:</b>
	<?php echo CHtml::encode($data->orientacion); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('matirial_ventana_id')); ?>:</b>
	<?php echo CHtml::encode($data->matirial_ventana_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alto_ventana')); ?>:</b>
	<?php echo CHtml::encode($data->alto_ventana); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ancho_ventana')); ?>:</b>
	<?php echo CHtml::encode($data->ancho_ventana); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_pedido')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_pedido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imagen_id')); ?>:</b>
	<?php echo CHtml::encode($data->imagen_id); ?>
	<br />

	*/ ?>
	<hr>
</div>