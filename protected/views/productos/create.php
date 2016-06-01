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

<h1>Create Productos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>