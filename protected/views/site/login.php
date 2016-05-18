<div class="col-xs-2 col-md-3 loginpos">

</div>

<div class="col-xs-6 col-md-6 loginpos">
    <?php
    /* @var $this SiteController */
    /* @var $model LoginForm */
    /* @var $form CActiveForm  */

    $this->pageTitle = Yii::app()->name . ' - Login';
    $this->breadcrumbs = array(
        'Login',
    );
    ?>

    <h1>Login</h1>
     
    <div class="form">


        <?php
        $form = $this->beginWidget('booster.widgets.TbActiveForm', array(
            'id' => 'login-form',
            'enableClientValidation' => true,
            'clientOptions' => array(
                'validateOnSubmit' => true,
            ),
        ));
        ?>        
        
        <?php echo $form->textFieldGroup($model, 'username', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5', 'maxlength' => 16)))); ?>		
                
        <?php echo $form->passwordFieldGroup($model, 'password', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5', 'maxlength' => 32)))); ?>
        
        <?php
        echo $form->checkboxGroup(
                $model, encode('rememberMe')
        );
        ?>
         

        <div class=" buttons">
            
            <?php 
            $this->widget ( 'booster.widgets.TbButton', array (
            		'buttonType' => 'submit',
            		'context' => 'primary',
            		'label' => 'Login'
            ) );
            
            ?>
           
        </div>

        <?php $this->endWidget(); ?>
    </div><!-- form -->
    <a href="<?php echo Yii::app()->createUrl('site/recuperarpassword')?>">Recuperar password</a>
</div>