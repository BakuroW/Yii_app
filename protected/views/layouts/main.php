<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<nav class="navbar navbar-default top-navbar" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex-collapse">
            <span class="sr-only">Expand the menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse navbar-ex-collapse">
        <?php
        $this->widget( 'zii.widgets.CMenu', [
            'items'          => [
                array('label' => 'Главная', 'url' => array('/site/index')),
                array('label' => 'О нас', 'url' => array('/site/page', 'view' => 'about')),
                array('label' => 'Контакты', 'url' => array('/site/contact')),
                array('label' => 'Вход', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                array('label' => 'Выход (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
            ],
            'activeCssClass' => 'active',
            'encodeLabel' => false,
            'htmlOptions'    => [ 'class' => 'nav navbar-nav' ],
        ] );
        ?>
    </div>
</nav>

<div class="container" style="min-height: 560px">
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
            'links'=>$this->breadcrumbs,
            'homeLink'=>false,
            'tagName'=>'ul',
            'separator'=>'',
            'activeLinkTemplate'=>'<li><a href="{url}">{label}</a> <span class="divider"></span></li>',
            'inactiveLinkTemplate'=>'<li><span>{label}</span></li>',
            'htmlOptions'=>array ('class'=>'breadcrumb')
        )); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>
</div><!-- page -->

	<div id="footer" style="text-align: center; border-top: 1px solid silver" >
		Copyright &copy; <?php echo date('Y'); ?> by Bakurow Stanislav.<br/>
		All Rights Reserved.<br/>
	</div><!-- footer -->


    <script src="/js/bootstrap.min.js"></script>
</body>
</html>

