<div class="fourCol claimHeader">
    <img class="bookClaim" src="images/book_claim.png" />
    <img class="bookCoverSmall" src="images/buchcover_small.png" />
</div>

<?php
    $resultCharacters = array(
        "profile-1" => array(
            "name" => "Lukas Salfeld – T&auml;ter?",
            "text" => "Dein Verhalten gleicht dem von Lukas Salfeld, der Hauptfigur  in »Das Falsche in mir« von Christa Bernuth. Bei ihm will sich der Schleier der Erinnerung einfach nicht l&uuml;ften. Bis auf wenige Erinnerungsfetzen aus der letzten Nacht hat er einen kompletten Filmriss. Das get&ouml;tete M&auml;dchen entspricht haargenau seinem Typ und er hofft, dass niemand sein dunkles Geheimnis entdeckt. Aber kann er auch der gesuchte M&ouml;rder sein? Finde es heraus ... im neuen, packenden Thriller von Christa Bernuth!"
        ),
        "profile-2" => array(
            "name" => "Silvia Johansson – Opfer",
            "text" => "Du bist ein sehr offener und kommunikationsfreudiger Typ. Im Club kommst du immer gleich mit vielen Leuten ins Gespr&auml;ch und bist auch sonst sehr gut vernetzt. So verh&auml;lt sich auch die Figur Silvia Johansson in Christa Bernuths Thriller »Das Falsche in mir«. Ihre Erinnerungen an die letzte Nacht im Club kommen zwar nur sp&auml;rlich wieder, aber der Abend ist von ihren Freunden gut dokumentiert und wird auf Facebook eifrig geteilt. Silvia hat an diesem Abend garantiert keinen Mord begangen, w&auml;re allerdings ein leichtes Opfer. Diesmal ist sie noch unbeschadet nach Hause gekommen. Aber ist sie auch beim n&auml;chsten Mal noch sicher? Finde es heraus ... im neuen, packenden Thriller von Christa Bernuth!"
        ),
        "profile-3" => array(
            "name" => "Sina Rastegar – Polizistin",
            "text" => "Du bist sehr perfektionistisch, doch nach der Arbeit gibst du gerne mal die Kontrolle ab und bist einfach du selbst. So ist es auch bei Sina Rastegar, der Polizistin in Christa Bernuths neuem Thriller »Das Falsche in mir«. Bei ihrem letzten Besuch im Club hat sie mal wieder ihre Grenzen ausgetestet und sich exzessiv am&uuml;siert. Trotzdem konzentriert sie sich am n&auml;chsten Morgen wieder voll auf ihren aktuellen Fall auf dem Revier und versucht, sich an Details des Abends zu erinnern. Vielleicht hat sie doch wichtige Hinweise im Club bemerkt? Finde es heraus ... im neuen, packenden Thriller von Christa Bernuth!"
        )
    )
?>
<div class="quizResult fourCol centerText">
<h2 class="heading"><?php echo $resultCharacters[$_SESSION['gameResult']]['name'] ?></h2>
<p class="fullText"><?php echo $resultCharacters[$_SESSION['gameResult']]['text'] ?></p>
<form class="appNavigator" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <a href="http://www.facebook.com/sharer/sharer.php?s=100&p[url]=http://f-bilandia.de/dtv/dasfalsche/weiche.php&p[images][0]=http://f-bilandia.de/dtv/dasfalsche/images/share.jpg&p[title]=Das%20Falsche%20in%20mir&p[summary]=Beklemmend%20und%20gnadenlos.%20Nimm%20an%20unserer%20Buchverlosung%20teil%20und%20gewinne%20ein%20Exemplar%20oder%20einen%20Download%20von%20Christa%20Bernuths%20packendem%20Thriller%20%E2%80%9EDas%20Falsche%20in%20mir%E2%80%9C!" class="button teilen" target="_blank">TEILEN</a>
    <button name="currentPage" value="finalpage" class="button gewinnspiel">ZUM GEWINNSPIEL</button>
</form>
<?php session_destroy() ?>
</div>