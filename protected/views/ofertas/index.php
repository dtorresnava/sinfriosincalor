<?php
$this->breadcrumbs=array(
	'Ofertases',
);

$this->menu=array(
array('label'=>'Create Ofertas','url'=>array('create')),
array('label'=>'Manage Ofertas','url'=>array('admin')),
);
?>

<h1>Ofertases</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
