<?php
$this->breadcrumbs=array(
	'Presupuesto Peticions'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List PresupuestoPeticion','url'=>array('index')),
array('label'=>'Manage PresupuestoPeticion','url'=>array('admin')),
);
?>

<h1>Create PresupuestoPeticion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>