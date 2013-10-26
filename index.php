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
        $content = file_get_contents("informations/accueil.frg.html");
    break;
    
    case 'auteur':
        $content = file_get_contents("informations/auteur.frg.html");
      break;
    
    case "famille":
        $content = file_get_contents("informations/famille.frg.html");
      break;
    case "carte" :
        $content= file_get_contents("informations/map.frg.html");
    break;
        
}


$squelette = "ui/pages/squelette.html";$codeAction;
$header = file_get_contents("ui/fragments/header.frg.html");
$title = ucfirst($codeAction)." - Games of Thrones";


ob_start();
  require_once($squelette);
  $html = ob_get_contents();
ob_end_clean();
echo $html;


?>


