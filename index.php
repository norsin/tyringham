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
        <meta name="description" content="Beklemmend und gnadenlos. Nimm an unserer Buchverlosung teil und gewinne ein Exemplar oder einen Download von Christa Bernuths packendem Thriller „Das Falsche in mir“!/>
        <link rel="image_src" href="">
        <meta property="og:image" content="http://f-bilandia.de/dtv/dasfalsche/images/share.jpg"/>
        <meta property="og:image:secure_url" content="https://f-bilandia.de/dtv/dasfalsche/images/share.jpg">
        <meta property="og:image:type" content="image/jpg">
        <meta property="og:image:width" content="200">
        <meta property="og:image:height" content="200">
        <meta property="og:title" content="Das Falsche in mir"/>
        <meta property="og:description" content="Beklemmend und gnadenlos. Nimm an unserer Buchverlosung teil und gewinne ein Exemplar oder einen Download von Christa Bernuths packendem Thriller „Das Falsche in mir“!" />
        <meta property="og:url" content="http://f-bilandia.de/dtv/dasfalsche/index.php"/>
        <link rel="stylesheet" href="css/frameset.css">
        <link rel="stylesheet" href="css/quiz.css">
        <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
        <script type="text/javascript" src="js/quiz.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </head>
    <body class="<?php echo $bodyClass ?>">
        <div class="wrapper">
            <div class="header fourCol">
                <h1>Das <span class="titleMainBlock">Falsche</span> in mir</h1>
            </div>
            <div class="content fourCol">
                <?php if(isset($_SESSION['currentPage'])) {
                    include $_SESSION['currentPage'] . ".php";
                } else {
                    include "home.php";
                }?>
            </div>
        </div>
        <p class="impressum">Veranstalter des Gewinnspiels ist allein der Deutsche Taschenbuch Verlag. Das Gewinnspiel steht in keiner Verbindung zu Facebook und wird in keiner Weise von Facebook gesponsert, unterstützt oder organisiert. – <a href="http://www.dtv.de/impressum_303.html" target="_blank">Impressum</a></p>
	    <div class="box" id="teilnahmebox">
             <p><div class="close" id="close2">Fenster schließen</div></p>
            
                    <h4 class="heading">Teilnahme- und Durchführungsbedingungen</h4>

                    Die Teilnahme an Gewinnspielen und deren Durchführung richtet sich nach den folgenden
                    Bestimmungen.

                    <h4 class="heading">§ 1 Gewinnspiel</h4>
                    <p>(1) Das Gewinnspiel wird von der Deutscher Taschenbuch Verlag GmbH & Co. KG (im
                    Folgenden „dtv“ genannt) durchgeführt.</p>

                    <p>(2) Die Teilnahme ist kostenlos und unabhängig von einem Warenerwerb. Mit der
                    Teilnahme am Wettbewerb stimmt der Teilnehmer diesen Teilnahmebedingungen zu.</p>


                    <h4 class="heading">§ 2 Teilnahme</h4>
                    <p>(1) Teilnahmeberechtigt sind alle Personen mit Wohnsitz in Deutschland, Österreich oder der Schweiz, mit Ausnahme der in § 3 genannten Personen. Teilnehmer unter 18 Jahren
                    benötigen die Zustimmung ihres gesetzlichen Vertreters.</p>

                    <p>(2) Eine Person nimmt am Gewinnspiel teil, indem sie die innerhalb des Gewinnspiels genannten Bedingungen erfüllt. Der Teilnehmer ist für die Richtigkeit seiner Daten selbst verantwortlich.</p>

                    <p>(3) Zur Teilnahme am Gewinnspiel ist unbedingt erforderlich, dass sämtliche Personenangaben der Wahrheit entsprechen. Andernfalls kann ein Ausschluss gemäß § 3 (4) erfolgen.</p>

                    <p>(4) Alle Teilnehmer erklären sich damit einverstanden, dass Sie im Gewinnfall mit gekürztem Namen genannt werden (bei Kindern: nur Vorname) und ggf. mit ihrer Einsendung veröffentlicht werden dürfen.</p>

                    <p>(5) dtv behält sich das Recht vor, Beiträge nicht zu veröffentlichen, die den gängigen Bestimmungen zuwiderlaufen, anstößig sind, gegen die guten Sitten verstoßen oder in irgendeiner Art jugendgefährdend sind.</p>

                    <p>(6) Der Teilnehmer erklärt sich damit einverstanden, dass die im Rahmen der Gewinnspiel-Teilnahme erhobenen personenbezogenen Daten zum Zwecke der Kundenbetreuung, der Marktbeobachtung, der Optimierung des Vertriebssystems, der Werbung und des Marketings an dtv zur dortigen Datenverarbeitung und Datennutzung übermittelt werden. Ihre persönlichen Daten werden zu oben genannten Zwecken keinem Dritten außerhalb des dtv zur Verfügung gestellt. Diese Einwilligung kann jederzeit gegenüber dtv widerrufen werden (gewinnspiel@dtv.de).
                    Falls Sie nicht damit einverstanden sind, dass Ihre bei der Gewinnspiel-Teilnahme erhobenen personenbezogenen Daten für oben genannte künftige Zwecke genutzt
                    werden, erfolgt die Speicherung nach Ihrer Mitteilung über die E-mail-Adresse gewinnspiel@dtv.de oder durch Ankreuzen des entsprechenden Feldes nur zu Zwecken
                    der Gewinnbekanntgabe und Preisversendung. Die Vorschriften des Bundesdatenschutzgesetzes (BDSG) und des  Telemediengesetzes (TMG) werden dabei streng eingehalten. Wir geben Ihre personenbezogenen Daten hierbei nicht an Dritte weiter. Ausgenommen hiervon sind Dienstleistungspartner, die von uns für die
                    Preisversendung eingeschaltet werden. In diesen Fällen erfolgt die Übermittlung ausschließlich in dem hierfür erforderlichen Umfang und nur im Rahmen einer Auftragsdatenverarbeitung.</p>


                    <h4 class="heading">§ 3 Ausschluss vom Gewinnspiel</h4>
                    <p>(1) Mitarbeiter des dtv, der beteiligten Kooperationspartner sowie jeweils deren nächste
                    Angehörige 1. und 2. Grades sind von der Teilnahme ausgeschlossen.</p>

                    <p>(2) Bei einem Verstoß gegen diese Teilnahmebedingungen behält sich dtv das Recht vor, Personen vom Gewinnspiel auszuschließen.</p>

                    <p>(3) Ausgeschlossen werden auch Personen, die sich unerlaubter Hilfsmittel bedienen oder sich anderweitig durch Manipulation Vorteile verschaffen. Gegebenenfalls können in diesen Fällen auch nachträglich Gewinne aberkannt und zurückgefordert werden.</p>
                    <p>(4) Wer unwahre Personenangaben macht, wird vom Gewinnspiel ausgeschlossen. (5) Jeder Teilnehmer kann nur einmal am gleichen Gewinnspiel teilnehmen. Bei mehrfacher Teilnahme kann der Teilnehmer vom Gewinnspiel ausgeschlossen werden.</p>

                    <p>(6) Die Teilnahme über die Einschaltung Dritter, z.B. Gewinnspielagenturen, ist nicht möglich.</p>


                    <h4 class="heading">§ 4 Durchführung und Abwicklung</h4>

                    <p>(1) dtv behält sich das Recht vor, das Gewinnspiel ganz oder zeitweise auszusetzen, wenn Schwierigkeiten auftreten, die die Integrität des Gewinnspiels gefährden.</p>

                    <p>(2) Die Gewinner werden per E-Mail benachrichtigt. Meldet sich der Gewinner nicht innerhalb von vier Wochen nach dem Absenden der Benachrichtigung, so verfällt der Anspruch auf den Gewinn und es wird per Los ein neuer Gewinner ermittelt.
                    Der Anspruch auf den Gewinn verfällt ebenfalls, wenn die Übermittlung des Gewinns nicht innerhalb von 6 Monaten nach der ersten Benachrichtigung über den Gewinn aus Gründen, die in der Person des Gewinners liegen, erfolgen kann.</p>

                    <p>(3) Der im Rahmen des Gewinnspiels als Preis präsentierte Gegenstand ist nicht zwingend mit dem gewonnenen Gegenstand identisch. Vielmehr können Abweichungen hinsichtlich Modell, Farbe o. ä. bestehen. Der Preissponsor kann einen dem als Preis präsentierten Gegenstand gleichwertigen Gegenstand mittlerer Art und Güte auswählen.</p>

                    <p>(4) Die Sachpreise werden vom Preissponsor oder einem von ihm beauftragten Dritten per Spedition, Paketdienst oder Post an die vom Gewinner anzugebende Postadresse versendet.
                    Die Lieferung erfolgt innerhalb Deutschlands frei Haus. Darüber hinaus anfallende Transportkosten und Zölle hat der Gewinner zu tragen. Leistungsort bleibt trotz Übernahme der Versendungskosten der Sitz des Preissponsors.
                    Ebenfalls erhält der Gewinner einen gleichwertigen Ersatz, wenn der ursprüngliche Gewinn in der präsentierten Ausführung nicht mehr lieferbar ist (Modellwechsel, Saisonware etc.).</p>

                    <p>(5) Eine Barauszahlung der Gewinne oder eines etwaigen Gewinnersatzes ist in keinem
                    Falle möglich.</p>

                    <p>(6) Der Anspruch auf den Gewinn oder Gewinnersatz kann nicht abgetreten werden.</p>

                    <p>(7) Beschwerden, die sich auf die Durchführung des Gewinnspiels beziehen, sind unter Angabe des Gewinnspiels innerhalb von 14 Tagen nach Bekanntwerden des Grundes schriftlich an dtv zu richten. Fernmündlich mitgeteilte oder verspätete Beschwerden werden nicht bearbeitet.</p>

                    <p>(8) dtv behält sich das Recht vor, die Teilnahmebedingungen jederzeit und unangekündigt ändern zu können.</p>

                    <p>(9) Der Rechtsweg ist ausgeschlossen.</p>
                    <p>(10) Es ist ausschließlich das Recht der Bundesrepublik Deutschland anwendbar. (11) Sollten einzelne dieser Bestimmungen ungültig sein oder werden, bleibt die Gültigkeit der übrigen Nutzungsbedingungen hiervon unberührt.</p>
                 <p><div class="close" id="close2">Fenster schließen</div></p>
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
