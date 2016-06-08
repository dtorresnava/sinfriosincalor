<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'ofertas-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">
	Campos con el <span class="required">*</span> son obligatorios.
</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'nombre',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>30)))); ?>

	<?php echo $form->textFieldGroup($model,'descuento_producto',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'descuento_servicio',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textAreaGroup(
			$model,
			'descripcion',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
				'widgetOptions' => array(
					'htmlOptions' => array('rows' => 5),
				)
			)
		); ?>

	<?php echo $form->datePickerGroup($model,'fecha_ini',array('widgetOptions'=>array('options'=>array(),'htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->datePickerGroup($model,'fecha_fin',array('widgetOptions'=>array('options'=>array(),'htmlOptions'=>array('class'=>'span5')))); ?>

<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Añadir' : 'Modificar',
		)); ?>
</div>

<?php $this->endWidget(); ?>
