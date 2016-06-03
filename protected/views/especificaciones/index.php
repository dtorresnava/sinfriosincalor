<?php
$this->breadcrumbs=array(
	'Especificaciones',
);

$this->menu=array(
array('label'=>'Administrar especificaciones','url'=>array('admin')),
);
?>

<h1>Especificaciones</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
