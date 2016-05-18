<?php

$form = $this->beginWidget ( 'booster.widgets.TbActiveForm', array (
		'id' => 'especificaciones-form',
		'enableAjaxValidation' => false 
) );

if(isset($_GET['idp']) && isset($_GET['modelop'])){
	$idp=$_GET['idp'];
	$modelop=$_GET['modelop'];
	//$model->producto_id = $idp;
}

?>

<p class="help-block">
	Fields with <span class="required">*</span> are required.
</p>

<?php echo $form->errorSummary($model); ?>
	
	<?php echo $form->textFieldGroup($model,'producto_id',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5', 'value'=>$idp, 'readonly'=>true))));?>
	
	<?php echo $form->textFieldGroup($model,'potencia_frio',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5'))));?>
	
	<?php echo $form->textFieldGroup($model,'potencia_calor',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'eficiencia_frio',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'eficiencia_calor',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'consumo_frio',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'consumo_calor',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'dimencion_alto_ue',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'dimencion_ancho_ue',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'dimencion_largo_ue',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'peso_ue',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'conexion_pequenya',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'conexion_grande',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'tipo_caudal',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>8)))); ?>

	<?php echo $form->textFieldGroup($model,'posicion_tubos_conextion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>200)))); ?>

	<?php echo $form->textFieldGroup($model,'peso_ui',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'dimencion_alto_ui',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'dimencion_ancho_ui',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'dimencion_largo_ui',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'cantidad_unidades',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

<div class="form-actions">
	<?php
	
$this->widget ( 'booster.widgets.TbButton', array (
			'buttonType' => 'submit',
			'context' => 'primary',
			'label' => $model->isNewRecord ? 'Create' : 'Save' 
	) );
	?>
</div>

<?php $this->endWidget(); ?>
