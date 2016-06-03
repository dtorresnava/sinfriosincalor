<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'material-ventana-metadata-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">
	Campos con el <span class="required">*</span> son obligatorios.
</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'descripcion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>40)))); ?>

	<?php echo $form->textFieldGroup($model,'observaciones',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>400)))); ?>

<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
