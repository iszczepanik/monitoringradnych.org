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
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/scripts.js"></script>

<body data-offset="50" data-target=".subnav" data-spy="scroll">
<div class="container" id="page">
<!--<div id="logo" ><a href="<?php echo $this->createUrl('/'); ?>" ><img src="img/logo.png" alt="Monitoring radnych" /></a></div>-->

<div class="tabbable tabs-below" style="margin-top: 18px;" >
  <div class="tab-content">
	<div class="tab-pane active" id="A">
	</div>
  </div>
  <ul class="nav nav-tabs">
	<li class="active"><a href="<?php echo $this->createUrl('/'); ?>" style="cursor: pointer;" >
	<h1 class="anivers" ><?php echo CHtml::encode(Yii::app()->name); ?></h1></a></li>
	<li><!--<a href="#B" data-toggle="tab">Section 2</a>-->
	<div class="main-menu frontpage-menu" >
	<?php $this->widget('bootstrap.widgets.BootMenu', array(
		    'type'=>'pills', // '', 'tabs', 'pills' (or 'list')
		    'stacked'=>false, // whether this is a stacked menu
		    'items'=>array(
		        //array('label'=>'Home', 'url'=>array('/site/index'), 'visible'=>true),
				array('label'=>'O projekcie', 'url'=>array('/site/oprojekcie')),
				array('label'=>'Kontakt', 'url'=>array('/site/konakt')),
				array('label'=>'Radni', 'url'=>array('/frontRadny/index')),
				array('label'=>'Wyszukiwarka uchwał', 'url'=>array('/FrontUchwala/index')),
				array('label'=>'Dzielnice', 'url'=>array('/frontDzielnice/index')),
				array('label'=>'Ranking Radnych', 'url'=>array('/frontRanking/index')),
				array('label'=>'Aktualności', 'url'=>array('/Aktualnosci/index')),
				array('label'=>'Wypowiedzi ekspertów', 'url'=>array('/Ekspertyzy/index')),
				array('label'=>'Komentarze do uchwał', 'url'=>array('/Komentarze/index')),
				array('label'=>'Mieszkańcy konsultują', 'url'=>array('/Konsultacje/index')),
				
		    ),
		)); ?>
		</div>
	</li>
	
  </ul>
</div>

	<? if (Yii::app()->user->checkAccess('admin')): ?>
	<ul class="nav nav-tabs">
	<li class="active"><a href="#" >
	<h2>Administracja</h2></a>
	</li>
	<li></li>
	</ul>
	<? endif; ?>
	
	<div class="main-menu" >
		<?php $this->widget('bootstrap.widgets.BootMenu', array(
		    'type'=>'pills', // '', 'tabs', 'pills' (or 'list')
		    'stacked'=>false, // whether this is a stacked menu
		    'items'=>array(
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

		

	
	<!--<div style="height: 40px;"></div>-->



	<?php echo $content; ?>


	<footer class="footer" id="footer">
		<div class="row"> 
	    

			
				<div class="span4" >
					<h3>Komisje</h3>
					<div class="photo-title muted" style="text-align: left;">tutaj znajdziecie skład komisji, listy obecności, plany pracy i protokoły z posiedzeń</div>
					
					<a href="http://bip.um.katowice.pl/index.php?s=20&id=1292316724" >Budżetu</a>
					<a href="http://bip.um.katowice.pl/index.php?s=20&id=1292316788" >Edukacji</a>
					<a href="http://bip.um.katowice.pl/index.php?s=20&id=1292317193" >Infrastruktury i środowiska</a>
					<a href="http://bip.um.katowice.pl/index.php?s=20&id=1292316878" >Kultury, Promocji i Sportu</a>
					<a href="http://bip.um.katowice.pl/index.php?s=20&id=1292316948" >Polityki społecznej</a>
					<a href="http://bip.um.katowice.pl/index.php?s=20&id=1292316610" >Organizacyjna</a>
					<a href="http://bip.um.katowice.pl/index.php?s=20&id=1292317310" >Rozwoju miasta</a>
					<a href="http://bip.um.katowice.pl/index.php?s=20&id=1292316485" >Rewizyjna</a>
				</div>
<div class="span4" >
<h3>Warto odwiedzić</h3>
<div class="photo-title muted" style="text-align: left;">tutaj znajdziecie informacje o radnych i ich pracach</div>
<a href="http://bip.um.katowice.pl/index.php?s=15&r=1221779186" >Projekty uchwał</a>

<a href="http://bip.um.katowice.pl/index.php?s=189&rok=2012" >Akty prawa miejscowego</a>

<a href="http://bip.um.katowice.pl/index.php?s=102&r=1" >Oświadczenia majątkowe</a>

<a href="http://bip.um.katowice.pl/index.php?s=15&r=1221734909" >Plan pracy rady</a>

<a href="http://bip.um.katowice.pl/index.php?s=16&r=1221751187&id=1227080613" >Regulamin Rady</a>

<a href="http://www.katowice.eu/portalradnych" >Portal Radnych</a>
</div>
			
		
		
	    <div class="span4" ><img src="img/bonafides.png" alt="bonafides" />
		<?php $this->widget('bootstrap.widgets.BootMenu', array(
		    'type'=>'pills', // '', 'tabs', 'pills' (or 'list')
		    'stacked'=>false, // whether this is a stacked menu
		    'items'=>array(
				array('label'=>'Logowanie', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
		        array('label'=>'Wyloguj ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
		    ),
		)); ?>
		</div>
	    </div>
		
			

		
	</footer><!-- footer -->
</div><!-- page -->

</body>
</html>