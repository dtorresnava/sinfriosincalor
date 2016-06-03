<?php
$this->breadcrumbs = array (
		'Peticion Clientes' => array (
				'index' 
		),
		'Manage' 
);

$this->menu = array (
		array (
				'label' => 'Ver peticiones de los clientes',
				'url' => array (
						'index' 
				) 
		),
		
);

Yii::app ()->clientScript->registerScript ( 'search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('peticion-cliente-grid', {
data: $(this).serialize()
});
return false;
});
" );
?>

<div class="paneladmin" >
	<h1>Administrar peticiones de los clientes</h1>
	
	<p>
		Puedes añadir de forma opcional los siguientes comparadores (<b>&lt;</b>, <b>&lt;=</b>,
		<b>&gt;</b>, <b>&gt;=</b>, <b> &lt;&gt;</b> or <b>=</b>) al principio de la busqueda de cada campo.
	</p>
	
	<?php echo CHtml::link('Búsqueda avanzada','#',array('class'=>'search-button btn')); ?>
	<div class="search-form" style="display: none">
		<?php
		
	$this->renderPartial ( '_search', array (
				'model' => $model 
		) );
		?>
	</div>
	<!-- search-form -->
	
	<?php
	
	$this->widget ( 'booster.widgets.TbExtendedGridView', array (
			'id' => 'peticion-cliente-grid',
			'fixedHeader' => true,
			'type' => 'striped bordered',
			'headerOffset' => 40,
			'dataProvider' => $model->search (),
			'filter' => $model,
			'columns' => array (
					'id',
					'largo_habitacion',
					'ancho_habitacion',
					'alto_habitacion',
					'orientacion',
					'servicio_extra_id',
					'matirial_ventana_id',
					'alto_ventana',
					'ancho_ventana',
					'fecha_pedido',
		
					array (
						'class' => 'booster.widgets.TbButtonColumn' 
					) 
			) 
	) );
	?>

</div>

