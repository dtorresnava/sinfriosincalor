<?php
$this->breadcrumbs=array(
	'Material Ventana Metadatas'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List MaterialVentanaMetadata','url'=>array('index')),
array('label'=>'Manage MaterialVentanaMetadata','url'=>array('admin')),
);
?>
<div class="formulariosStyle">
<h1>Añadir materiales de fabricación</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>