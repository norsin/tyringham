<div class="bookDetails">
    <h2 class="heading fourCol">Die Frauen von Tyringham Park</h2>
    <div class="bookCover coverColumn"><img src="images/bookcover.png" alt="book cover" class="">
    </div>
    <div class="text twoCol textColumn">
        <p>Ganz im S&uuml;den Irlands befindet sich das pr&auml;chtige Anwesen von Lord und Lady Blackshaw. Tyringham Park ist ein Ort voller Wohlstand, Prunk und Privilegien. Erst ein verh&auml;ngnisvolles Ereignis im Jahr 1917 f&ouml;rdert das im Verborgenen brodelnde Chaos von Eifersucht, Intrigen und Berug zutage: Victoria, die j&uuml;ngste Tochter der Familie, verschwindet spurlos &ndash; und mit ihr der Frieden von Tyringham Park und seiner Bewohner ...</p>
        <p class="highlight">Mehr Informationen zum Buch und zur Autorin findest du unter <a href="http://www.christabernuth.de" target="_blank">www.christabernuth.de</a></p>
    </div>
    <form class="appNavigator" method="post" action="index.php">
        <?php if(isset($_POST['backTo'])) {
            $backTo = $_POST['backTo'];
        } else {
            $backTo = "home";
        }
        ?>
        <a href="http://www.youtube.com/watch?v=J2472oo3wOU" target="_blank" class="button hoerprobe"></a>
        <a href="http://www.dtv.de/warenkorb/add/24992" target="_blank" class="button hoerbuch"></a>
        <a href="http://www.book2look.de/book/9783423249928" target="_blank" class="button download"></a>
        <a href="http://www.youtube.com/watch?v=J2472oo3wOU" target="_blank" class="button leseprobe"></a>
        <a href="http://www.dtv.de/warenkorb/add/24992" target="_blank" class="button buch"></a>
        <a href="http://www.book2look.de/book/9783423249928" target="_blank" class="button ebook"></a>
    </form>
</div>