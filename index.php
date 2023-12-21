<?php
include_once('../partials/headerNone.php');

// require_once('../database.connect.php');




?>

  <div class="d-flex justify-content-center">
   <div></div>
  <form action="../procces/traitementIndex.php" method="post">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Pseudo</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>

  <button type="submit" class="btn btn-primary">Go</button>
</form>

</main>

<?php
include_once('../partials/footer.php')
?>