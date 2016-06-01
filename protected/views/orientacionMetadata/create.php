<?php
$this->breadcrumbs=array(
	'Orientacion Metadatas'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List OrientacionMetadata','url'=>array('index')),
array('label'=>'Manage OrientacionMetadata','url'=>array('admin')),
);
?>

<h1>Create OrientacionMetadata</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>