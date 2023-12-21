<?php
include_once('./partials/header-index.php');
// require_once('../database.connect.php');

// $pseudos = $request->fetchAll();
// var_dump($pseudos);

// $request = $database->query("SELECT * FROM message");

// $messages = $request->fetchAll();
$request = $database->query("SELECT * FROM user");

if ( isset($_POST["name"]) && !empty($_POST["name"]) 
        
    

    
    
    ) {
        
    }else
    $request=$database->prepare("SELECT * FROM `user` (pseudo) VALUES (:pseudo)");

    $request->execute([
    'pseudo' =>$_POST["name"]

    ]);
    var_dump('pseudo');
        ?>