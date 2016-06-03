<?php
$this->breadcrumbs=array(
	'Fabricantes',
);

$this->menu=array(
array('label'=>'Añadir fabricante','url'=>array('create')),
array('label'=>'Administrar fabricantes','url'=>array('admin')),
);
?>

<h1>Fabricantes</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
