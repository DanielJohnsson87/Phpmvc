<?php

$html = <<<EOD
<div class="content-head-wrapper">
</div> <!-- content-head-Wrapper -->


<div class="main-content">

<hgroup>
<h1 class="big-h1 center-text">Redovisning</h1>
<h4 class="center-text"> Här redovisar jag varje kursmoment jag genomfört under kursen PHPMVC.</h4>
</hgroup>

<article>
<header>
<h1 class="article-header">Kmom 01</h1>
</header>
<p>
<span class="big-p">R</span>oligt kursmoment, kul att sitta med lite css och leka lite. Känns som att de var längesedan nu.
Jag har kikat på Boilerplate tidigare och läst på lite om det, så det känns inte helt nytt. 
Jag gillar tanken bakom Boilerplate, att man samlar på sig best-practices och sammanställer de till 
ett projekt. Det sparar ofantligt mycket tid efter som att man i stort sett kan sätta igång direkt 
utan att behöva koda en ny grund för varje projekt. Sen är det ju en massa extra fördelar för sånna som mig
som inte har stenkoll på allting. Jag behöver inte kunna vad som häner i .htaccess filen, hur bilder cachas
eller hur man arbetar runt Ie's alla irriterande svagheter, det har någon annan redan tänkt på. Sen kan man ju självklart vända på det också och 
hävda att det är negativt också. Man sätter sig inte in i sakerna lika mycket i detalj som man hade gjort annars
ifall man var tvungen att göra arbetet själv. Men över lag så tycker jag ändå att det positiva med projekt som
boilerplate överväger de lilla negativa. 
<br><br>
<span class="big-p">J</span>ag valde att utgå ifrån templeten vi hade i oophp kursen och modifierade den lite. Jag ville bygga en 
snygg, enkel och funktionell sida som jag ska kunna göra responsiv. Och jag tycker att jag lyckades 
ganska bra i alla fall. Jag har inte gett mig på att göra sidan responsiv ännu, men det kommer.
Läste tyvärr nu när jag var klar om mobilefirst sättet att bygga upp en hemsida och det var ju synd att 
man inte läste det innan man började. Verkar ju vara ett väldigt vettigt sätta att tänka på. Istället för att göra som jag 
alltid har gjort och kodat hela sidan och sedan plockat bort innehåll och ändrat bilder med media queries. Då tvingas mobiltelefoner och 
liknande ändå att ladda en massa tung information som de ändå inte kan ta del av. Har aldrig tänkt på det så förr. 
Får testa att mobilefirst approchen i nästa projekt. 

<br><br>
<span class="big-p">J</span>ag kan inte säga att jag stötte på särskilt många problem under kursmomentet, lite strul med css här och 
där men det är ju som vanligt. Läste på lite pseudo element som :after, :before, :first-child osv. Har inte haft så stor koll på
dem tidigare. Känns väldigt användbart i vissa fall. 

De första kapitelna i den nya kursliteraturen kändes enkla att förstå och det börjar kännas som att man börjar 
få lite koll på det här med php. Känns skönt! 

Jag har precis börjat testa Sublime Text 2 istället för jEdit & Aptana Studios. Får se ifall jag fortsätter 
använda det eller inte. Men än så länge så känns det bra. Lite mycket att sätta sig in i bara med alla kommandon och plugins. 
<br><br>
<b>Så just nu ser min utvecklingsmiljö ut såhär.</b>
<br><br>
<b>Operativsystem:</b> Osx 10.6.8 <br>
<b>Texteditor:</b> Sublime Text 2 / jEdit <br>
<b>Ftp:</b> FileZilla <br>
<b>Lokalt:</b> Mamp <br>
<b>Webbläsare:</b> Firefox, Chrome, Safari 
<b>Bildredigering:</b>Gimp & Seashore 

</p>
</article>
</div> <!-- main-content -->
EOD;


// --------------------------------------------------------------
//
// Create and print out the html-page
//

require_once('incl/common.php');
$charset	= "UTF-8";
$language	= "sv";
$title		= "PhpMvc, Daniel Johnsson, BTH. Index.php";
$pageId		= "Report";


$html = <<< EOD
<!DOCTYPE html>
<html lang='{$language}'>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="{$charset}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>{$title}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
  <body  id='$pageId'>
     <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
  {$header}
  {$html}
  {$footer}
  
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.3.min.js"><\/script>')</script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>

EOD;

echo $html;


?>
