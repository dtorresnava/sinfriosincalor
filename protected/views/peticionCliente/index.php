<?php
$this->breadcrumbs = array (
		'Peticion Clientes' 
);

$this->menu = array (	
		array (
				'label' => 'Manage PeticionCliente',
				'url' => array (
						'admin' 
				) 
		) 
);
?>

<h1>Peticion Clientes</h1>

<?php

$this->widget ( 'booster.widgets.TbListView', array (
		'dataProvider' => $dataProvider,
		'itemView' => '_view' 
) );
?>
