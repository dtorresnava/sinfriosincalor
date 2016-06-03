<?php
$this->breadcrumbs=array(
	'Servicioses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'Ver servicios','url'=>array('index')),
	array('label'=>'Añadir servicio','url'=>array('create')),
	array('label'=>'Detalle servicio','url'=>array('view','id'=>$model->id)),
	array('label'=>'Administrar servicio','url'=>array('admin')),
	);
	?>

	<h1>Actualizar servicio <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>