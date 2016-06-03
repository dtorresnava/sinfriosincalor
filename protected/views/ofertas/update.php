<?php
$this->breadcrumbs=array(
	'Ofertases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'Ver ofertas','url'=>array('index')),
	array('label'=>'Añadir ofertas','url'=>array('create')),
	array('label'=>'Ver oferta','url'=>array('view','id'=>$model->id)),
	array('label'=>'Administrar ofertas','url'=>array('admin')),
	);
	?>

	<h1>Actualizar oferta nº: <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>