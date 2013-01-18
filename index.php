<?php

$html = <<<EOD
<div class="content-head-wrapper index-content-wrapper">
<div class="content-head">

<h2>Daniel Johnsson<br>PHPMVC</h2>
<h3> Jag studerar vid BTH och läser just nu en kurs i avancerad PHP-programmering 
och ramverkstänkande baserat på Model View Controller (MVC).<a href="report.php"> Mina redovisningar <b>&rarr;</b></a></h3>



</div> <!-- Content-head -->
</div> <!-- content--head-Wrapper -->
EOD;


// --------------------------------------------------------------
//
// Create and print out the html-page
//

require_once('incl/common.php');
$charset	= "UTF-8";
$language	= "sv";
$title		= "PhpMvc, Daniel Johnsson, BTH. Index.php";
$pageId		= "Index";


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
