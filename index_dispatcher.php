<?php
	//Get PHP SDK
	require_once 'facebook.php';
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width">
        <title>Die Frauen von Tyringham Park</title>
        <link rel="image_src" href="img/share.jpg">
        <meta property="og:image" content="http://f-bilandia.de/luebbe/tyringham/images/share.jpg"/>
        <meta property="og:image:secure_url" content="https://f-bilandia.de/luebbe/tyringham/images/share.jpg">
        <meta property="og:image:type" content="image/jpg">
        <meta property="og:image:width" content="200">
        <meta property="og:image:height" content="200">
        <meta property="og:title" content="Die Frauen von Tyringham Park"/>
        <meta property="og:description" content="Jetzt Fan werden und die mitreißende Familiensaga als Buch oder Hörbuch gewinnen!" />
        <meta property="og:url" content="http://f-bilandia.de/luebbe/tyringham/weiche.php"/>
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>

<?php include "head.php" ?>
<body class="home-page dispatcher">

        <script type="text/javascript">
            if (top == self) 
            { 
                top.location = "https://www.facebook.com/pages/bilandia-Test/318672431558398?id=318672431558398&sk=app_251639345009802";
            }
        </script>


        <div id="fb-root"></div>
        <script type="text/javascript">
            window.fbAsyncInit = function() {
                //Your app details here
                FB.init({appId: '251639345009802', status: true, cookie: true, xfbml: true});
            };

            //Load the SDK asynchronously
            (function() {
                var e = document.createElement('script'); e.async = true;
                e.src = document.location.protocol +
                  '//connect.facebook.net/en_US/all.js';
                document.getElementById('fb-root').appendChild(e);
            }());
        </script>

	<!-- Primary Page Layout
	================================================== -->

	<!-- Delete everything in this .container and get started on your own site! -->

	<div class="container">
		<nav class="mainNav fourteen columns offset-by-one desktop-content tablet-content">
			<ul class="navMenu">
				<li class="seven columns gewinnspielBtn"><a href="index.php" class="active">Gewinnspiel</a></li>
				<li class="seven columns buchBtn"><a href="book.php">Buch</a></li>
			</ul>
		</nav>

		<h1 class="heading heading1 fourteen columns offset-by-one desktop-content tablet-content">Leidenschaft und Intrigen auf Tyringham Park</h1>
		<h1 class="heading heading1 fourteen columns offset-by-one phone-content">Die Frauen von Tyringham Park</h1>

		<ul class="navMenu phone-content">
			<li class="seven columns"><a href="book.php">Mehr zum Roman</a></li>
		</ul>

		<div class="introText fourteen columns offset-by-one desktop-content tablet-content">
			<p>Wer Downton Abbey mag, wird diesen Roman lieben!</p>
			<p>Ganz im S&uuml;den Irlands befindet sich das pr&auml;chtige Anwesen von Lord und Lady Blackshaw &ndash; ein Ort voller Prunk und Privilegien. Doch ein verh&auml;ngnisvolles Ereignis im Jahr 1917 zerst&ouml;rt den Frieden des Hauses.</p>
		</div>
		<div class="content fourteen columns offset-by-one">
			<h2 class="heading heading2">Gewinnspiel</h2>
			<p>In unserem Gewinnspiel verlosen wir je 5 Exemplare des Buches und des H&ouml;rbuches von &raquo;Die Frauen von Tyringham Park&laquo;. Dafür möchten wir von euch wissen:</p>
			<p class="highlight">Wie hei&szlig;t die j&uuml;ngste Tochter von Lord und Lady Blackshaw?</p>
			<p class="desktop-content tablet-content">Schickt uns die richtige L&ouml;sung per E-Mail und dem Betreff &raquo;Tyringham Park&laquo; bis zum 13.04.2014 an facebook@luebbe.de. Bitte gebt euren Namen und eure Postadresse an.</p>

			<p class="phone-content">Schickt uns die richtige L&ouml;sung per E-Mail und dem Betreff &raquo;Tyringham Park&laquo; bis zum 13.04.2014 an gewinnspiel@luebbe.de. Bitte gebt euren Namen und eure Postadresse an.</p>
			
			<ul class="navMenu bottomNav">
				<li class="mitmachen six columns"><a href="mailFormPage.php">Mitmachen</a></li>
				<li class="teilen six columns desktop-content"><a href="https://www.facebook.com/sharer/sharer.php?u=https://f-bilandia.de/luebbe/tyringham/weiche.php" target="_blank">Teilen</a></li>
				<li class="backToFB six columns tablet-content phone-content"><a href="http://www.facebook.com/BasteiLuebbe">Zur&uuml;ck zu Facebook</a></li>
			</ul>
		</div>
		<?php include "teilnahmebox.php"; ?>
		<script type="text/javascript">
			window.onload = function() {
				FB.Canvas.setAutoGrow();
			}
		</script>
	</div><!-- container -->
	<?php include "impressum.php"; ?>
<!-- End Document
================================================== -->
</body>
</html>
