<!DOCTYPE html>
<html lang="en">
<head>
  <title>Customerspage</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style type="text/css">
    
    ul.nav a:hover { 
      color: #707070 !important; 
    }
    .footer {
  position: fixed;
  left: 14px;
  bottom: 0;
  width: 98%;
  background-color: #707070;
  color: white;
  text-align: center;

}
table{
margin-top: -64px; 
}

  </style>
  </head>
  <body>
    <div class="container-fluid text-info text-center">
      <div>
<div class="pos-f-t">
 <div class="collapse" id="navbarToggleExternalContent">
   <div class="bg-info p-2">
     <ul class="nav nav-pills nav-fill">
 <li class="nav-item">
   <a class="nav-link bg-light text-dark font-weight-bold" href="homepage.php" style="border: 1px solid black ;">HOME</a>
 </li>
 <li class="nav-item">
   <a class="nav-link bg-light text-dark font-weight-bold" href="customers.php" style="border: 1px solid black;">CUSTOMERS</a>
 </li>
 <li class="nav-item">
   <a class="nav-link bg-light text-dark font-weight-bold" href="transfers.php" style="border: 1px solid black;">TRANSFERS</a>
 </li>
</ul>
   </div>
 </div>
 <nav class="navbar navbar-light bg-info">
<h3 class="text-white p-4 font-weight-bold" style="text-shadow: 4px 4px #737373;">CUSTOMERS PAGE</h3>
   <button class="navbar-toggler bg-light d-flex justify-content-end" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
 </nav>
</div>
</div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bank";
$a=[];
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error)
die("Connection failed: " . $conn->connect_error);
$sql="SELECT * FROM customer";
$r=$conn->query($sql);
echo "<table class='table table-hover table-dark table-bordered table-striped' style='margin-top:30px;'>";
echo "<tr>
<th style='text-shadow: 3px 3px #737373;'>ID</th>
<th style='text-shadow: 3px 3px #737373;'>NAME</th>
<th style='text-shadow: 3px 3px #737373;'>EMAIL</th>
<th style='text-shadow: 3px 3px #737373;'>BALANCE</th>
<th style='text-shadow: 3px 3px #737373;'>TRANSFERS</th>
</tr>";
while ($row=$r->fetch_assoc()) {
  echo "<tr>";
  echo "<td>".$row["id"]."</td>";
  echo "<td>".$row["name"]."</td>";
  echo "<td>".$row["email"]."</td>";
  echo "<td>".$row["balance"]."</td>";
  echo "<td>".$row["transfers"]."</td>";
  echo "</tr>";

  # code...

}
echo "</table>";

?>
     
     <div class="footer">
  <p class="p-3"></p>
</div>    
  </body>
</html>