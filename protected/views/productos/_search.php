
<div class="formsearch">
	<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
		'action'=>Yii::app()->createUrl($this->route),
		'method'=>'get',
	)); ?>
	
			<?php echo $form->textFieldGroup($model,'id',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
	
			<?php echo $form->textFieldGroup($model,'modelo',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>20)))); ?>
	
			<?php echo $form->textFieldGroup($model,'fabricante_id',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
	
			<?php echo $form->textFieldGroup($model,'codigo',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
	
			<?php echo $form->textFieldGroup($model,'tipo',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>20)))); ?>
	
			<?php echo $form->textFieldGroup($model,'precio',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
	
		<div class="form-actions">
			<?php $this->widget('booster.widgets.TbButton', array(
				'buttonType' => 'submit',
				'context'=>'primary',
				'label'=>'Search',
			)); ?>
		</div>
	
	<?php $this->endWidget(); ?>
</div>