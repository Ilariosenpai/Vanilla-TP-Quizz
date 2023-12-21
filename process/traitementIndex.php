<?php
// include_once('../partials/header-index.php');
// require_once('../database.connect.php');
// $request = $database->query("SELECT * FROM user");

// $pseudos = $request->fetchAll();
// var_dump($pseudos);

// $request = $database->query("SELECT * FROM message");

// $messages = $request->fetchAll();
?>
if (
    isset($_POST["user"]) && !empty($_POST["user"]) &&
    isset($_POST["message"]) && !empty($_POST["message"])

  
    ) {
       
    }else echo 'veullez remplir le formulaire';
  