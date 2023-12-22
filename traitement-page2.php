<?php
require_once('./bdd/connexion.php');



if (isset($_POST['name']) && !empty($_POST['name'])) {

    $request = $database->prepare("SELECT * FROM `user` WHERE `pseudo` =:pseudo");
    $request->execute([
        ':pseudo' => $_POST['name']
    ]);
    $resultat = $request->fetchAll(PDO::FETCH_ASSOC);

    if (count($resultat)>0) {
       
         echo "le pseudo existe dans la base de données";

    } else {

    $score = 0;
    $requests = $database->prepare("INSERT INTO `user` (pseudo,score) VALUES (:pseudo,:score)");
    $requests->execute([
    ':pseudo' => $_POST['name'],
    ':score' => $score  
    ]);                          
  

    $lastId = $database->lastInsertId();
    } 
   

}header('Location: ./page3.php')
?>
 