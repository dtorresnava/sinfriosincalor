<?php
$this->breadcrumbs=array(
	'Fabricantes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'Ver fabricantes','url'=>array('index')),
	array('label'=>'Añadir fabricante','url'=>array('create')),
	array('label'=>'Ver fabricante','url'=>array('view','id'=>$model->id)),
	array('label'=>'Administrar fabricantes','url'=>array('admin')),
	);
	?>

	<h1>Actualizar fabricante nº:<?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>