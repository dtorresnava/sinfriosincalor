<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="language" content="es" />
	<?php
	// CIERRA SESION a los 15 minutos
	echo '<meta http-equiv="REFRESH" content="900;url=' . Yii::app ()->createAbsoluteUrl ( '/site/logout', array (
			'tout' => 1 
	) ) . '"></HEAD>';
	?>
	<link rel="stylesheet" type="text/css" href="/sinfriosincalor1/estilocabecera.css">
</head>

<body>

	<?php
	// MENU
	require ('_menu.php');
	
	$this->widget ( 'booster.widgets.TbNavbar', array (
			'type' => 'inverse',
			'brand' => 'SIN FRIO SIN CALOR',
			'collapse' => false,
			'fixed' => true,
			'htmlOptions' => array (
					'style' => 'margin-bottom:1px; text-align: left;' 
			),
			'items' => array (
					array (
							'class' => 'booster.widgets.TbMenu',
							'type' => 'navbar',
							'items' => $items 
					),
					array (
							'class' => 'booster.widgets.TbMenu',
							'type' => 'navbar',
							'items' => array (
									array (
											'label' => 'Salir (' . Yii::app ()->user->name . ')',
											'icon' => 'off',
											'url' => array (
													'/site/logout' 
											),
											'visible' => ! Yii::app ()->user->isGuest 
									) 
							) 
					) 
			) 
	) );
	
	?>

		 
	<?php
	
	// if(isset($this->breadcrumbs))
	// echo TbHtml::breadcrumbs($this->breadcrumbs);
	
	$flashMessages = Yii::app ()->user->getFlashes ();
	if ($flashMessages) {
		echo '<ul class="info">';
		$static = 0;
		foreach ( $flashMessages as $key => $message ) {
			if ($k = strpos ( $key, 'static' ) !== false)
				$static = 1;
			if ($key == 'static')
				$key = 'success';
			echo '<div class="flash-' . $key . '">' . $message . "</div></li>\n";
		}
		echo '</ul>';
		if (! $static)
			Yii::app ()->clientScript->registerScript ( 'myHideEffect', '$(".info").animate({opacity: 1.0}, 2000).fadeOut("slow");', CClientScript::POS_READY );
	}
	
	echo $content;
	
	?>
	<script>$(".buttonlink").addClass("btn").addClass("btn-primary").removeClass("buttonlink");</script>



	<!-- page -->
	<br>
	<hr class="container"></hr>
	<div id="footer" class="container text-center">
		<a href="index.php?theme=classic" style='font-size: 0.7em;'>Cambiar a
			vista Escritorio</a>
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br /> All
		Rights Reserved.<br />
		<?php echo Yii::powered(); ?>
	</div>
	<!-- footer -->
</body>
</html>