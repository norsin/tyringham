<div class="fourCol claimHeader">
    <img class="bookClaim" src="images/book_claim.png" />
    <img class="bookCoverSmall" src="images/buchcover_small.png" />
</div>

<div class="quizResult fourCol centerText">
<h2 class="heading">Mitmachen und gewinnen</h2>
<p class="fullText">Willst du noch mehr &uuml;ber Lukas Salfeld, Silvia Johansson, Sina Rastegar und Co. erfahren? Dann nimm an unserer Verlosung teil und gewinne eines von 25 B&uuml;chern oder 25 eBooks von »Das Falsche in mir« von Christa Bernuth. Schick einfach bis zum 28.02.2014 eine Mail mit dem Betreff »Das Falsche in mir« an <a href="mailto:gewinnspiel@dtv.de?Subject=Das%20Falsche%20in%20mir" target="_blank">gewinnspiel@dtv.de</a>.</p>
<form class="appNavigator" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <a href="mailto:gewinnspiel@dtv.de?Subject=Das%20Falsche%20in%20mir" class="button teilnehmen" target="_blank">Teilnehmen</a>
    <input type="hidden" name="backTo" value="finalpage" />
    <button name="currentPage" value="book" class="button bookPage">Mehr zum Buch</button>
</form>
<?php session_destroy() ?>
</div>