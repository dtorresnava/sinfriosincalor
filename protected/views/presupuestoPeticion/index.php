<?php
$this->breadcrumbs=array(
	'Presupuesto Peticions',
);

$this->menu=array(
array('label'=>'Create PresupuestoPeticion','url'=>array('create')),
array('label'=>'Manage PresupuestoPeticion','url'=>array('admin')),
);
?>

<h1>Presupuesto Peticions</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>