<div class="container row">
    <div class="col-lg-2">
    </div>
    <div class="col-lg-5">
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

        <p>Please fill out the following form with your login credentials:</p>
    </div>
</div>
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
    <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-4">
            <p class="note">Fields with <span class="required">*</span> are required.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-2">
            <?php echo $form->textFieldGroup($model, 'username', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5', 'maxlength' => 16)))); ?>		
        </div>
        <div class="col-lg-2">
        </div>
    </div>

    <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-2">
            <?php echo $form->passwordFieldGroup($model, 'password', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5', 'maxlength' => 32)))); ?>
            <p class="hint">
                Hint: You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>.
            </p>
        </div>
        <div class="col-lg-2">
        </div>
    </div>

    <div class="row rememberMe">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-4">
            <?php
            echo $form->checkboxGroup(
                    $model, 'rememberMe'
            );
            ?>
        </div>
    </div>

    <div class="row buttons">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-4">
            <?php echo CHtml::submitButton('Login'); ?>
        </div>
    </div>

    <?php $this->endWidget(); ?>
</div><!-- form -->
