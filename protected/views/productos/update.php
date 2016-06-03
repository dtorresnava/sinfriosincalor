<?php
$this->breadcrumbs=array(
	'Productoses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'Ver productos','url'=>array('index')),
	array('label'=>'Añadir Productos','url'=>array('create')),
	array('label'=>'Ver producto','url'=>array('view','id'=>$model->id)),
	array('label'=>'Administrar Productos','url'=>array('admin')),
	);
	?>

	<h1>Actualizar producto <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>