<?php
$this->breadcrumbs=array(
	'Ofertases'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'Ver ofertas','url'=>array('index')),
array('label'=>'Administrar ofertas','url'=>array('admin')),
);
?>

<h1>Añadir oferta</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>