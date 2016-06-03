<?php
$this->breadcrumbs = array (
		'Productoses' => array (
				'index' 
		),
		'Manage' 
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
		)
);

Yii::app ()->clientScript->registerScript ( 'search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('productos-grid', {
data: $(this).serialize()
});
return false;
});
" );
?>
<div class="paneladmin" >
	<h1>Administrar productos</h1>
	
	<p>
		Puedes añadir de forma opcional los siguientes comparadores (<b>&lt;</b>, <b>&lt;=</b>,
		<b>&gt;</b>, <b>&gt;=</b>, <b> &lt;&gt;</b> or <b>=</b>) al principio de la busqueda de cada campo.
	</p>
	
	<?php echo CHtml::link('Búqueda avanzada','#',array('class'=>'search-button btn')); ?>
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
			'id' => 'productos-grid',
			'fixedHeader' => true,
			'type' => 'striped bordered',
			'headerOffset' => 40,
			'dataProvider' => $model->search (),
			'filter' => $model,
			'columns' => array (
					'id',
					'modelo',
					'fabricante_id',
					'codigo',
					'descripcion',
					'tipo',
			/*
			'precio',
			'alta_especificaciones',
			*/
					array (
						'class' => 'booster.widgets.TbButtonColumn' 
						) 
					) 
				) 
			);
	?>
</div>