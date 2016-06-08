<?php
$this->breadcrumbs = array (
		'Material Ventana Metadatas' 
);

$this->menu = array (
		array (
				'label' => 'Añadir materiales',
				'url' => array (
						'create' 
				) 
		),
		array (
				'label' => 'Administrar materiales',
				'url' => array (
						'admin' 
				) 
		) 
);
?>

<div class="view">
	<h1>Material Ventana Metadatas</h1>

	<?php
	
	$this->widget ( 'booster.widgets.TbListView', array (
			'dataProvider' => $dataProvider,
			'itemView' => '_view' 
	) );
	?>
</div>