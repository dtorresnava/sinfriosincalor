<?php
$this->breadcrumbs=array(
	'Peticion Clientes'=>array('index'),
	'Create',
);

?>

<h1 class="posstitle">Create PeticionCliente</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'modelFoto'=>$modelFoto, 'id'=>$id)); ?>