<?php 
session_start();
include_once('connect.php');
$database = new database();

    
if(isset($_POST['simpa'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $tanggal = $_POST['tanggal'];
    $durasi = $_POST['durasi'];
    $service = $_POST['service'];
    $description = $_POST['description'];
 
    if($database->input($name,$phone,$email,$tanggal,$durasi,$service,$description))  
    {
        header('location:tableorder.php');
    }
}
     
?>

<!DOCTYPE html>
<html>
<head>
    <title> FORM ORDER </title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>
    
    <nav class="navbar navbar-expand-sm navbar-light bg-primary">
        <div class="collapse navbar-collapse justify-content-center" id="navbarsExampleDefault">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="service.php">Service</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Order<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="customerservice.php">Customer Service</a>
                </li>
                <li class= "nav item justify-content-between">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">

    <h1 class="text-center">PT. INFOKOM EXE</h1>
    <h2 class="text-center"> WELCOME </h2>

    <div class="card mt-3">
        <div class="card-header text-center bg-primary text-white">
            FORM ORDER INPUT
        </div>
        <div class="card-body">
            <form method="post" action="">
                <div class="form-group">
                    <div class="form-group">
                        <label> Name </label>
                        <input type="text" name="name" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label> Phone </label>
                        <input type="phone" name="phone" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label> Email </label>
                        <input type="email" name="email" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label> Order Date </label>
                        <input type="date" name="tanggal" placeholder="dd/mm/yyyy" id="check-in"
                            class="form-control" red>
                    </div>

                    <div class="form-group">
                        <label> Duration </label>
                        <input type="number" name="durasi" id="duration" class="form-control" >
                    </div>

                    <div class="form-group">
                        <small class="form-text">Month(s)</small>
                    </div>

                    <div class="form-group">
                        <label> Service Type </label>
                        <select class="form-control" name="service">
                            <option name="service" value="web">Web</option>
                            <option name="service" value="e-learning">E-Learning</option>
                            <option name="service" value="e-banking">E-Banking</option>
                        </select>
                    </div>

                </div>

                <div class="form-group">
                    <label for="desc">Description</label>
                    <textarea class="form-control" name="description" id="desc" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success" name="simpa">Submit</button>

                    <button type="reset" class="btn btn-danger" name="reset">Reset</button>

                </div>

            </form>
        </div>
            <script type="text/javascript" src="js/bootstrap.min.js"> </script>
</body>

</html>