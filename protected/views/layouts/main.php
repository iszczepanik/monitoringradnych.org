<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css"  />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.css"  />

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-modifications.css"  />
	
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.7.2.min.js"></script>
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body data-offset="50" data-target=".subnav" data-spy="scroll">
<div class="container" id="page">

	<h1><?php echo CHtml::encode(Yii::app()->name); ?></h1>
		<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				//array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				//array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
				//array('label'=>'Register', 'url'=>array('/site/register'), 'visible'=>Yii::app()->user->isGuest),
				// array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
				// array('label'=>'Negotiators', 'url'=>array('/user/UserList'), 'visible'=>(!Yii::app()->user->isGuest)),
				// array('label'=>'My negotiations', 'url'=>array('/negotiation/user'), 'visible'=>(Yii::app()->user->name!='admin' && !Yii::app()->user->isGuest)),
				// array('label'=>'My profile', 'url'=>array('/user/TkiProfile'), 'visible'=>(Yii::app()->user->name!='admin' && !Yii::app()->user->isGuest)),
				array('label'=>'Użytkownicy', 'url'=>array('/user/admin'), 'visible'=>Yii::app()->user->checkAccess('admin')),
				array('label'=>'Radni', 'url'=>array('/radny/admin'), 'visible'=>Yii::app()->user->checkAccess('admin')),
				array('label'=>'Okręgi', 'url'=>array('/okreg/admin'), 'visible'=>Yii::app()->user->checkAccess('admin')),
				array('label'=>'Dzielnice', 'url'=>array('/dzielnica/admin'), 'visible'=>Yii::app()->user->checkAccess('admin')),
				array('label'=>'Kadencje', 'url'=>array('/tenure/admin'), 'visible'=>Yii::app()->user->checkAccess('admin')),
				// array('label'=>'Negotiation Cases', 'url'=>array('/negotiationcase/admin'), 'visible'=>Yii::app()->user->name=='admin'),
				// array('label'=>'Negotiations', 'url'=>array('/negotiation/admin'), 'visible'=>Yii::app()->user->name=='admin'),
				// array('label'=>'Criteria', 'url'=>array('/criteria/admin'), 'visible'=>Yii::app()->user->name=='admin'),
				// array('label'=>'Preferences', 'url'=>array('/weighing/admin'), 'visible'=>(Yii::app()->user->name!='admin' && !Yii::app()->user->isGuest)),
				// array('label'=>'TEST', 'url'=>array('/site/index'), 'visible'=>(Yii::app()->user->checkAccess('admin'))),
			),
		)); ?>
		</div><!-- mainmenu -->
		

	<!-- breadcrumbs		
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?>
	<?php endif?> -->
	




	<?php echo $content; ?>


	<footer class="footer" id="footer">
		<?php echo Yii::powered(); ?>
	</footer><!-- footer -->
</div><!-- page -->

</body>
</html>