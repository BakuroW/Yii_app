<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Вход';
$this->breadcrumbs=array(
    'Главная' => '/',
	'Вход',
);
?>
<div class="row">
    <div class="col-md-6 col-md-offset-3 col-xs-12">

    <h1>Вход</h1>
        <div class="form">
        <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'login-form',
            'enableClientValidation'=>true,
            'clientOptions'=>array(
                'validateOnSubmit'=>true,
            ),
        )); ?>

            <p class="note">Поля с <span class="required">*</span> обезательны.</p>

            <div class="form-group">
                <?php echo $form->labelEx($model,'username'); ?>
                <?php echo $form->textField($model,'username', array('class' => 'form-control')); ?>
                <?php echo $form->error($model,'username'); ?>
            </div>

            <div class="form-group">
                <?php echo $form->labelEx($model,'password'); ?>
                <?php echo $form->passwordField($model,'password', array('class' => 'form-control')); ?>
                <?php echo $form->error($model,'password'); ?>
            </div>

            <div class="form-group">
                <?php echo $form->checkBox($model,'rememberMe'); ?>
                <?php echo $form->label($model,'rememberMe'); ?>
                <?php echo $form->error($model,'rememberMe'); ?>
            </div>

            <div class="form-group">
                <?php echo CHtml::submitButton('Войти', array('class' => 'btn btn-default pull-right')); ?>
            </div>

        <?php $this->endWidget(); ?>
        </div><!-- form -->
    </div>
</div>