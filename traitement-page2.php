<?php 
require_once('./bdd/connextion.php');

if (isset($_POST['name']) && !empty($_POST['name']) && 
    isset($_POST['start']) && !empty($_POST['start'])) {

}else {
    echo 'nous sommes en guerre';
}




?>