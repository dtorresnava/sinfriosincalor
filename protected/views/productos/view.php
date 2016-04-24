<?php
$this->breadcrumbs = array (
		'Productoses' => array (
				'index' 
		),
		$model->id 
);

$this->menu = array (
		array (
				'label' => 'List Productos',
				'url' => array (
						'index' 
				) 
		),
		array (
				'label' => 'Create Productos',
				'url' => array (
						'create' 
				) 
		),
		array (
				'label' => 'Update Productos',
				'url' => array (
						'update',
						'id' => $model->id 
				) 
		),
		array (
				'label' => 'Delete Productos',
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
				'label' => 'Manage Productos',
				'url' => array (
						'admin' 
				) 
		) 
);
?>

<h1>View Productos #<?php echo $model->id; ?></h1>

<?php

$this->widget ( 'booster.widgets.TbDetailView', array (
		'data' => $model,
		'attributes' => array (
				'id',
				'modelo',
				'fabricante_id',
				'codigo',
				'descripcion',
				'tipo',
				'precio',
				'alta_especificaciones' 
		) 
) );
?>
