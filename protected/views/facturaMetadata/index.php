<?php
$this->breadcrumbs=array(
	'Factura Metadatas',
);

$this->menu=array(
array('label'=>'Create FacturaMetadata','url'=>array('create')),
array('label'=>'Manage FacturaMetadata','url'=>array('admin')),
);
?>

<h1>Factura Metadatas</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
