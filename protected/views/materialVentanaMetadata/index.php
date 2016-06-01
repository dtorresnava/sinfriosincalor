<?php
$this->breadcrumbs=array(
	'Material Ventana Metadatas',
);

$this->menu=array(
array('label'=>'Create MaterialVentanaMetadata','url'=>array('create')),
array('label'=>'Manage MaterialVentanaMetadata','url'=>array('admin')),
);
?>

<h1>Material Ventana Metadatas</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
