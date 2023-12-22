<?php include_once('./partials/header.php') ?>


<form action="./traitement-page2.php" method="post">

  <div class="m-5 d-flex justify-content-center">
    <input type="text" class="form-control" placeholder="Insérer votre pseudo :" name="name">
  </div>

  <div class="m-5 d-flex justify-content-center">

    <button type="submit" class="btn btn-danger" name="start">Commencer le quiz</button>

  </div>

  <div class="m-5 d-flex justify-content-center">
    <button type="submit" class="btn btn-danger" name="ranking">Classement</button>
  </div>

</form>

<?php include_once('./partials/footer.php') ?>