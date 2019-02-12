<?php
date_default_timezone_set("Europe/Paris");
include "./includes/header.php";

if (isset($_GET['page'])) {
    $page = $_GET['page'];
        }
else{
    $page = "accueil";
}
//$page = isset($_GET['page']) ? $_GET['page'] : "accueil";

//var_dump($page);

$path = "./includes/";
$contenu = glob($path . "*.inc.php");
$page = $path . $page . ".inc.php";

if (in_array($page, $contenu)){
    include $page;
}
else {
    include "./includes/accueil.inc.php";
}
//var_dump($contenu);


include "./includes/footer.php";

