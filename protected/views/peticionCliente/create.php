<?php
$this->breadcrumbs=array(
	'Peticion Clientes'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List PeticionCliente','url'=>array('index')),
array('label'=>'Manage PeticionCliente','url'=>array('admin')),
);
?>

<h1>Create PeticionCliente</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'id'=>$id)); ?>