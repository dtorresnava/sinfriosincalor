<?php
$this->breadcrumbs=array(
	'Especificaciones',
);

$this->menu=array(
array('label'=>'Create Especificaciones','url'=>array('create')),
array('label'=>'Manage Especificaciones','url'=>array('admin')),
);
?>

<h1>Especificaciones</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
