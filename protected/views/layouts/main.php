<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css"  />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.css"  />

	
	
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.nivo.slider.js"></script>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-modifications.css"  />
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/s3Slider.js"></script>


<body data-offset="50" data-target=".subnav" data-spy="scroll">
<div class="container" id="page">
<div id="logo" ><a href="<?php echo Yii::app()->request->baseUrl; ?>" ><img src="img/logo.png" alt="Monitoring radnych" /></a></div>
	<!--<h1><?php echo CHtml::encode(Yii::app()->name); ?></h1>-->
	<div class="main-menu" >
		<?php $this->widget('bootstrap.widgets.BootMenu', array(
		    'type'=>'pills', // '', 'tabs', 'pills' (or 'list')
		    'stacked'=>false, // whether this is a stacked menu
		    'items'=>array(
		        //array('label'=>'Home', 'url'=>array('/site/index'), 'visible'=>true),
				array('label'=>'O projekcie', 'url'=>array('/site/oprojekcie'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Kontakt', 'url'=>array('/site/konakt'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logowanie', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
		        array('label'=>'Wyloguj ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Użytkownicy', 'url'=>array('/user/admin'), 'visible'=>Yii::app()->user->checkAccess('admin')),
				array('label'=>'Radni', 'url'=>array('/radny/admin'), 'visible'=>Yii::app()->user->checkAccess('admin')),
				array('label'=>'Okręgi', 'url'=>array('/okreg/admin'), 'visible'=>Yii::app()->user->checkAccess('admin')),
				array('label'=>'Dzielnice', 'url'=>array('/dzielnica/admin'), 'visible'=>Yii::app()->user->checkAccess('admin')),
				array('label'=>'Kadencje', 'url'=>array('/tenure/admin'), 'visible'=>Yii::app()->user->checkAccess('admin')),
				array('label'=>'Komisje', 'url'=>array('/komisja/admin'), 'visible'=>Yii::app()->user->checkAccess('admin')),
				array('label'=>'Kategorie', 'url'=>array('/kategoria/admin'), 'visible'=>Yii::app()->user->checkAccess('admin')),
				array('label'=>'Uchwały', 'url'=>array('/uchwala/admin'), 'visible'=>Yii::app()->user->checkAccess('admin')),
				array('label'=>'Projekty', 'url'=>array('/projekt/admin'), 'visible'=>Yii::app()->user->checkAccess('admin')),
				array('label'=>'Ranking', 'url'=>array('/ranking/admin'), 'visible'=>Yii::app()->user->checkAccess('admin')),
				array('label'=>'Interpelacje', 'url'=>array('/interpelacja/admin'), 'visible'=>Yii::app()->user->checkAccess('admin')),
		    ),
		)); ?>
	</div>
	<!--
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
				array('label'=>'Komisje', 'url'=>array('/komisja/admin'), 'visible'=>Yii::app()->user->checkAccess('admin')),
				array('label'=>'Kategorie', 'url'=>array('/kategoria/admin'), 'visible'=>Yii::app()->user->checkAccess('admin')),
				array('label'=>'Uchwały', 'url'=>array('/uchwala/admin'), 'visible'=>Yii::app()->user->checkAccess('admin')),
				array('label'=>'Projekty', 'url'=>array('/projekt/admin'), 'visible'=>Yii::app()->user->checkAccess('admin')),
				array('label'=>'Ranking', 'url'=>array('/ranking/admin'), 'visible'=>Yii::app()->user->checkAccess('admin')),
				// array('label'=>'Negotiation Cases', 'url'=>array('/negotiationcase/admin'), 'visible'=>Yii::app()->user->name=='admin'),
				// array('label'=>'Negotiations', 'url'=>array('/negotiation/admin'), 'visible'=>Yii::app()->user->name=='admin'),
				// array('label'=>'Criteria', 'url'=>array('/criteria/admin'), 'visible'=>Yii::app()->user->name=='admin'),
				// array('label'=>'Preferences', 'url'=>array('/weighing/admin'), 'visible'=>(Yii::app()->user->name!='admin' && !Yii::app()->user->isGuest)),
				// array('label'=>'TEST', 'url'=>array('/site/index'), 'visible'=>(Yii::app()->user->checkAccess('admin'))),
			),
		)); ?>
		</div> mainmenu -->
		

	<!-- breadcrumbs		
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?>
	<?php endif?> -->
	
	<div style="height: 40px;"></div>



	<?php echo $content; ?>


	<footer class="footer" id="footer">
		<div class="row"> 
	    <div class="span8" >Tekst stopki</div>
	    <div class="span4" ><img src="img/bonafides.png" alt="bonafides" /></div>
	    </div>
	</footer><!-- footer -->
</div><!-- page -->

</body>
</html>