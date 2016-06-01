<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<!--<div class="col-md-9">
	<div id="content">
		
	</div> content 
</div>-->
<?php
if (Yii::app ()->user->name === 'admin') {
	?>
	<div class="col-md-9">
		<div id="content" class="centermaindata">
			<?php echo $content; ?>
		</div>
	</div>
	<div class="col-md-3 rigthmenudata" >
		<div id="sidebar">
		<?php
		$this->beginWidget ( 'zii.widgets.CPortlet', array (
				'title' => 'Opciones' 
		) );
		$this->widget ( 'zii.widgets.CMenu', array (
				'items' => $this->menu,
				'htmlOptions' => array (
						'class' => 'operations' 
				) 
		) );
		$this->endWidget ();
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