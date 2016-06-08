<div class="centerviewStyle">
	<?php
	$this->breadcrumbs=array(
		'Presupuesto Peticions'=>array('index'),
		$model->id,
	);
	
	$this->menu=array(
	array('label'=>'Administrar presupuestos','url'=>array('admin')),
	);
	?>
	
	<h1>View PresupuestoPeticion #<?php echo $model->id; ?></h1>
	<?php 
	$name=Yii::app()->user->name;
	?>
	
	<?php $this->widget('booster.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
			'id',
			'peticion_cliente_id',
			'producto_id',
			'servicio_id',
			'presupuesto_producto',
			'presupuesto_servicio',
			'fecha_presupuesto',
			'fecha_alta_presupuesto',
	),
	)); 
	
	$totalpresupuesto=$model->total;
	
	?>
	
	<h4>Total IVA incluido: <?= $totalpresupuesto?> euros</h4>
	
	<?php if(!Yii::app()->user->isGuest && Yii::app()->user->name != "admin" && $model->validar==0) {?>
	<div class="col-md-3">
		<h3><?php echo CHtml::link(utf8_encode('Validar presupuesto'),array('presupuestoPeticion/validar&presupuesto_id='.$model->id.'&name='.$name)); ?></h3>
	</div>
	<?php }else if($model->validar==1)
			echo "<h2 class='red'>VALIDADO</h2>";
		else
			echo "<h2 class='red'>Sin validar</h2>";
		?>
</div>