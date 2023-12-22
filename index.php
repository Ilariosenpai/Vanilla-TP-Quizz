<?php
include_once('./partials/header-index.php');

?>
<section>


  <div class="d-flex justify-content-center">

    <div class="carre d-flex align-item-center border border-danger-subtle bg-danger">
  <form class="position-absolute top-50 start-50 translate-middle " action="./process/traitementIndex.php" method="post">

  <div class="container-md form col4  d-flex align-item-center">
    <label for="exampleInputEmail1" class="form-label"><h1>Pseudo</h1></label>
    <input type="text" class="form-control" id="pseudo" name="name">
    
    
    <button type="submit" href="./page2.php" class="btn btn-primary">Go</button>

  </div>
    <div>
  </div>
  </div>
</form>
</div>
</section>
</main>

<?php
include_once('./partials/footer.php')
?>