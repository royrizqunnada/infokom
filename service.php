<?php
  session_start();
if(!isset($_SESSION['login'])) {
    header('location:login.php');
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>home</title>
  <style>
    .style_custom {
      width: 100%;
      height: 200px;
    }
  </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm navbar-light bg-primary">
        <div class="collapse navbar-collapse justify-content-center" id="navbarsExampleDefault">
            <ul class="navbar-nav">
           
                <li class="nav-item active">
                    <a class="nav-link" href="#">Service<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Order</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="customerservice.php">Customer Service</a>
                </li>
            </ul>
        </div>
    </nav>


  <div class=container>
    <div class="row">
      <div class="col text-center">
        <h1> PT.INFOKOM.EXE </h1>
        <h3> WELCOME TO PT.INFOKOM.EXE</h3>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <div class="card text-center" style="width: 18rem;">
          <img src="e-banking.png" class="card-img-top style_custom" alt="...">
          <div class="card-body">
            <h3 class="card-title">E- BANKING</h3>
              <div class="card-header">DESCRIPTION #A111</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">UI/UX FULL DESIGN</li>
                <li class="list-group-item">MAINTENANCE</li>
                <li class="list-group-item">GARANSI</li>
              </ul>
            </div>
            <div class="card-footer">
              <form method="POST" action="index.php">
                <button class="btn btn-primary" type="submit" name="service" value="e-Banking">Book Now </button>
              </form>
            </div>
          </div>
        </div>


        <div class="col-md-4">
          <div class="card text-center" style="width: 18rem;">
            <img src="e-learning.png" class="card-img-top style_custom" alt="...">
            <div class="card-body">
              <h3 class="card-title">E-LEARNING</h3>
              <div class="card-header">DESCRIPTION #A112</div>
              <ul class="list-group list-group-flush">
              <li class="list-group-item">UI/UX FULL DESIGN</li>
                <li class="list-group-item">MAINTENANCE</li>
                <li class="list-group-item">GARANSI</li>
              </ul>
            </div>
            <div class="card-footer">
              <form method="POST" action="index.php">
                <button class="btn btn-primary" type="submit" name="service" value="e-learning">Book Now </button>
              </form>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card text-center" style="width: 18rem;">
            <img src="web.png" class="card-img-top style_custom" alt="...">
            <div class="card-body">
              <h3 class="card-title">WEB</h3>
              <div class="card-header">DESCRIPTION #A113</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">UI/UX FULL DESIGN</li>
                <li class="list-group-item">MAINTENANCE</li>
                <li class="list-group-item">GARANSI</li>
              </ul>
            </div>
            <div class="card-footer">
              <form method="POST" action="index.php">
                <button class="btn btn-primary" type="submit" name="service" value="web">Book Now </button>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>