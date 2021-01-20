<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tranferspage</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style type="text/css">
    .jumbotron{
      height: 625px;
      background-image: cover;
      background-image: no-repeat;
       
    }
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
.background-image{
  position: relative;
  width:100%;
  margin-top:-62px;
  height:120%;
}
  </style>
  <script type="text/javascript">
    function trns() {
      
    }

  </script>
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
<h3 class="text-white p-4 font-weight-bold" style="text-shadow: 4px 4px #737373;">TRANSFERS PAGE</h3>
   <button class="navbar-toggler bg-light d-flex justify-content-end" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
 </nav>
</div>
</div>

  <div class="jumbotron jumbotron-fluid">
    <img src="https://i.pinimg.com/originals/52/fe/b6/52feb6ce0f78701667f41120b3cca0ea.jpg" class="background-image">
    <h1 class="display-1 text-dark font-weight-bold" style="position:relative; top:-430px;text-shadow: 5px 5px #737373;">TRANSFERS</h1>
    <p style="position:relative; margin-top:-420px; text-shadow: 1px 1px #737373;">MAKE TRANSFERS BY CLICKING ON THE TRANSFERS BUTTON BELOW<p>
    
   
<div class="container">
  <!-- Button to Open the Modal -->
<button type="button" class="btn btn-dark btn-lg btn btn-outline-info " data-toggle="modal" data-target="#myModal" onclick="trns{}" style="position:relative; margin-top:15px;">TRANSFERS</button>
  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="text-shadow: 1px 1px #737373;">TRANSFER</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form method="POST">
            <div class="row ml-2">
          <div class="form-group ml-3">
      <label for="text" style="text-shadow: 1px 1px #737373;">FROM:</label>
      <input type="text" class="form-control" id="text" placeholder="Enter name" name="frm">
    </div>
    <div class="form-group ml-3">
      <label for="text" style="text-shadow: 1px 1px #737373;">TO:</label>
      <input type="text" class="form-control" id="text" placeholder="Enter name" name="to">
    </div>
  </div>
    <div class="form-group">
      <label for="text" style="text-shadow: 1px 1px #737373;">AMOUNT:</label>
      <input type="number" class="form-control" id="number" placeholder="Enter amount" name="amt">
    </div>
    
    </div>
    <button type="submit" name="submit" class="btn btn-dark">TRANSFER</button>
  </form>
</div>
        </div>
        
        <!-- Modal footer -->
     
        
      </div>
    </div>
  </div>
  
</div>


    
      <div class="footer">
  <p class="p-3"></p>
</div>
  </body>
  <?php
$conn = new mysqli("localhost","root","","bank");

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}
if(isset($_POST['submit']))
{
$frm=$_POST['frm'];
$to=$_POST['to'];
$amt=$_POST['amt'];
$amtn=$amt*-1;
$q1="SELECT balance FROM Customer WHERE name='".$frm."'";
$q2="SELECT balance FROM Customer WHERE name='".$to."'";
$r1=$conn->query($q1);
$r2=$conn->query($q2);
while($r=$r1->fetch_assoc())
{
$val1=$r['balance'];
}
while($r=$r2->fetch_assoc())
{
$val2=$r['balance'];
}
$val1=$val1-$amt;
$val2=$val2+$amt;
$q3="UPDATE Customer SET balance = '".$val1."' WHERE name = '".$frm."'";
$q4="UPDATE Customer SET balance = '".$val2."' WHERE name = '".$to."'";
$q5="UPDATE Customer SET transfers = '".$amtn."' WHERE name = '".$frm."'";
$q6="UPDATE Customer SET transfers = '".$amt."' WHERE name = '".$to."'";
if( $conn->query($q3) && $conn->query($q4) && $conn->query($q5) && $conn->query($q6)){
echo "<script type='text/javascript'>alert('Transaction successful!');</script>";
}
else{
echo "<script type='text/javascript'>alert('Transaction unsuccessful!');</script>";
}

}

?>

  </html>