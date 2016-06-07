<div class="centerviewStyle">
	<?php
	$this->breadcrumbs = array (
			'Fabricantes' => array (
					'index' 
			),
			$model->id 
	);
	
	$this->menu = array (
			array (
					'label' => 'Ver fabricantes',
					'url' => array (
							'index' 
					) 
			),
			array (
					'label' => 'Añadir fabricante',
					'url' => array (
							'create' 
					) 
			),
			array (
					'label' => 'Actualizar fabricante',
					'url' => array (
							'update',
							'id' => $model->id 
					) 
			),
			array (
					'label' => 'Borrar fabricante',
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
					'label' => 'Administrar fabricantes',
					'url' => array (
							'admin' 
					) 
			) 
	);
	?>
	
	<h1>Detalle del fabricante #<?php echo $model->id; ?></h1>
	
	<?php
	
	$this->widget ( 'booster.widgets.TbDetailView', array (
			'data' => $model,
			'attributes' => array (
					'id',
					'nombre',
					'web',
					'descripcion',
					'calle',
					'poblacion',
					'provincia',
					'cp',
					'email',
					'telefono' 
			) 
	) );
	?>
</div>