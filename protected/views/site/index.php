<div class="tabbable tabs-left">
	<ul class="nav nav-tabs" >
		<li class="active" >
			<div class="activetab"  style="width: 325px;" >
				<p class="lead anivers">
				Nie wiesz jakiego radnego wybrać do przyszłej rady miasta?
				</p>
				<p class="lead anivers">
				Brakuje Ci informacji o tym, co radny robi dla Twojej dzielnicy?
				</p>
				<p class="lead anivers">
				Możesz to zmienić! <br />
				<a href="<? echo $this->createUrl('site/page&view=akademia_monitoringu'); ?>" >Weź udział w naszym projekcie!</a>
				</p>
			</div>
			<p style="width: 325px; text-align: right; padding: 2px 2px 2px 16px;" class="muted" >Tutaj znajdziecie m.in. informacje o pracy Rady Miasta i poszczególnych radnych, uchwały Rady Miasta wraz z wynikami głosowań imiennych radnych oraz projekty prawa miejscowego.</p>
		</li>
	</ul>
	
	<div class="tab-content"  >
		<div class="tab-pane active" id="lA"  >
			<ul class="shadow-box" style="float: right; width: 450px;">
                <li>
					<div id="slider1">
						<ul id="slider1Content">
							<li class="slider1Image">
								<a href="<?php echo $this->createUrl('/Aktualnosci/index'); ?>"><img src="img/aktualnosci.jpg" alt="1" /></a>
								<span class="bottom"><h2>Aktualności</h2><a href="<?php echo $this->createUrl('/Aktualnosci/index'); ?>">więcej...</a></span></li>
							<li class="slider1Image">
								<a href="<?php echo $this->createUrl('/Ekspertyzy/index'); ?>"><img src="img/wypowiedzi_ekspertow.jpg" alt="2" /></a>
								<span class="bottom"><h2>Wypowiedzi ekspertów</h2><a href="<?php echo $this->createUrl('/Ekspertyzy/index'); ?>">zobacz...</a></span></li>
							<li class="slider1Image">
								<a href="<?php echo $this->createUrl('/KomentarzUchwaly/index'); ?>"><img src="img/komentarze.jpg" alt="3" /></a>
								<span class="bottom"><h2>Analiza wybranych uchwał</h2><a href="<?php echo $this->createUrl('/KomentarzUchwaly/index'); ?>">zobacz...</a></span></li>
							<li class="slider1Image">
								<a href="<?php echo $this->createUrl('/MieszkancyKonsultuja/index'); ?>"><img src="img/mieszkancy_konsultuja.jpg" alt="4" /></a>
								<span class="bottom"><h2>Mieszkańcy konsultują</h2><a href="<?php echo $this->createUrl('/MieszkancyKonsultuja/index'); ?>">przyłącz się...</a></span></li>
							<div class="clear slider1Image"></div>
						</ul>
					</div>
				</li>
              </ul>
			  <div class="clear"></div>
		</div>
		&nbsp;
	</div>
</div>

