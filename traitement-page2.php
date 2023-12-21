<?php
require_once('./bdd/connextion.php');



if (isset($_POST['name']) && !empty($_POST['name'])) {


    $request = $database->prepare("SELECT * FROM `user` WHERE pseudo =:pseudo");
    $request->execute([
        ':pseudo' => $_POST['name']
    ]);
    // $pseudo = $requete->fetchall(PDO::FETCH_ASSOC);

    if ($_POST['name'] === $pseudo) { 
    echo " euhh ma tata a une couille";
    }

    if ($pseudo) {

        $request = $database->prepare("INSERT INTO `user` (pseudo) VALUES (:pseudo)");
        $request->execute([
            'pseudo' => $_POST["name"]

        ]);
    }


} else {

    echo 'nous sommes en guerre';

}

