<?php

require_once('../bdd/connexion.php');


if (isset($_POST['name']) && !empty($_POST['name'])) {
    $request = $database->prepare("SELECT * FROM user WHERE pseudo =:pseudo");
    $request->execute([':pseudo' => $_POST['name']]);
    $resultat = $request->fetch(PDO::FETCH_ASSOC);
    if ($resultat === false) {
        header('Location: ../page2.php');
    }else{
        header('Location: ../page3.php');
    }
}
