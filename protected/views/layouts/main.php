<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/datepicker.css"  />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css"  />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.css"  />

	
	
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.nivo.slider.js"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-modifications.css"  />
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/s3Slider.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/scripts.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-datepicker.js"></script>
<body data-offset="50" data-target=".subnav" data-spy="scroll">
<div class="container" id="page">
<!--<div id="logo" ><a href="<?php echo $this->createUrl('/'); ?>" ><img src="img/logo.png" alt="Monitoring radnych" /></a></div>-->
<div style="height: 18px; background-color:#9aca3c; "></div>
<div class="tabbable tabs-below" style="/*margin-top: 18px;*/" >
  <div class="tab-content">
	<div class="tab-pane active" id="A">
	</div>
  </div>
  <ul class="nav nav-tabs">
	<li class="active"  ><a href="<?php echo $this->createUrl('/'); ?>" style="background-color:#9aca3c; cursor: pointer;" >
	<h1 class="anivers" ><?php echo CHtml::encode(Yii::app()->name); ?></h1></a></li>
	<li><a href="<?php echo $this->createUrl('site/page&view=about'); ?>">O projekcie</a></li>
	<li><a href="<?php echo $this->createUrl('site/page&view=contact'); ?>">Kontakt</a></li>
	<li><a href="<?php echo $this->createUrl('/AkademiaMonitoringu/index'); ?>">Akademia Monitoringu</a></li>
	<? if (!Yii::app()->user->isGuest) : ?><li><a href="<?php echo $this->createUrl('/site/logout'); ?>">Wyloguj (<? echo Yii::app()->user->name; ?>)</a></li><? endif; ?>
  </ul>
</div>

<div class="navbar">
	<div class="navbar-inner" >
		<div style="padding: 0; width: auto;" class="container">
                  <ul class="nav">
					<li><a href="<?php echo $this->createUrl('/Aktualnosci/index'); ?>">Aktualności</a></li>
                    <li <?//class="active"?> ><a href="<?php echo $this->createUrl('/frontRadny/view&id=1&tab=clubs'); ?>">Radni</a></li>
                    <li><a href="<?php echo $this->createUrl('/FrontUchwala/index'); ?>">Wyszukiwarka uchwał</a></li>
                    <li><a href="<?php echo $this->createUrl('/frontDzielnice/view&id=1'); ?>">Dzielnice</a></li>
					<li><a href="<?php echo $this->createUrl('/frontRanking/index&id=ranking'); ?>">Ranking</a></li>
					<li><a href="<?php echo $this->createUrl('/Ekspertyzy/index'); ?>">Wypowiedzi ekspertów</a></li>
					<li><a href="<?php echo $this->createUrl('/KomentarzUchwaly/index'); ?>">Analiza wybranych uchwał</a></li>
					<li><a href="<?php echo $this->createUrl('/MieszkancyKonsultuja/index'); ?>">Mieszkańcy konsultują</a></li>
                  </ul>
                </div>
	</div>
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
				array('label'=>'Użytkownicy', 'url'=>array('/user/admin'), 'visible'=>Yii::app()->user->checkAccess('superadmin')),
				array('label'=>'Radni', 'url'=>array('/radny/admin'), 'visible'=>Yii::app()->user->checkAccess('admin')),
				array('label'=>'Kluby', 'url'=>array('/club/admin'), 'visible'=>Yii::app()->user->checkAccess('admin')),
				array('label'=>'Okręgi', 'url'=>array('/okreg/admin'), 'visible'=>Yii::app()->user->checkAccess('admin')),
				array('label'=>'Dzielnice', 'url'=>array('/dzielnica/admin'), 'visible'=>Yii::app()->user->checkAccess('admin')),
				array('label'=>'Kadencje', 'url'=>array('/tenure/admin'), 'visible'=>Yii::app()->user->checkAccess('admin')),
				array('label'=>'Komisje', 'url'=>array('/komisja/admin'), 'visible'=>Yii::app()->user->checkAccess('admin')),
				array('label'=>'Kategorie', 'url'=>array('/kategoria/admin'), 'visible'=>Yii::app()->user->checkAccess('admin')),
				array('label'=>'Uchwały', 'url'=>array('/uchwala/admin'), 'visible'=>Yii::app()->user->checkAccess('admin')),
				array('label'=>'Projekty', 'url'=>array('/projekt/admin'), 'visible'=>Yii::app()->user->checkAccess('admin')),
				array('label'=>'Ranking', 'url'=>array('/ranking/admin'), 'visible'=>Yii::app()->user->checkAccess('admin')),
				array('label'=>'Interpelacje', 'url'=>array('/interpelacja/admin'), 'visible'=>Yii::app()->user->checkAccess('admin')),
				array('label'=>'Artykuły', 'url'=>array('/NewsBackend/admin'), 'visible'=>Yii::app()->user->checkAccess('admin')),
				array('label'=>'Artykuły - kategorie', 'url'=>array('/NewsCategoryBackend/admin'), 'visible'=>Yii::app()->user->checkAccess('superadmin')),
				array('label'=>'Ekspertyzy', 'url'=>array('/EkspertyzaBackend/admin'), 'visible'=>Yii::app()->user->checkAccess('admin')),
				array('label'=>'Komentarze do uchwał / projektów', 'url'=>array('/KomentarzUchwalyBackend/admin'), 'visible'=>Yii::app()->user->checkAccess('admin')),
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
					
					<a href="http://bip.um.katowice.pl/index.php?s=20&id=1292316724" target="_blank" >Budżetu</a>
					<a href="http://bip.um.katowice.pl/index.php?s=20&id=1292316788" target="_blank" >Edukacji</a>
					<a href="http://bip.um.katowice.pl/index.php?s=20&id=1292317193" target="_blank" >Infrastruktury i środowiska</a>
					<a href="http://bip.um.katowice.pl/index.php?s=20&id=1292316878" target="_blank" >Kultury, Promocji i Sportu</a>
					<a href="http://bip.um.katowice.pl/index.php?s=20&id=1292316948" target="_blank" >Polityki społecznej</a>
					<a href="http://bip.um.katowice.pl/index.php?s=20&id=1292316610" target="_blank" >Organizacyjna</a>
					<a href="http://bip.um.katowice.pl/index.php?s=20&id=1292317310" target="_blank" >Rozwoju miasta</a>
					<a href="http://bip.um.katowice.pl/index.php?s=20&id=1292316485" target="_blank" >Rewizyjna</a>
				</div>
