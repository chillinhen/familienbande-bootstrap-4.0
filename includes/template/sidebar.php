<!-- Simple Search two Tabs -->
<!-- cat-blue -->
<h5 id="btnSuche" class="collapsed d-block d-sm-block d-lg-none cat-blue">
    <a data-toggle="collapse" href="#collapseSuche" data-target="#collapseSuche" aria-expanded="false" aria-controls="collapseSuche">
        Vornamen- und Hebammensuche
    </a>
</h5>
<div id="collapseSuche" class="collapse mb-sm-5" aria-labelledby="btnSuche" data-parent="#infoblock">
    <?php include('includes/modules/simple-search-two-tabs.php'); ?>
</div>

<h5 id="btnListe" class="collapsed d-block d-sm-block d-lg-none cat-yellow">
    <a data-toggle="collapse" href="#collapseListe" aria-expanded="false" aria-controls="collapseListe">
        Die beliebtesten Artikel
    </a>
</h5>
<div id="collapseListe" class="collapse mb-sm-5" aria-labelledby="btnListe" data-parent="#infoblock">
    <?php include('includes/cards/card-list-featured.php'); ?>
</div>

<h5 id="btnText-01" class="collapsed d-block d-sm-block d-lg-none cat-pink">
    <a data-toggle="collapse" href="#collapseText-01" aria-expanded="false" aria-controls="collapseText-01">
    Bsp.: Witz der Stunde
    </a>
</h5>
<div id="collapseText-01" class="collapse cat-pink mb-sm-5" aria-labelledby="btnText-01" data-parent="#infoblock">
    <?php include('includes/cards/card-text.php'); ?>
</div>
<!-- Placeholder small ad -->
<div class="ads d-none d-lg-block"><img class="img-fluid" src="img/small-ad-dummy.jpg" alt=""/></div>
<!-- Placeholder small ad -->
<h5 id="btnImg-01" class="collapsed d-block d-sm-block d-lg-none cat-green">
    <a data-toggle="collapse" href="#collapseImg-01" aria-expanded="false" aria-controls="collapseImg-01">
    Bsp.: Tageshoroskop
    </a>
</h5>
<div id="collapseImg-01" class="collapse cat-green" aria-labelledby="btnImg-01" data-parent="#infoblock">
    <?php include('includes/cards/card-with-thumbnail.php'); ?>
</div>

<h5 id="btnQuote" class="collapsed d-block d-sm-block d-lg-none cat-blue">
    <a data-toggle="collapse" href="#collapseQuote" aria-expanded="false" aria-controls="collapseQuote">
    Bsp.: Spruch des Tages
    </a>
</h5>
<div id="collapseQuote" class="collapse cat-green" aria-labelledby="btnQuote" data-parent="#infoblock">
    <?php include('includes/cards/card-quote.php'); ?>
</div>