<!--
<div class="tabbable tabs-left">
	<ul class="nav nav-tabs" >
		<li class="active" >
			<a href="#lA" data-toggle="tab" style="width: 325px;" >
				<p class="lead anivers">
				Nie wiesz jakiego radnego wybrać do przyszłej rady miasta?
				</p>
				<p class="lead anivers">
				Brakuje Ci informacji o tym, co radny robi dla Twojej dzielnicy?
				</p>
				<p class="lead anivers">
				Możesz to zmienić! <br /><span class="green" >Weź udział w naszym projekcie!</span>
				</p>
			</a>
			<p style="width: 325px; text-align: right; padding: 2px 2px 2px 16px;" class="muted" >Tutaj znajdziecie m.in. informacje o pracy Rady Miasta i poszczególnych radnych, uchwały Rady Miasta wraz z wynikami głosowań imiennych radnych oraz projekty prawa miejscowego.</p>
		</li>
	</ul>
	
	<div class="tab-content"  >
		<div class="tab-pane active" id="lA"  >
			<ul class="shadow-box" style="float: right; width: 450px;">
                <li>
					<div id="slider1">
						<ul id="slider1Content">
							<li class="slider1Image">
								<a href=""><img src="img/aktualnosci.jpg" alt="1" /></a>
								<span class="bottom"><h2>Aktualności</h2><a href="#">więcej...</a></span></li>
							<li class="slider1Image">
								<a href=""><img src="img/wypowiedzi_ekspertow.jpg" alt="2" /></a>
								<span class="bottom"><h2>Wypowiedzi ekspertów</h2><a href="#">zobacz...</a></span></li>
							<li class="slider1Image">
								<a href=""><img src="img/komentarze.jpg" alt="3" /></a>
								<span class="bottom"><h2>Komentarze do uchwał</h2><a href="#">zobacz...</a></span></li>
							<li class="slider1Image">
								<a href=""><img src="img/mieszkancy_konsultuja.jpg" alt="4" /></a>
								<span class="bottom"><h2>Mieszkańcy konsultują</h2><a href="#">przyłącz się...</a></span></li>
							<div class="clear slider1Image"></div>
						</ul>
					</div>
					
				</li>
              </ul>
			  <div class="clear"></div>

		</div>
		&nbsp;
	</div>
	
</div>

-->

<?php //$this->pageTitle=Yii::app()->name; ?>

<!--<h1>Monitoring radnych</h1>-->

    <!-- 
    <div id="slider1">
        <div class="plot" >
		<p>Nie wiesz jakiego radnego wybrać do przyszłej rady miasta? </p>
		<p>Brakuje Ci informacji o tym, co radny robi dla Twojej dzielnicy? </p>
		<p>Możesz to zmienić! Weź udział w naszym projekcie.</p>
		</div>
        <ul id="slider1Content">
            <li class="slider1Image">
                <a href=""><img src="img/aktualnosci_1.jpg" alt="1" /></a>
                <span class="bottom"><h2>Aktualności</h2><a href="#">więcej...</a></span></li>
            <li class="slider1Image">
                <a href=""><img src="img/wypowiedzi_ekspertow_1.jpg" alt="2" /></a>
                <span class="bottom"><h2>Wypowiedzi ekspertów</h2><a href="#">zobacz...</a></span></li>
            <li class="slider1Image">
                <img src="img/komentarze_do_uchwal.jpg" alt="3" />
                <span class="bottom"><h2>Komentarze do uchwał</h2><a href="#">zobacz...</a></span></li>
            <li class="slider1Image">
                <img src="img/mieszkancy_konsultuja_1.jpg" alt="4" />
                <span class="bottom"><h2>Mieszkańcy konsultują</h2><a href="#">przyłącz się...</a></span></li>
            <div class="clear slider1Image"></div>
        </ul>
    </div>
    -->
	<!---->
     <!-- <div style="height: 30px;"></div>
  
    <div class="row lower-menu"> 
    	<ul class="nav nav-pills">
	    <li class="span3" >
	    <a href="<?php echo $this->createUrl('/frontRadny/view&id=1&tab=clubs'); ?>" >Radni
	    <div class="image" ></div></a>
	    </li>
		<li class="span3" >
		<a href="<?php echo $this->createUrl('FrontUchwala/index'); ?>">Wyszukiwarka uchwał
		<div class="image" ></div></a>
		</li>
		<li class="span3" >
		<a href="<?php echo $this->createUrl('frontDzielnice/view&id=1'); ?>">Dzielnice
		<div class="image" ></div></a>
		</li>
		<li class="span3" >
		<a href="<?php echo $this->createUrl('frontRanking/index&id=ranking'); ?>">Ranking
		<div class="image" ></div></a>
		</li>
		</ul>
	</div>-->
	
	
        

<script type="text/javascript">

    $(document).ready(function() {
        $('#slider1').s3Slider({
            timeOut: 4000 
        });
		
    });

</script>