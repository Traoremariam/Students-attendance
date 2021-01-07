<!DOCTYPE html>
<html>
      <title>form</title>
      <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery.slim.min.js"></script>
  <style>
div.gallery {
  margin: 5px;
  border: 0px solid #ccc;
  float: left;
  width: 100px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
</style>
</head>
<body>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">
            
            <img src = "banner.png" height="60%" width="60%" ></h5><br>
           
            <div class="gallery">
        <a  href="chart.php">
            <img src="chart.png" alt="Cinque Terre" height="60%" width="60%">
        </a>
        <div class="desc">Display Chart</div>
            </div>
             
        <div class="gallery">
        <a  href="send.php">
        <img src="submitted.png" alt="Cinque Terre" height="60%" width="60%">
        </a>
        <div class="desc">Submit Data</div>
            </div>

         
       

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
