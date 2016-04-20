<?php
$form = $this->beginWidget ( 'booster.widgets.TbActiveForm', array (
		'id' => 'usuarios-form',
		'enableAjaxValidation' => false 
) );
?>

<p class="help-block">
	Fields with <span class="required">*</span> are required.
</p>


<div class="row">
	<?php echo $form->errorSummary($model); ?>
	<div class="col-md-6">
		<?php echo $form->textFieldGroup($model,'usuario',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>40)))); ?>
		
		<?php echo $form->textFieldGroup($model,'nombre',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>50)))); ?>

		<?php echo $form->textFieldGroup($model,'email',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>100)))); ?>
		
		<?php echo $form->passwordFieldGroup($model,'password',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>32)))); ?>	
		
		<?php
	
		if (Yii::app ()->user->name == 'admin') {
			echo $form->hiddenField ( $model, 'roles', array (
					'value' => 'E' 
			) );
		} else {
			echo $form->hiddenField ( $model, 'roles', array (
					'value' => 'C' 
			) );
		}
		?>
	</div>
	
	<div class="col-md-6">
		<?php
		if (Yii::app ()->user->name == "admin") {
			echo $form->textFieldGroup ( $model, 'dni', array (
					'widgetOptions' => array (
							'htmlOptions' => array (
									'class' => 'span5',
									'maxlength' => 10 
							) 
					) 
			) );
			
			echo $form->textFieldGroup ( $model, 'calle', array (
					'widgetOptions' => array (
							'htmlOptions' => array (
									'class' => 'span5',
									'maxlength' => 100 
							) 
					) 
			) );
			
			echo $form->textFieldGroup ( $model, 'poblacion', array (
					'widgetOptions' => array (
							'htmlOptions' => array (
									'class' => 'span5',
									'maxlength' => 80 
							) 
					) 
			) );
			
			echo $form->textFieldGroup ( $model, 'provincia', array (
					'widgetOptions' => array (
							'htmlOptions' => array (
									'class' => 'span5',
									'maxlength' => 80 
							) 
					) 
			) );
			
			echo $form->textFieldGroup ( $model, 'cp', array (
					'widgetOptions' => array (
							'htmlOptions' => array (
									'class' => 'span5' 
							) 
					) 
			) );
			
			echo $form->textFieldGroup ( $model, 'telefono', array (
					'widgetOptions' => array (
							'htmlOptions' => array (
									'class' => 'span5' 
							) 
					) 
			) );
		}
		?>	
		
		<?php
		if (Yii::app ()->user->name == "admin") {
			$this->widget ( 'booster.widgets.TbButton', array (
					'buttonType' => 'submit',
					'context' => 'primary',
					'label' => $model->isNewRecord ? 'Create' : 'Save' 
			) );
		}
		?>
		<div class="form-actions"></div>
	</div>
</div>

<div class="row"> 
	<div class="col-md-6">
		<?php
		if (Yii::app ()->user->name != "admin") {
			$this->widget ( 'booster.widgets.TbButton', array (
					'buttonType' => 'submit',
					'context' => 'primary',
					'label' => $model->isNewRecord ? 'Create' : 'Save' 
			) );
		}
		?>
	
	</div>
</div>

<?php $this->endWidget(); ?>