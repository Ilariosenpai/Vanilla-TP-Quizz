<?php


try {
    $dsn='mysql:host=localhost;dbname=salameche';

    $username = 'root';

    $password = '';

    $database = new PDO($dsn,$username,$password);


} 
catch (Exception $message) {
    echo '<p> y a un problem eude : ' . ' ' . $message . '' . '</p>';
}
?>