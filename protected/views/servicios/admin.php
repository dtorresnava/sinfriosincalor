<?php
$this->breadcrumbs = array (
		'Servicioses' => array (
				'index' 
		),
		'Manage' 
);

$this->menu = array (
		array (
				'label' => 'Ver servicios',
				'url' => array (
						'index' 
				) 
		),
		array (
				'label' => 'Añadir servicio',
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
$.fn.yiiGridView.update('servicios-grid', {
data: $(this).serialize()
});
return false;
});
" );
?>
<div class="paneladmin">
	<h1>Administrar servicios</h1>

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
			'id' => 'servicios-grid',
			'fixedHeader' => true,
			'type' => 'striped bordered',
			'headerOffset' => 40,
			'dataProvider' => $model->search (),
			'filter' => $model,
			'columns' => array (
					'id',
					'nombre',
					'descripcion',
					'precio_hora',
					array (
							'class' => 'booster.widgets.TbButtonColumn' 
					) 
			) 
	) );
	?>
</div>