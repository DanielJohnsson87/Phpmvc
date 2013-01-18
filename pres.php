<?php

$html = <<<EOD
<div class="content-head-wrapper">
</div> <!-- content-head-Wrapper -->


<div class="main-content">


<article>
<h1 class="article-header">Om Daniel Johnsson</h1>
<p>
 Mitt namn är Daniel Johnsson. Jag är 25 år och kommer ifrån Båstad. Jag jobbar på ett äventyrs och aktivitetsbolag. Arbetet innebär att jag planerar och genomför aktiviteter av olika slag för grupper på allting ifrån 4 personer till 1000 personer. Ska även bygga upp vår nya hemsida så det är därför jag läser det här kurspaketet.

Har varit intresserad av webbdesign sedan jag var liten. Började koda egna hemsidor när jag var 12år och har hållt på från och till sedan dess. Känner att jag hanterar HTML och CSS ganska bra men  man kan alltid bli bättre. Anledningen till att jag sökte kurspaketet var för att lära mig om 

PHP, MySQL och Javascript. 

När jag inte jobbar så gillar jag att aktivera mig på olika sätt. På vintern blir det så mycket Snowboard och gym som möjligt och på sommaren så gillar jag att Kitesurfa, Spela Padel, Stand up Padel, Klättring, Mountain Bike, Segling och mycket mer. Allting som man kan få en kick av!
</p>
<img src="img/daniel2.png"

</article>
</div> <!-- main-content -->
EOD;


// --------------------------------------------------------------
//
// Create and print out the html-page
//

require_once('incl/common.php');
$charset  = "UTF-8";
$language = "sv";
$title    = "PhpMvc, Daniel Johnsson, BTH. Index.php";
$pageId   = "Presentation";


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