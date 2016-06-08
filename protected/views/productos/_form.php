<div class="">	
	<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
		'id'=>'productos-form',
		'enableAjaxValidation'=>false,
	)); ?>
	
	<p class="help-block">
		Campos con el <span class="required">*</span> son obligatorios.
	</p>
	
	<?php echo $form->errorSummary($model); ?>
	
		<?php echo $form->textFieldGroup($model,'modelo',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>20)))); ?>
	
		<?php
	        $fabricantes= Fabricante::model()->findAll();
	        $listfabricantes=CHtml::listData($fabricantes,'id','nombre');
	        echo $form->dropDownListGroup($model,'fabricante_id',array(
	                        'wrapperHtmlOptions' => array(
	                                'class' => 'col-sm-5 col-xs-5',
	                        ),
	                        'widgetOptions' => array(
	                                'data' => $listfabricantes,
	                                'htmlOptions' => array(),
	                        )
	                )); 
		?>
	
		<?php echo $form->textFieldGroup($model,'codigo',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
	
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
	
		<?php echo $form->textFieldGroup($model,'tipo',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>20)))); ?>
	
		<?php echo $form->textFieldGroup($model,'precio',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
	
		<?php //echo $form->textFieldGroup($model,'alta_especificaciones',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
	
		<?php echo $form->hiddenField($model,'alta_especificaciones',array('value'=>'0')); ?>
		
	<div class="form-actions">
		<?php $this->widget('booster.widgets.TbButton', array(
				'buttonType'=>'submit',
				'context'=>'primary',
				'label'=>$model->isNewRecord ? 'Añadir' : 'Modificar',
			)); ?>
	</div>
	
	<?php $this->endWidget(); ?>
</div>