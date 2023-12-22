<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Salameche-page2</title>
</head>

<?php

 include_once('./partials/header.php') ?>

<body>



<form action="./traitement-page2.php" method="post">

<div class="m-5 d-flex justify-content-center">
    <input type="password" class="form-control" placeholder="Insérer vôtre pseudo :" name="name">
</div>

<div class="m-5 d-flex justify-content-center" >
    
  <button type="submit" class="btn btn-danger" name="start">Commencer le quiz</button>

</div>
  
<div class="m-5 d-flex justify-content-center">
  <button type="submit" class="btn btn-danger" name="ranking">Classement</button>
</div>

</form>

<?php include_once('./partials/footer.php') ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>