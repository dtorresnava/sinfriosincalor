<div class="anyadirPeticion">
	<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
		'id'=>'peticion-cliente-form',
		'enableAjaxValidation'=>false,
	)); ?>
	
<p class="help-block">
	Campos con el <span class="required">*</span> son obligatorios.
</p>
	
	<?php echo $form->errorSummary($model); ?>
	
		<?php echo $form->textFieldGroup($model,'cliente_id',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5', 'value'=>$id, 'readonly'=>true))));?>
	
		<?php echo $form->textFieldGroup($model,'numero_pedido',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
	
		<?php echo $form->textFieldGroup($model,'largo_habitacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>20)))); ?>
	
		<?php echo $form->textFieldGroup($model,'ancho_habitacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>20)))); ?>
	
		<?php echo $form->textFieldGroup($model,'alto_habitacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>20)))); ?>
	
		<?php
	        $orientacionhabitad= OrientacionMetadata::model()->findAll();
	        $listaorientacionhabitad=CHtml::listData($orientacionhabitad,'id','descripcion');
	        echo $form->dropDownListGroup($model,'orientacion',array(
	                        'wrapperHtmlOptions' => array(
	                                'class' => 'col-sm-5 col-xs-5',
	                        ),
	                        'widgetOptions' => array(
	                                'data' => $listaorientacionhabitad,
	                                'htmlOptions' => array(),
	                        )
	                )); 
		?>
		
		<?php
	        $material_ventana= MaterialVentanaMetadata::model()->findAll();
	        $listmaterial=CHtml::listData($material_ventana,'id','descripcion');
	        echo $form->dropDownListGroup($model,'matirial_ventana_id',array(
	                        'wrapperHtmlOptions' => array(
	                                'class' => 'col-sm-5 col-xs-5',
	                        ),
	                        'widgetOptions' => array(
	                                'data' => $listmaterial,
	                                'htmlOptions' => array(),
	                        )
	                )); 
		?>
	
		<?php echo $form->textFieldGroup($model,'alto_ventana',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>20)))); ?>
	
		<?php echo $form->textFieldGroup($model,'ancho_ventana',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>20)))); ?>
	
		<?php
	        $servicios= Servicios::model()->findAll();
	        $listServicios=CHtml::listData($servicios,'id','nombre');
	        echo $form->dropDownListGroup($model,'servicio_extra_id',array(
	                        'wrapperHtmlOptions' => array(
	                                'class' => 'col-sm-5 col-xs-5',
	                        ),
	                        'widgetOptions' => array(
	                                'data' => $listServicios,
	                                'htmlOptions' => array(),
	                        )
	                )); 
		?>
		
	
	<div class="form-actions">
		<?php $this->widget('booster.widgets.TbButton', array(
				'buttonType'=>'submit',
				'context'=>'primary',
				'label'=>$model->isNewRecord ? 'Create' : 'Save',
			)); ?>
	</div>
	
	<?php $this->endWidget(); ?>
</div>