<!DOCTYPE html>
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

<?php

$useragent = $_SERVER['HTTP_USER_AGENT'];
if (preg_match("/(alcatel|amoi|android|avantgo|blackberry|benq|cell|cricket|docomo|elaine
|htc|iemobile|iphone|ipad|ipaq|ipod|j2me|java|midp|mini|mmp|mobi|motorola|nec-|nokia|palm|
panasonic|philips|phone|playbook|sagem|sharp|sie-|silk|smartphone|sony|symbian|t-mobile|telus
|up\.browser|up\.link|vodafone|wap|webos|wireless|xda|xoom|zte)/i",$useragent))

{
header( 'Location: https://f-bilandia.de/luebbe/tyringham/index.php' );
} else {
header( 'Location: https://f-bilandia.de/luebbe/tyringham/index_dispatcher.php' );
}

?>
</html>