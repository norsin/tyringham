<?php session_start(); 
header('P3P: CP="NOI ADM DEV COM NAV OUR STP"');
if(isset($_REQUEST['currentPage'])) {
    $_SESSION['currentPage'] = $_REQUEST['currentPage'];
}

if(!isset($_SESSION['currentPage'])) {
    $_SESSION['currentPage'] = 'home';
    $bodyClass = "page-" . $_SESSION['currentPage'];
} else {
    $bodyClass = "page-" . $_SESSION['currentPage'];
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width">
        <title>Die Frauen von Tyringham Park</title>
        <meta name="description" content="Die Frauen von Tyringham Park – Jetzt Fan werden und die spannende Familiensaga gewinnen!"/>
        <link rel="image_src" href="">
        <meta property="og:image" content="http://f-bilandia.de/luebbe/tyringham/images/share.jpg"/>
        <meta property="og:image:secure_url" content="https://f-bilandia.de/luebbe/tyringham/images/share.jpg">
        <meta property="og:image:type" content="image/jpg">
        <meta property="og:image:width" content="200">
        <meta property="og:image:height" content="200">
        <meta property="og:title" content="Die Frauen von Tyringham Park"/>
        <meta property="og:description" content="Leidschaftlich und voller Intrigen: Nimm an unserem Gewinnspiel teil und sicher dir ein Buch oder Hörbuch von Rosemary McLoughlins packender Familiensaga „Die Frauen von Tyringham Park“!" />
        <meta property="og:url" content="http://f-bilandia.de/luebbe/tyringham/index.php"/>
        <link rel="stylesheet" href="css/frameset.css">
        <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </head>

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


    <body class="<?php echo $bodyClass ?>">
        <div class="wrapper">
            <div class="nav top">
                    <a href="home.php" class="nav_element left active_nav_gs"></a>
                    <a href="book.php" class="nav_element right"></a>
                </div>
            <div class="header fourCol">
                <h1>Die <span class="titleMainBlock">Frauen von</span> Tyringham Park</h1>
            </div>
            <div class="content fourCol">
                <?php if(isset($_SESSION['currentPage'])) {
                    include $_SESSION['currentPage'] . ".php";
                } else {
                    include "home.php";
                }?>
            </div>
        </div>
	    <div class="box" id="teilnahmebox">
             <p><div class="close" id="close2">Fenster schließen</div></p>
            
                        <p>
                            <u>
                                Voraussetzung für die Teilnahme am Gewinnspiel
                            </u>
                        <br /><br />
                            Voraussetzung für die Teilnahme am Gewinnspiel ist das Klicken auf den „Gefällt mir“-Button der Bastei Lübbe- oder Lübbe Audio-Facebook-Seite sowie eine E-Mail mit der richtigen Lösung an facebook@luebbe.de. Ausgeschlossen von der Teilnahme sind Mitarbeiter und Agenturen der Bastei Lübbe AG, sowie angeschlossener Unternehmen und deren Angehörige.
                        <br />
                            Die Teilnahme ist nur natürlichen Personen gestattet. Eine Sammelteilnahme (insbesondere unter Einbeziehung hierauf ausgerichteter Unternehmen) ist ausdrücklich ausgeschlossen. Teilnehmer müssen persönlich mitspielen und dürfen sich keinerlei technischer Hilfsmittel bedienen. Besteht der Verdacht, dass doch Hilfsprogramme o. ä. benutzt worden sind, behält sich der Verlag vor, die Mitspieler von der Teilnahme auszuschließen.</p>
                        <p>
                            <u>
                                Gewinne
                            </u>
                            <br /><br />
                            Wir verlosen:
                            <br />
                            Je 5 Exemplare des Buches und des Hörbuches von „Die Frauen von Tyringham Park“<br />
                        </p>
                        <p>
                            <u>
                                Ermittlung der Gewinner
                            </u>
                            <br /><br />
                            Die Preise werden unter allen Einsendungen verlost. Das Gewinnspiel beginnt am 12.03.2014 und endet am 12.04.2014. Die Gewinner werden nach Ablauf des Gewinnspiels per E-Mail benachrichtigt. Zum Abruf des Gewinns geben die Gewinner per E-Mail an facebook@luebbe.de ihren vollständigen Namen sowie ihre Adresse bekannt.
                        </p>
                        <p>
                            <u>
                                Datenschutz
                            </u>
                            <br /><br />
                            <u>
                                Nutzung von Daten durch Bastei Lübbe
                            </u>
                            <br /><br />
                            Die uns übermittelten Daten werden nur für das Gewinnspiel und zur Benachrichtigung der Gewinner verwendet. Die namentliche Veröffentlichung endet nach vollständiger Beendigung und Abwicklung des Gewinnspiels. Die gespeicherten Daten werden anschließend gelöscht, soweit ein Teilnehmer nicht seine Einwilligung zur weiteren Nutzung der Daten erteilt hat.
                        </p>
                        <p>
                            <u>
                                Nutzung von Daten durch Facebook
                            </u>
                            <br /><br />
                            Für unser Gewinnspiel nutzen wir die Plattform des sozialen Netzwerks facebook.com, das von der Facebook Ireland Ltd., Hanover Reach 5-7, Hanover Quay, Dublin 2 Irland, betrieben wird („Facebook“). Durch Ihre Teilnahme an diesem Gewinnspiel ist es nicht auszuschließen, dass Facebook Kenntnis über Ihre IP-Adresse erlangt. Alle weiteren Daten, die im Rahmen dieses Gewinnspiels erfasst werden, werden nicht an Facebook oder andere Dritte weitergegeben. Zweck und Umfang der Datenerhebung und die weitere Verarbeitung und Nutzung der Daten durch Facebook sowie ihre diesbezüglichen Rechte und Einstellungsmöglichkeiten zum Schutz Ihrer Privatsphäre entnehmen Sie bitte den Datenschutzhinweisen von Facebook: http://www.facebook.com/policy.php
                        </p>
                        <p>
                            <u>
                                Freistellung von Facebook
                            </u>
                            <br /><br />
                            Der Rechtsweg ist ausgeschlossen. Veranstalter des Gewinnspiels ist allein die Bastei Lübbe AG. Das Gewinnspiel steht in keiner Verbindung zu Facebook und wird in keiner Weise von Facebook gesponsert, unterstützt oder organisiert. Mit der Teilnahme am Gewinnspiel akzeptieren die Teilnehmer die vorstehenden Bedingungen.
                        </p>

                 <p><div class="close" id="close2">Fenster schließen</div></p>
         </div>
                         <div class="impressum">
                    <span style="margin-top: 10px;"> 
                        Veranstalter des Gewinnspiels ist allein die Bastei Lübbe AG. Das Gewinnspiel steht in keiner Verbindung zu Facebook und wird in keiner Weise von Facebook gesponsert, unterstützt oder organisiert. Das Gewinnspiel wird durch die bilandia GmbH ausgeführt.
                    </span>
                </div>
         <div id="teilnahme">Teilnahmebedingungen</div>

    <script type="text/javascript">
    $('#teilnahme').click(function() {
        $('#teilnahmebox').show('clip');
    });

    $('.close').click(function() {
        $('#teilnahmebox').hide('clip');
    });
    </script>
    </body>
</html>
