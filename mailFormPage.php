<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<?php include "head.php" ?>
<body class="mailform-page">



	<!-- Primary Page Layout
	================================================== -->

	<!-- Delete everything in this .container and get started on your own site! -->

	<div class="container">
		<nav class="mainNav fourteen columns offset-by-one desktop-content tablet-content">
			<ul class="navMenu">
				<li class="seven columns gewinnspielBtn"><a href="index.php">Gewinnspiel</a></li>
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
			<?php include "mailForm.php"; ?>
		</div>
		<?php include "teilnahmebox.php"; ?>
	</div><!-- container -->
	<?php include "impressum.php"; ?>
<!-- End Document
================================================== -->
</body>
</html>
