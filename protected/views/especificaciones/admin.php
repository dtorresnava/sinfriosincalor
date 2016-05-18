<?php
$this->breadcrumbs = array (
		'Especificaciones' => array (
				'index' 
		),
		'Manage' 
);

$this->menu = array (
		array (
				'label' => 'List Especificaciones',
				'url' => array (
						'index' 
				) 
		),
		array (
				'label' => 'Create Especificaciones',
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
$.fn.yiiGridView.update('especificaciones-grid', {
data: $(this).serialize()
});
return false;
});
" );
?>

<h1>Manage Especificaciones</h1>

<p>
	You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>,
	<b>&gt;</b>, <b>&gt;=</b>, <b> &lt;&gt;</b> or <b>=</b>) at the
	beginning of each of your search values to specify how the comparison
	should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display: none">
	<?php
	
$this->renderPartial ( '_search', array (
			'model' => $model 
	) );
	?>
</div>
<!-- search-form -->

<?php

$this->widget ( 'booster.widgets.TbGridView', array (
		'id' => 'especificaciones-grid',
		'dataProvider' => $model->search (),
		'filter' => $model,
		'columns' => array (
				'id',
				'producto_id',
				'potencia_frio',
				'potencia_calor',
				'eficiencia_frio',
				'eficiencia_calor',
		/*
		'consumo_frio',
		'consumo_calor',
		'dimencion_alto_ue',
		'dimencion_ancho_ue',
		'dimencion_largo_ue',
		'peso_ue',
		'conexion_pequeña',
		'conexion_grande',
		'tipo_caudal',
		'posicion_tubos_conextion',
		'peso_ui',
		'dimencion_alto_ui',
		'dimencion_ancho_ui',
		'dimencion_largo_ui',
		'cantidad_unidades',
		*/
array (
						'class' => 'booster.widgets.TbButtonColumn' 
				) 
		) 
) );
?>
