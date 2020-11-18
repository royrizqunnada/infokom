<?php

session_start();
if(isset($_SESSION['is_login']))
{
	header('location:index.php');
}


$dbhost = "localhost";
$dbuser = "root";
$dbpass= "root";
$dbname = "order";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $query = "SELECT * FROM user_table WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if ($password == $row["password"]) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['is_login'] = TRUE;
            echo "
                <script>
                    alert('Login Success');
                    </script>
                ";
            header('location:tableorder.php');
                
        }
    }
    $error = true;
}
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <style>
        html {
            position: relative;
            min-height: 100%;
        }

        body {
            /* Margin bottom by footer height */
            margin-bottom: 60px;
            background-color: cyan;
        }

        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            /* Set the fixed height of the footer here */
            height: 30px;
            line-height: 30px;
            /* Vertically center the text there */
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-dark bg-dark border-bottom box-shadow mb-3">
            <div class="container">
                <a class="navbar-brand">PT.INFOKOM EXE</a>
            </div>
        </nav>
    </header>
    <div class="container my-5">
        <div class="card">
            <div class="card-header bg-info text-light">
                <h5>Login</h5>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Insert Your Email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Insert Your Password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="login">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="border-top footer text-muted bg-light">
        <div class="container">
            &copy; Roy Rizqun Nada
        </div>
    </footer>
</body>
</html>