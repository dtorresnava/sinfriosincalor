<?php
$this->breadcrumbs = array (
		'Ofertases' => array (
				'index' 
		),
		$model->id 
);

$this->menu = array (
		array (
				'label' => 'List Ofertas',
				'url' => array (
						'index' 
				) 
		),
		array (
				'label' => 'Create Ofertas',
				'url' => array (
						'create' 
				) 
		),
		array (
				'label' => 'Update Ofertas',
				'url' => array (
						'update',
						'id' => $model->id 
				) 
		),
		array (
				'label' => 'Delete Ofertas',
				'url' => '#',
				'linkOptions' => array (
						'submit' => array (
								'delete',
								'id' => $model->id 
						),
						'confirm' => 'Are you sure you want to delete this item?' 
				) 
		),
		array (
				'label' => 'Manage Ofertas',
				'url' => array (
						'admin' 
				) 
		) 
);
?>

<h1>View Ofertas #<?php echo $model->id; ?></h1>

<?php

$this->widget ( 'booster.widgets.TbDetailView', array (
		'data' => $model,
		'attributes' => array (
				'id',
				'nombre',
				'descripcion',
				'fecha_ini',
				'fecha_fin' 
		) 
) );
?>
