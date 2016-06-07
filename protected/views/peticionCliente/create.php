<?php
$this->breadcrumbs=array(
	'Peticion Clientes'=>array('index'),
	'Create',
);

?>
<div class="formulariosStyle">	
<h1 class="">Create PeticionCliente</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'modelFoto'=>$modelFoto, 'id'=>$id)); ?>
</div>