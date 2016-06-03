<?php
$this->breadcrumbs=array(
	'Ofertases',
);

$this->menu=array(
array('label'=>'Añadir oferta','url'=>array('create')),
array('label'=>'Administrar ofertas','url'=>array('admin')),
);
?>

<h1>Ofertas</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
