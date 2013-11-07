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

    case 'livre':

        // nom famille
        $name = isset($_GET['name']) ? $_GET['name'] : null;
        // chapitre
        $chapitre = isset($_GET['chapitre']) ? $_GET['chapitre'] : "histoire";

        $file = "informations/livre_famille/".$name."/".$chapitre.".frg.html";

        if(file_exists($file))
          $content = file_get_contents($file);
        else
         header('Location: index.php?page=erreur');

    break;

    case "erreur" :
        $content = file_get_contents("ui/fragments/error.frg.html");
    break; 
    
    default:
       header('Location: index.php?page=erreur');
    break;
}



if($codeAction == "livre")
  $squelette = "ui/pages/squelette_book.html";
else
  $squelette = "ui/pages/squelette_home.html";


$header = file_get_contents("ui/fragments/header.frg.html");
$title = ucfirst($codeAction)." - Games of Thrones";

ob_start();
  require_once($squelette);
  $html = ob_get_contents();
ob_end_clean();
echo $html;


?>


