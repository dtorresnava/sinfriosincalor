<?php
$this->breadcrumbs=array(
	'Presupuesto Peticions'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List PresupuestoPeticion','url'=>array('index')),
array('label'=>'Create PresupuestoPeticion','url'=>array('create')),
array('label'=>'Update PresupuestoPeticion','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete PresupuestoPeticion','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage PresupuestoPeticion','url'=>array('admin')),
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
)); ?>

<?php if(!Yii::app()->user->isGuest && Yii::app()->user->name != "admin") {?>
<div class="col-md-3">
	<h3><?php echo CHtml::link(utf8_encode('Validar presupuesto'),array('presupuestoPeticion/validar&presupuesto_id='.$model->id.'&name='.$name)); ?></h3>
</div>
<?php }?>