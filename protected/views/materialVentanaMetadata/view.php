<div class="centerviewStyle">
	<?php
	$this->breadcrumbs = array (
			'Material Ventana Metadatas' => array (
					'index' 
			),
			$model->id 
	);
	
	$this->menu = array (
			array (
					'label' => 'Ver materiales ',
					'url' => array (
							'index' 
					) 
			),
			array (
					'label' => 'Añadir material',
					'url' => array (
							'create' 
					) 
			),
			array (
					'label' => 'Actualizar material',
					'url' => array (
							'update',
							'id' => $model->id 
					) 
			),
			array (
					'label' => 'Borrar material',
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
					'label' => 'Administrar materiales',
					'url' => array (
							'admin' 
					) 
			) 
	);
	?>

	<h1>View MaterialVentanaMetadata #<?php echo $model->id; ?></h1>

	<?php
	
	$this->widget ( 'booster.widgets.TbDetailView', array (
			'data' => $model,
			'attributes' => array (
					'id',
					'descripcion',
					'observaciones' 
			) 
	) );
	?>
</div>