<?php

require_once('../bdd/connexion.php');

if (isset($_POST['name']) && !empty($_POST['name'])) {
    $request = $database->prepare("SELECT * FROM user WHERE pseudo =:pseudo");
    $request->execute([':pseudo' => $_POST['name']]);
    $resultat = $request->fetch(PDO::FETCH_ASSOC);
    


    if ($resultat === false) {
        echo "le pseudo n'éxiste pas dans la base de données";
        header("Location: ../page2.php");

    }else{ echo " le pseudo éxiste";
        header("Location: ../page3.php");
    }
}
