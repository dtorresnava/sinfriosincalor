<?php
$this->breadcrumbs=array(
	'Especificaciones'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'Ver especificaciones','url'=>array('index')),
	array('label'=>'Añadir especificacion','url'=>array('create')),
	array('label'=>'Ver especificacion','url'=>array('view','id'=>$model->id)),
	array('label'=>'Administrar especificaciones','url'=>array('admin')),
	);
	
	$especificaciones=Especificaciones::model()->findByPk($model->id);
	$producto=Productos::model()->findByPk($especificaciones->producto_id);
	$modelo=$producto->modelo;
	
	?>

	<h1>Actualizar especificacion modelo: <?=$modelo ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model,'idp'=>$producto->id)); ?>