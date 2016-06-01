<?php
$this->breadcrumbs=array(
	'Orientacion Metadatas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List OrientacionMetadata','url'=>array('index')),
	array('label'=>'Create OrientacionMetadata','url'=>array('create')),
	array('label'=>'View OrientacionMetadata','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage OrientacionMetadata','url'=>array('admin')),
	);
	?>

	<h1>Update OrientacionMetadata <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>