<?php
include_once('./partials/header-index.php');
// require_once('../database.connect.php');

// $pseudos = $request->fetchAll();
// var_dump($pseudos);

// $request = $database->query("SELECT * FROM message");

// $messages = $request->fetchAll();

if (isset($_POST['name']) && !empty($_POST['name'])) {
    $request = $database->prepare("SELECT * FROM user WHERE pseudo =:pseudo");
    $request->execute([':pseudo' => $_POST['name']]);
    $resultat = $request->fetchAll(PDO::FETCH_ASSOC);
    if (count($resultat) > 0) {
        echo "le pseudo existe dans la base de données";
    }else{
        
    }
}
