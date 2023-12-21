<?php
include_once('./partials/header-index.php');

// require_once('../database.connect.php');




?>
<section>


  <div class="d-flex justify-content-center">

  <form action="../procces/traitementIndex.php" method="post">

  <div class="container-md form col4  d-flex align-item-center">
    <img src="./img/quizz.png" alt="">
    <label for="exampleInputEmail1" class="form-label">Pseudo</label>
    <input type="text" class="form-control" id="pseudo" name="name">
    
    
    <button type="submit" href="./page2.php" class="btn btn-primary">Go</button>
  </div>
</form>
</div>
</section>
</main>

<?php
include_once('./partials/footer.php')
?>