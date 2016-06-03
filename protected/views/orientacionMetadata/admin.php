<?php
$this->breadcrumbs = array (
		'Orientacion Metadatas' => array (
				'index' 
		),
		'Manage' 
);

$this->menu = array (
		array (
				'label' => 'List OrientacionMetadata',
				'url' => array (
						'index' 
				) 
		),
		array (
				'label' => 'Create OrientacionMetadata',
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
$.fn.yiiGridView.update('orientacion-metadata-grid', {
data: $(this).serialize()
});
return false;
});
" );
?>

	<h1>Administrar </h1>

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

$this->widget ( 'booster.widgets.TbGridView', array (
		'id' => 'orientacion-metadata-grid',
		'dataProvider' => $model->search (),
		'filter' => $model,
		'columns' => array (
				'id',
				'descripcion',
				array (
						'class' => 'booster.widgets.TbButtonColumn' 
				) 
		) 
) );
?>
