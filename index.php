<?php

$content = "";

// action
if ( isset($_GET['page']) ) {
   $codeAction = $_GET['page'];
} 
else {
    $codeAction = "accueil";
}


// switch action 
switch($codeAction) {
    case "accueil" :
        $content = file_get_contents("ui/fragments/map.frg.html");
    
    break;
        
}


$squelette = "ui/pages/squelette.html";$codeAction;
$header = file_get_contents("ui/fragments/header.frg.html");
$title = $codeAction;


ob_start();
  require_once($squelette);
  $html = ob_get_contents();
ob_end_clean();
echo $html;


?>


