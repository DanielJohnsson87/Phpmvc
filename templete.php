<?php

$html = <<<EOD

<div> <h1> Jag är en rubrik </h1>
<p>Jag är en paragraf</p>
</div>
EOD;


// --------------------------------------------------------------
//
// Create and print out the html-page
//

require_once('incl/common.php');
$charset	= "iso-8859-1";
$language	= "sv";
$title		= "Hänga gubbe";


$html = <<< EOD
<!doctype html>
<html lang='se'>
<head>
  <meta charset="{$charset}">
  <title>{$title}</title>
  
  
  
  </head>
  <body>
  {$header}
  {$html}
  {$footer}
  
  </body>
  
  </html>

EOD;

echo $html;


?>
