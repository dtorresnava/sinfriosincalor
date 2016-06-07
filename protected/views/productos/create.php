<?php

$this->menu = array (
		array (
				'label' => 'Mostrar productos',
				'url' => array (
						'index' 
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
<div class="formulariosStyle">
<h1>Create Productos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>