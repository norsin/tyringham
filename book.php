<div class="bookDetails">
    <h2 class="heading fourCol">Beklemmend und Gnadenlos<br>Eine Bluttat. Eine Begierde. Eine Nacht.</h2>
    <div class="bookCover coverColumn"><img src="images/buchcover_bookPage.png" alt="book cover" class="">
        <p class="textDetails" style="font-weight: normal;font-size: 0.9em;line-height: 1.2em;">ISBN: 978-3-423-24992-8<br> € 14,90[D] | € 15,40 [A] | CHF 21,90</p>
        <a href="https://itunes.apple.com/de/book/das-falsche-in-mir/id780620810?mt=11" target="_blank"><img src="images/ibook.png" style="width: 28%;height: auto;" alt="iBooks" class="ibook"></a>
    </div>
    <div class="text twoCol textColumn">
        <p>Lukas Salfeld hat als Jugendlicher seine Freundin ermordet und daf&uuml;r im Gef&auml;ngnis gesessen. Nach seiner Entlassung f&uuml;hrt er jahrzehntelang ein normales Leben und glaubt, seine gef&auml;hrlichen Triebe im Griff zu haben. Bis pl&ouml;tzlich wieder eine junge Frau nach dem gleichen grausamen Muster get&ouml;tet wird und er sofort unter Verdacht ger&auml;t. Besessen macht Salfeld Jagd auf den T&auml;ter. Doch was, wenn er es selbst ist? Denn er hat keinerlei Erinnerungen an die Mordnacht...</p>
        <p class="highlight">Mehr Informationen zum Buch und zur Autorin findest du unter <a href="http://www.christabernuth.de" target="_blank">www.christabernuth.de</a></p>
    </div>
    <form class="appNavigator" method="post" action="index.php">
        <?php if(isset($_POST['backTo'])) {
            $backTo = $_POST['backTo'];
        } else {
            $backTo = "home";
        }
        ?>
        <button class="button backToHome" name="currentPage" value="<?php echo $backTo?>">Zur&uuml;ck</button>
        <a href="http://www.youtube.com/watch?v=J2472oo3wOU" target="_blank" class="button trailer">Zum Trailer</a>
        <a href="http://www.dtv.de/warenkorb/add/24992" target="_blank" class="button kaufen">Kaufen</a>
        <a href="http://www.book2look.de/book/9783423249928" target="_blank" class="button leseproben">Leseproben</a>
    </form>
</div>