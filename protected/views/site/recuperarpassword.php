<div class="col-xs-2 col-md-3 loginpos">

</div>
<div class="col-xs-6 col-md-6 loginpos">

	
	<?php
	echo $mse;
    /* @var $this SiteController */
    /* @var $model LoginForm */
    /* @var $form CActiveForm  */

    $this->pageTitle = Yii::app()->name . ' - Recuperarpassword';
    $this->breadcrumbs = array(
        'Recuperarpassword',
    );
    
    
    ?>
    <br>
    <h1>Recuperar password</h1>
    
    <div class="form">


        <?php
        $form = $this->beginWidget('booster.widgets.TbActiveForm', array(
            'id' => 'booster.widgets.TbActiveForm',
            'enableClientValidation' => false,
            'clientOptions' => array(
                'validateOnSubmit' => true,
            ),
        ));
        ?>        
        <?php echo $form->textFieldGroup($model, 'usuario', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5', 'maxlength' => 16)))); ?>		
            
        <?php echo $form->emailFieldGroup($model, 'email', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5', 'maxlength' => 32)))); ?>
         
        <div class=" buttons">
            
            <?php //echo CHtml::submitButton('Recuperar contrase�a', array('class'=>'btn primary'));
            $this->widget ( 'booster.widgets.TbButton', array (
            		'buttonType' => 'submit',
            		'context' => 'primary',
            		'label' => 'Recuperar clave'
            ) );
            ?>
        </div>

        <?php $this->endWidget(); ?>
    </div><!-- form -->
</div>