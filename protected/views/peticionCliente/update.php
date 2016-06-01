<?php
$this->breadcrumbs=array(
	'Peticion Clientes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List PeticionCliente','url'=>array('index')),
	array('label'=>'Create PeticionCliente','url'=>array('create')),
	array('label'=>'View PeticionCliente','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage PeticionCliente','url'=>array('admin')),
	);
	?>

	<h1>Update PeticionCliente <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>