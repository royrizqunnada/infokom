<?php
session_start();
if(! isset($_SESSION['is_login']))
{
  header('location:login.php');
}
?>
<!doctype html>
<html lang="en">


<head>
<link rel ="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<div class="card mt-3">
<div class="card-header text-center bg-primary text-white">
    TABLE ORDER
  </div>
  <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Phone </th>
                    <th scope="col">Email</th>
                    <th scope="col">Order Date</th>
                    <th scope="col">Duration</th>
                    <th scope="col">Service Type</th>
                    <th scope="col">Description</th>
                    <th scope="col">ID Order</th>
                    <th> Action </th>
                </tr>
            </thead>
            <tbody>
                <?php
                $host = "127.0.0.1:3307";
                $user = "root";
                $name = "order";
                $pass = "";

                $koneksi = mysqli_connect($host,$user,$pass,$name);
                $no=1;
                $tampil = mysqli_query($koneksi, "SELECT * FROM order2");
                while ($data = mysqli_fetch_array($tampil)) {
 
                echo "<tr>";
                echo "<td>{$data['name']}</td>"; 
                echo "<td>{$data['phone']}</td>";
                echo "<td>{$data['email']}</td>";
                echo "<td>{$data['order_date']}</td>";
                echo "<td>{$data['duration']}</td>";
                echo "<td>{$data['service']}</td>";
                echo "<td>{$data['description']}</td>";
                echo "<td>{$data['id_order']}</td>";
                
                echo "<td>";
                echo "<a href=\"edit.php?id_order={$data['id_order']}\" class= \"btn btn-warning\"> Edit </a>";
                echo "<a href=\"delete.php?id={$data['id_order']}\" class= \"btn btn-danger\" onclick=\"return confirm('Are you sure want to delete this data?'\"> Delete </a>";
                echo "</td>";
                echo "</tr>";
                
                } 
            
                ?>
                
            </tbody>
        </table>
    </div>
</body>
 
</html>
