<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Контакты';
$this->breadcrumbs=array(
    'Главная' => '/',
	'Контакты',
);
?>

<h1>О нас</h1>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>
<div class="row">
    <div class="col-md-6 col-md-offset-3 col-xs-12">
        <p>
        Если у вас есть бизнес придложения или вопросы, пожалуста заполните следующую форму.
        </p>

        <div class="form">

        <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'contact-form',
            'enableClientValidation'=>true,
            'clientOptions'=>array(
                'validateOnSubmit'=>true,
            ),
        )); ?>

            <p class="note">Поля с <span class="required">*</span>обязательны.</p>

            <?php echo $form->errorSummary($model); ?>

            <div class="form-group">
                <?php echo $form->labelEx($model,'name'); ?>
                <?php echo $form->textField($model,'name',array('class' => 'form-control')); ?>
                <?php echo $form->error($model,'name'); ?>
            </div>

            <div class="form-group">
                <?php echo $form->labelEx($model,'email'); ?>
                <?php echo $form->textField($model,'email',array('class' => 'form-control')); ?>
                <?php echo $form->error($model,'email'); ?>
            </div>

            <div class="form-group">
                <?php echo $form->labelEx($model,'subject'); ?>
                <?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128, 'class' => 'form-control')); ?>
                <?php echo $form->error($model,'subject'); ?>
            </div>

            <div class="form-group">
                <?php echo $form->labelEx($model,'body'); ?>
                <?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50, 'class' => 'form-control')); ?>
                <?php echo $form->error($model,'body'); ?>
            </div>

            <?php if(CCaptcha::checkRequirements()): ?>
                <div class="form-group">
                <?php echo $form->labelEx($model,'verifyCode'); ?>
                <div>
                <?php $this->widget('CCaptcha'); ?>
                <?php echo $form->textField($model,'verifyCode', array('class' => 'form-control')); ?>
                </div>
                <div class="hint">Пожалуйста введите символы с картинки.
                </div>
                <?php echo $form->error($model,'verifyCode'); ?>
            </div>
            <?php endif; ?>

            <div class="form-group">
                <?php echo CHtml::submitButton('Отправить', array('class' => 'btn btn-default pull-right')); ?>
            </div>

        <?php $this->endWidget(); ?>

        </div><!-- form -->
    </div>
</div>
<?php endif; ?>