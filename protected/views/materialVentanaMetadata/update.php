
<div class="formulariosStyle">
<?php
$this->breadcrumbs=array(
	'Material Ventana Metadatas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'Ver materiales','url'=>array('index')),
	array('label'=>'Añadir material','url'=>array('create')),
	array('label'=>'Ver material','url'=>array('view','id'=>$model->id)),
	array('label'=>'Administrar materiales','url'=>array('admin')),
	);
	?>

	<h1>Actualizar material <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
</div>