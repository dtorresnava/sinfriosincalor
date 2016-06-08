<div class="contact formulariosStyleAlta centermaindatauser">
	<?php
	/* @var $this SiteController */
	/* @var $model ContactForm */
	/* @var $form CActiveForm */
	
	$this->pageTitle=Yii::app()->name . ' - Contact Us';
	$this->breadcrumbs=array(
		'Contact',
	);
	?>
	
	<h1>Contacta con nosotros</h1>
	
	<?php if(Yii::app()->user->hasFlash('contact')): ?>
	
	<div class="flash-success">
		<?php echo Yii::app()->user->getFlash('contact'); ?>
	</div>
	
	<?php else: ?>
	
	<p>
	Si tienes alguna duda contacta con nosotros.
	</p>
	
	<div class="form">
	
	<?php 
	// $form=$this->beginWidget('CActiveForm', array(
	// 	'id'=>'contact-form',
	// 	'enableClientValidation'=>true,
	// 	'clientOptions'=>array(
	// 		'validateOnSubmit'=>true,
	// 	),
	// ));
	
	$form = $this->beginWidget ( 'booster.widgets.TbActiveForm', array (
			'id' => 'contact-form',
			'enableAjaxValidation' => false
	) );
	
	?>
	
	
	
	
		<p class="help-block">
			Campos con el <span class="required">*</span> son obligatorios.
		</p>
	
		<?php echo $form->errorSummary($model); ?>
	
		<?php echo $form->textFieldGroup($model,'name',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>50)))); ?>
	
		<?php echo $form->textFieldGroup(
				$model,
				'email',
				array(
					'wrapperHtmlOptions' => array(
						'class' => 'col-sm-5',
					),
					'prepend' => '@'
				)
			); ?>
	
		<?php echo $form->textFieldGroup($model,'subject',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>50)))); ?>
	
		<?php echo $form->textAreaGroup(
				$model,
				'body',
				array(
					'wrapperHtmlOptions' => array(
						'class' => 'col-sm-5',
					),
					'widgetOptions' => array(
						'htmlOptions' => array('rows' => 5),
					)
				)
			); ?>
	
		<?php if(CCaptcha::checkRequirements()): ?>
		<br>
		<div >			
			<div>
			<?php $this->widget('CCaptcha'); ?>
			<?php echo $form->textFieldGroup($model,'verifyCode',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>50)))); ?>
			</div>
			<div class="hint">Por favor introduce los caracteres que se muestran en la imágen.</div>
		</div>
		<?php endif; ?>
	
		<div class="buttons">
		<?php 
			$this->widget ( 'booster.widgets.TbButton', array (
							'buttonType' => 'submit',
							'context' => 'primary',
							'label' => 'contactar' 
					) );?>
		</div>
	
	<?php $this->endWidget(); ?>
	
	</div><!-- form -->
	
	<?php endif; ?>
</div>