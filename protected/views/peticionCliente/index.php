<?php
$this->breadcrumbs = array (
		'Peticion Clientes' 
);

$this->menu = array (	
		array (
				'label' => 'Administrar peticiones de los clientes',
				'url' => array (
						'admin' 
				) 
		) 
);
?>
<div class="view">
<h1>Peticiones de los clientes</h1>

<?php

$this->widget ( 'booster.widgets.TbListView', array (
		'dataProvider' => $dataProvider,
		'itemView' => '_view' 
) );
?>
</div>