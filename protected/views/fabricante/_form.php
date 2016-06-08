<div class="">
	<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
		'id'=>'fabricante-form',
		'enableAjaxValidation'=>false,
	)); ?>
	
	<p class="help-block">
		Campos con el <span class="required">*</span> son obligatorios.
	</p>
	
	<?php echo $form->errorSummary($model); ?>
	
		<?php echo $form->textFieldGroup($model,'nombre',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>50)))); ?>
	
		<?php echo $form->textFieldGroup($model,'web',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>50)))); ?>
	
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
	
		<?php echo $form->textFieldGroup($model,'calle',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>100)))); ?>
	
		<?php echo $form->textFieldGroup($model,'poblacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>80)))); ?>
	
		<?php echo $form->textFieldGroup($model,'provincia',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>80)))); ?>
	
		<?php echo $form->textFieldGroup($model,'cp',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
	
		<?php echo $form->textFieldGroup($model,'email',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>100)))); ?>
	
		<?php echo $form->textFieldGroup($model,'telefono',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
	
	<div class="form-actions">
		<?php $this->widget('booster.widgets.TbButton', array(
				'buttonType'=>'submit',
				'context'=>'primary',
				'label'=>$model->isNewRecord ? 'Añadir' : 'Modificar',
			)); ?>
	</div>
	
	<?php $this->endWidget(); ?>
</div>