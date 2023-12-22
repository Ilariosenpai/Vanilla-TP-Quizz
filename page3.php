<?php

require_once('connexion.php');


$sql = "SELECT pseudo, score FROM user ORDER BY score DESC LIMIT 10";
$result = $conn->query($sql);

$data = array();
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $data[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="style.css">
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

<div class="fond">

<h2 class="d-flex justify-content-center">Votre score est de <?php //$_POST['score'] ?> points </h2>





<canvas id="myChart" width="400" height="200"></canvas>

<script>

let ctx = document.getElementById('myChart').getContext('2d');
let myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: <?php echo json_encode(array_column($data, 'pseudo')); ?> ,
        datasets: [{
            label: 'Scores',
            data: <?php echo json_encode(array_column($data, 'score')); ?>,
            backgroundColor: 'rgba(187,33,36, 1)', 
            borderColor: 'rgba((187,33,36, 1)', 
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            x: {
                grid: {
                    display: false 
                },
                ticks: {
                    color: 'black' ,
                    font: {
                        size: 20, 
                        
                    }
                }
            },
            y: {
                beginAtZero: true,
                grid: {
                    display: false 
                }
            }
        }
    }
});
</script>

</div>

<footer class="bg-danger">
<div class="d-flex justify-content-around">
<h2>Ilan</h2>
<h2>Turan</h2>
<h2>Alexis</h2>
</div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>


</body>
</html>

<?php

?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>