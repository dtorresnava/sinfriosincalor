<?php
$this->breadcrumbs=array(
	'Especificaciones'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Especificaciones','url'=>array('index')),
	array('label'=>'Create Especificaciones','url'=>array('create')),
	array('label'=>'View Especificaciones','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Especificaciones','url'=>array('admin')),
	);
	?>

	<h1>Update Especificaciones <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>