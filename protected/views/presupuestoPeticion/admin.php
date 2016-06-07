<?php
$this->breadcrumbs = array (
		'Presupuesto Peticions' => array (
				'index' 
		),
		'Manage' 
);

Yii::app ()->clientScript->registerScript ( 'search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('presupuesto-peticion-grid', {
data: $(this).serialize()
});
return false;
});
" );
?>
<div class="paneladmin" >
	<h1>Administrar presupuestos generados</h1>
	
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
			'id' => 'presupuesto-peticion-grid',
			'fixedHeader' => true,
			'type' => 'striped bordered',
			'headerOffset' => 40,
			'dataProvider' => $model->search (),
			'filter' => $model,
			'columns' => array (
					'id',
					'peticion_cliente_id',
					'producto_id',
					'servicio_id',
					'presupuesto_producto',
					'presupuesto_servicio',
					'total',
					/*
					'fecha_presupuesto',
					'fecha_alta_presupuesto',
					'validar',
					*/
					array (
						'class' => 'booster.widgets.TbButtonColumn',
						'template'=>'{view}'
					) 
			) 
	) );
	?>
</div>