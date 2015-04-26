<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Ошибка';
$this->breadcrumbs=array(
    'Главная' => '/',
	'Ошибка',
);
?>

<h2>Ошибка 404 <?php echo $code; ?></h2>

<div class="error">
<?php echo CHtml::encode($message); ?>
</div>