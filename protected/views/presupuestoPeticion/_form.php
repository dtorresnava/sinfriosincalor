<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'presupuesto-peticion-form',
	'enableAjaxValidation'=>false,
)); 

if (isset($_GET["cliente"]) && isset($_GET['peticion_id'])){
	$cliente_id=$_GET["cliente"];
	$peticion_id=$_GET['peticion_id'];	
}

?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	
	<?php echo $form->textFieldGroup($model,'peticion_cliente_id',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5', 'value'=>$peticion_id, 'readonly'=>true))));?>
	
	<?php
        $producto= Productos::model()->findAll();
        $listaProductos=CHtml::listData($producto,'id','modelo');
        echo $form->dropDownListGroup($model,'producto_id',array(
                        'wrapperHtmlOptions' => array(
                                'class' => 'col-sm-5 col-xs-5',
                        ),
                        'widgetOptions' => array(
                                'data' => $listaProductos,
                                'htmlOptions' => array(),
                        )
                )); 
	?>

	<?php
        $servicio= Servicios::model()->findAll();
        $listaServicios=CHtml::listData($servicio,'id','nombre');
        echo $form->dropDownListGroup($model,'servicio_id',array(
                        'wrapperHtmlOptions' => array(
                                'class' => 'col-sm-5 col-xs-5',
                        ),
                        'widgetOptions' => array(
                                'data' => $listaServicios,
                                'htmlOptions' => array(),
                        )
                )); 
	?>

	<?php echo $form->textFieldGroup($model,'presupuesto_producto',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'presupuesto_servicio',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>	

<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
