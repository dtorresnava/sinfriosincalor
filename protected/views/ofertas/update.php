<?php
$this->breadcrumbs=array(
	'Ofertases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Ofertas','url'=>array('index')),
	array('label'=>'Create Ofertas','url'=>array('create')),
	array('label'=>'View Ofertas','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Ofertas','url'=>array('admin')),
	);
	?>

	<h1>Update Ofertas <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>