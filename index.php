<?php

// action
if ( isset($_GET['page']) ) {
   $codeAction = $_GET['page'];
} 
else {
    $codeAction = "accueil";
}

/*
// switch action 
switch($codeAction) {
    case "accueil" :
        
}
*/

$squelette = "ui/pages/squelette.html";
$title = $codeAction;


ob_start();
  require_once($squelette);
  $html = ob_get_contents();
ob_end_clean();
echo $html;


?>