<div class="span4" >
<h3>Warto odwiedzić</h3>
<div class="photo-title muted" style="text-align: left;">tutaj znajdziecie informacje o radnych i ich pracach</div>
<a href="http://bip.um.katowice.pl/index.php?s=15&r=1221779186" target="_blank" >Projekty uchwał</a>

<a href="http://bip.um.katowice.pl/index.php?s=189&rok=2012" target="_blank" >Akty prawa miejscowego</a>

<a href="http://bip.um.katowice.pl/index.php?s=102&r=1" target="_blank" >Oświadczenia majątkowe</a>

<a href="http://bip.um.katowice.pl/index.php?s=15&r=1221734909" target="_blank" >Plan pracy rady</a>

<a href="http://bip.um.katowice.pl/index.php?s=16&r=1221751187&id=1227080613" target="_blank" >Regulamin Rady</a>

<a href="http://www.katowice.eu/portalradnych" target="_blank" >Portal Radnych</a>
</div>
			
		
		
	    <div class="span4" >
		<h3>Pomysł i realizacja:</h3>
		<a href="http://bonafides.pl" target="_blank" ><img src="img/bonafides.png" alt="Bonafides" /></a>
		<br /><br />
		<h3>Finansowanie ze środków:</h3>
		<a href="http://www.batory.org.pl" target="_blank" ><img src="img/fundacjabatorego.png" alt="Fundacja im. Stefana Batorego" /></a>
		</div>
	    </div>
		
			

		
	</footer><!-- footer -->
</div><!-- page -->
<script type="text/javascript">

    $(document).ready(function() {
        //$('#slider1').s3Slider({
         //   timeOut: 4000 
        //}/);
		
		//$('.datepicker').datepicker();

		
		$('#dp_do').datepicker();
		$('#dp_od').datepicker();
		
		$('#news-form').popover();
		
    });

</script>
</body>
</html>