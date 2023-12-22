<?php


$request = $database->query("SELECT pseudo FROM user ");

$pseudos = $request->fetchAll();


?>