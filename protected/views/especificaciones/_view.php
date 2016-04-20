<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('producto_id')); ?>:</b>
	<?php echo CHtml::encode($data->producto_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('potencia_frio')); ?>:</b>
	<?php echo CHtml::encode($data->potencia_frio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('potencia_calor')); ?>:</b>
	<?php echo CHtml::encode($data->potencia_calor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eficiencia_frio')); ?>:</b>
	<?php echo CHtml::encode($data->eficiencia_frio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eficiencia_calor')); ?>:</b>
	<?php echo CHtml::encode($data->eficiencia_calor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('consumo_frio')); ?>:</b>
	<?php echo CHtml::encode($data->consumo_frio); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('consumo_calor')); ?>:</b>
	<?php echo CHtml::encode($data->consumo_calor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dimencion_alto')); ?>:</b>
	<?php echo CHtml::encode($data->dimencion_alto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dimencion_ancho')); ?>:</b>
	<?php echo CHtml::encode($data->dimencion_ancho); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dimencion_largo')); ?>:</b>
	<?php echo CHtml::encode($data->dimencion_largo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('peso')); ?>:</b>
	<?php echo CHtml::encode($data->peso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conexion_pequeña')); ?>:</b>
	<?php echo CHtml::encode($data->conexion_pequeña); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conexion_grande')); ?>:</b>
	<?php echo CHtml::encode($data->conexion_grande); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_caudal')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_caudal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('posicion_tubos_conextion')); ?>:</b>
	<?php echo CHtml::encode($data->posicion_tubos_conextion); ?>
	<br />

	*/ ?>

</div>