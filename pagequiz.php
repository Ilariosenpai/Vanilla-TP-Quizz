<?php

require_once('connexion.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="stylequiz.css">
</head>
<body>

<header>
    <nav class="navbar navbar-dark bg-danger">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Quizz</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-danger" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Users</h5>

            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>

          </div>

        </div>
      </div>
    </nav>
  </header>
    


<div class="position-fixed top-50 start-50 translate-middle">


  <button type="button" class="btn btn-danger btn-lg ">Réponse 1</button>
  <button type="button" class="btn btn-danger btn-lg ">Réponse 2</button>
<div class="pt-5">
<button type="button" class="btn btn-danger btn-sm ">Question suivante</button>
</div>
  

  </div>


  
  


 
<footer class="bg-danger fixed-bottom">
<div class="d-flex justify-content-around">
<h2>Ilan</h2>
<h2>Turan</h2>
<h2>Alexis</h2>
</div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>