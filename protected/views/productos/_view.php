<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modelo')); ?>:</b>
	<?php echo CHtml::encode($data->modelo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fabricante_id')); ?>:</b>
	<?php echo CHtml::encode($data->fabricante_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo')); ?>:</b>
	<?php echo CHtml::encode($data->codigo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precio')); ?>:</b>
	<?php echo CHtml::encode($data->precio); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('alta_especificaciones')); ?>:</b>
	<?php echo CHtml::encode($data->alta_especificaciones); ?>
	<br />

	*/ ?>
	<?php 
	if($data->alta_especificaciones==0 && Yii::app()->user->name == "admin"){ 
		echo CHtml::link(utf8_encode('Añadir especificaciones'),array('especificaciones/create&idp='.$data->id.'&modelop='.$data->modelo));
	} 
	?>
</div>