<?php
$this->breadcrumbs = array (
		'Servicioses' 
);

$this->menu = array (
		array (
				'label' => 'Añadir servicio',
				'url' => array (
						'create' 
				) 
		),
		array (
				'label' => 'Administrar servicios',
				'url' => array (
						'admin' 
				) 
		) 
);
?>
<div class="view">
	<h1>Servicios ofrecidos</h1>

	<?php
	
	$this->widget ( 'booster.widgets.TbListView', array (
			'dataProvider' => $dataProvider,
			'itemView' => '_view' 
	) );
	?>
</div>