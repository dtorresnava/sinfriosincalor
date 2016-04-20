<?php
$this->breadcrumbs = array (
		'Usuarioses' 
);

$this->menu = array (
		array (
				'label' => 'Registrar empleados',
				'url' => array (
						'create'
				)
		),
		array (
				'label' => 'Administrar usuarios',
				'url' => array (
						'admin'
				)
		)
);


?>

<h1>Usuarios</h1>

<?php

$this->widget ( 'booster.widgets.TbListView', array (
		'dataProvider' => $dataProvider,
		'itemView' => '_view' 
) );
?>
