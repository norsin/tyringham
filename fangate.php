<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<?php include "head.php" ?>
<body> 
<?php
	//Get PHP SDK
	require_once 'facebook.php';
	// Create our Application instance.
	$facebook = new Facebook( array('appId' => '251639345009802',
	'secret' => '58081030d16925c1d71e6f0819b42077', 'cookie' => true, ));
	$signed_request = $facebook -> getSignedRequest();
	$like_status = $signed_request["page"]["liked"];
	if ($like_status == "1") {
	//If the page is liked then display full app.

        header("location: index.php");

	} else { ?>

        <div id="fb-root"></div>
        <script type="text/javascript">
            window.fbAsyncInit = function() {
                //Your app details here
                FB.init({appId: '251639345009802', status: true, cookie: true, xfbml: true});
                //Resize the iframe when needed
                FB.Canvas.setAutoResize();
            };
    
            //Load the SDK asynchronously
            (function() {
                var e = document.createElement('script'); e.async = true;
                e.src = document.location.protocol +
                  '//connect.facebook.net/en_US/all.js';
                document.getElementById('fb-root').appendChild(e);
            }());
        </script>

        <!-- Fangate-Bild bitte einsetzen -->
        <div class="container fangate">
        </div>
	<script type="text/javascript">
		window.onload = function() {
			FB.Canvas.setAutoGrow();
		}
	</script>
<?php } ?>

<!-- End Document
================================================== -->
</body>
</html>
