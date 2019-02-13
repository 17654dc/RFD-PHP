
<?php
date_default_timezone_set("Europe/Paris");
include_once "./functions/displayTitle.php";
include_once "./includes/html.php";
include_once "./includes/header.php";
include_once "./functions/debug.php";

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
    include_once $page;
}

else {
    include_once "./includes/accueil.inc.php";
}


//var_dump($contenu);


include_once "./includes/footer.php";
