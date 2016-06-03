<?php
$this->breadcrumbs=array(
	'Presupuesto Peticions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List PresupuestoPeticion','url'=>array('index')),
	array('label'=>'Create PresupuestoPeticion','url'=>array('create')),
	array('label'=>'View PresupuestoPeticion','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage PresupuestoPeticion','url'=>array('admin')),
	);
	?>

	<h1>Update PresupuestoPeticion <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model, 'peticion_id'=>$peticion_id)); ?>