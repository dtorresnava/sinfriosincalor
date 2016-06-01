<?php
$this->breadcrumbs=array(
	'Orientacion Metadatas',
);

$this->menu=array(
array('label'=>'Create OrientacionMetadata','url'=>array('create')),
array('label'=>'Manage OrientacionMetadata','url'=>array('admin')),
);
?>

<h1>Orientacion Metadatas</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
