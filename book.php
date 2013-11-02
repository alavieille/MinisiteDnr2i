<?php

$content = "";

// nom famille
$name = isset($_GET['name']) ? $_GET['name'] : "error";

// page
$page = isset($_GET['page']) ? $_GET['page'] : "0";



// switch action 
switch($name) {

}


$squelette = "ui/pages/squelette_book.html";
$title = ucfirst($name)." - Games of Thrones";


ob_start();
  require_once($squelette);
  $html = ob_get_contents();
ob_end_clean();
echo $html;


?>


