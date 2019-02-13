<h1>Inscription</h1>
<?php

if (isset($_POST['maurice'])) {

//if (isset($_POST['nom'])){
//    $nom = $_POST['nom'];
//}
//else{
//    $nom = '';
//}

    $nom = isset($_POST['nom']) ? $_POST['nom'] : "";
    $mail = isset($_POST['mail']) ? $_POST['mail'] : "";
    $mdp = isset($_POST['mdp']) ? $_POST['mdp'] : "";

    $erreurs = array();

    if (!(mb_strlen($nom) >= 2 && ctype_alpha($nom)))
        array_push($erreurs,"Veuillez saisir un nom correct.");
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL))
        array_push($erreurs,"Veuillez saisir une adresse mail valilde.");
    if (mb_strlen($mdp) < 6)
        array_push($erreurs,"Votre mot de passe doit détenir au moins 6 caractères.");

    if (count($erreurs) > 0) {
        $message = "<ul>";
        $i = 0;

        while ($i < count($erreurs)) {
            $message .= "<li>" . $erreurs[$i] . "</li>";
            $i++;
        }

        $message .= "</ul>";
        echo $message;
        include "frmInscription.php";
    }


} else {

    echo "Insertion en BDD";
    include "frmInscription.php";
}
