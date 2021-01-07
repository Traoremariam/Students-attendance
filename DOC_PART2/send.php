<!DOCTYPE html>
<html>
<?php
include 'config.php';
?>
      <title>form</title>
      <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery.slim.min.js"></script>

</head>
<body>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
          <a href = "index.php"><img src = "banner.png" height="60%" width="60%" ></a></h5><br>
            <form class="form-signin" method = "POST" action = "">
              <div class="form-label-group">
                <input type="text" name = "amont" class="form-control" placeholder="Amont in ₹" required autofocus><BR>
                <select class="form-control" name = "month" >
                <option value=''>--Select Month--</option>
                <option selected value='1'>Janaury</option>
                <option value='2'>February</option>
                <option value='3'>March</option>
                <option value='4'>April</option>
                <option value='5'>May</option>
                <option value='6'>June</option>
                <option value='7'>July</option>
                <option value='8'>August</option>
                <option value='9'>September</option>
                <option value='10'>October</option>
                <option value='11'>November</option>
                <option value='12'>December</option>
    </select> 
    <br> 
              


           
            </div>
              <button class="btn btn-lg btn-success btn-block text-uppercase" type="submit" name = "submit" value ="submit">SUBMIT</button>
             
              <hr class="my-4">
              <p>

              <?php
               if(isset($_POST['submit'])){
                  $month = $_POST ['month'];
                  $amont = addslashes($_POST ['amont']);
                  $query = mysqli_query($conn, "SELECT * FROM rice WHERE month ='$month'");
                  $rows = mysqli_num_rows($query);
                  if($rows!=1){
                  $array = $query->fetch_assoc();
                  mysqli_query($conn, "INSERT INTO rice (month,amont,datepost) VALUES ('$month','$amont','$datepost')");
            
                  echo "Congratulation ".$month." sell record saved";
                  echo "<br>";
                  }else{
                      echo "<br><b>";
                      echo "<font color = 'red'>";
                      echo "You have already saved a sell record for ".$month;
                      echo "</b>";
                      echo "</font>";
                  }
                  mysqli_close($conn);
                }
            
            ?>

              
              </p>

            </form>



          </div>
        </div>
      </div>
    </div>
  </div>
  <?php

?>
</body>

<p id = "result"></p>




</body>
</html>
