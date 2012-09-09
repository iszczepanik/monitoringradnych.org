
<?php //$this->pageTitle=Yii::app()->name; ?>

<!--<h1>Monitoring radnych</h1>-->

        
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
        

<script type="text/javascript">

    $(document).ready(function() {
        $('#slider1').s3Slider({
            timeOut: 4000 
        });
    });

</script>