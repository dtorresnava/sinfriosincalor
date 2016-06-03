<?php
$this->breadcrumbs = array (
		'Productoses' 
);

$this->menu = array (
		array (
				'label' => 'Añadir productos',
				'url' => array (
						'create' 
				) 
		),
		array (
				'label' => 'Administrar Productos',
				'url' => array (
						'admin' 
				) 
		) 
);
?>

<h2>Nuestros productos</h2>

<?php

$this->widget ( 'booster.widgets.TbListView', array (
		'dataProvider' => $dataProvider,
		'itemView' => '_view' 
) );
?>
