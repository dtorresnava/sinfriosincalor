<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<!--<div class="col-md-9">
	<div id="content">
		
	</div> content 
</div>-->
<?php
if (Yii::app ()->user->name === 'admin') {
	?>
	<div>
		<div id="content" class="centermaindata">
			<?php echo $content; ?>
		</div>
	</div>
	<div class="rigthmenudata" >
		<div id="sidebar">
		<h4>Opciones</h4>
		<?php
		
		
// 		$this->widget ( 'zii.widgets.CMenu', array (
// 				'items' => $this->menu,
// 				'htmlOptions' => array (
// 						'class' => 'operations' 
// 				) 
// 		) );

		
		$this->widget('booster.widgets.TbMenu', array(
				'type' => 'navbar', // <-- also try 'pills' here for different styling or 'list' for vertical menu
				'items' => $this->menu,
				)
		);
		?>
		</div>
		<!-- sidebar -->
	</div>
<?php
} else {
?>
	<div class="col-md-2">
	</div>
	
	<div class="col-md-10 centermaindatauser">
		<div id="content">
			<?php echo $content; ?>
		</div>
	</div>
<?php
}
$this->endContent ();
?>