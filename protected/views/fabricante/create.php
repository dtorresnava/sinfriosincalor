<?php
$this->breadcrumbs=array(
	'Fabricantes'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'Ver fabricantes','url'=>array('index')),
array('label'=>'Administrar fabricantes','url'=>array('admin')),
);
?>

<h1>Aladir fabricante</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>