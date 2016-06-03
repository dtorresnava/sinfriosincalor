<?php
$this->breadcrumbs = array (
		'Productoses' => array (
				'index' 
		),
		$model->id 
);

$this->menu = array (
		array (
				'label' => 'Ver productos',
				'url' => array (
						'index' 
				) 
		),
		array (
				'label' => 'Añadir producto',
				'url' => array (
						'create' 
				) 
		),
		array (
				'label' => 'Actualizar Producto',
				'url' => array (
						'update',
						'id' => $model->id 
				) 
		),
		array (
				'label' => 'Borrar producto',
				'url' => '#',
				'linkOptions' => array (
						'submit' => array (
								'delete',
								'id' => $model->id 
						),
						'confirm' => 'Estás seguro que quieres eliminar el producto?' 
				) 
		),
		array (
				'label' => 'Administrar productos',
				'url' => array (
						'admin' 
				) 
		) 
);
?>

<h1>Detalle del producto #<?php echo $model->id; ?></h1>

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
