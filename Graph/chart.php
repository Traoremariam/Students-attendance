
<!doctype html>
<html>
<?php
include 'config.php';
?>
<head>
	<title>Line Chart</title>
	<script src="Chart.min.js"></script>
	<script src="utils.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery.slim.min.js"></script>

	<style>
	canvas{
		-moz-user-select: none;
		-webkit-user-select: none;
		-ms-user-select: none;
	}
	</style>
</head>

<body>
	<div style="width:75%;">
    <a href = "index.php"><img src = "banner.png" height="10%" width="10%" ></a>
		<canvas id="canvas"></canvas>

       


	</div>
	<br>

	<script>
		var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
		var config = {
			type: 'line',
			data: {
				labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
				datasets: [{
					label: 'My sell in  ₹',
					backgroundColor: window.chartColors.red,
					borderColor: window.chartColors.red,
					data: [
                        <?php
                        //Get value of January
                        $querydata= mysqli_query($conn, "SELECT `iduser` * FROM attendance WHERE month = '1'  ");
                        $getdata= mysqli_fetch_assoc($querydata); 
                        $rows = mysqli_num_rows($querydata);
                        if($rows==1){ 
                            $amont = $getdata['amont'];
                            echo $amont;
                            }else{
                            echo 0;
                            }
                        ?>,
						<?php
                        //Get value of February
                        $querydata= mysqli_query($conn, "SELECT `iduser` * FROM attendance WHERE month= '2'  ");
                        $getdata= mysqli_fetch_assoc($querydata); 
                        $rows = mysqli_num_rows($querydata);
                        if($rows==1){ 
                        $amont = $getdata['amont'];
                        echo $amont;
                        }else{
                        echo 0;
                        }
                        ?>,
						<?php
                        //Get value of March
                        $querydata= mysqli_query($conn, "SELECT `iduser` * FROM attendance WHERE month = '3'  ");
                        $getdata= mysqli_fetch_assoc($querydata); 
                        $rows = mysqli_num_rows($querydata);
                        if($rows==1){ 
                        $amont = $getdata['amont'];
                        echo $amont;
                        }else{
                        echo 0;
                        }
                        ?>,
						<?php
                        //Get value of April
                        $querydata= mysqli_query($conn, "SELECT `iduser` * FROM attendance WHERE month = '4'  ");
                        $getdata= mysqli_fetch_assoc($querydata); 
                        $rows = mysqli_num_rows($querydata);
                        if($rows==1){ 
                        $amont = $getdata['amont'];
                        echo $amont;
                        }else{
                        echo 0;
                        }
                        ?>,
						<?php
                        //Get value of May
                        $querydata= mysqli_query($conn, "SELECT `iduser` * FROM attendance WHERE month = '5'  ");
                        $getdata= mysqli_fetch_assoc($querydata); 
                        $rows = mysqli_num_rows($querydata);
                        if($rows==1){ 
                        $amont = $getdata['amont'];
                        echo $amont;
                        }else{
                        echo 0;
                        }
                        ?>,
						<?php
                        //Get value of June
                        $querydata= mysqli_query($conn, "SELECT `iduser` * FROM attendance WHERE month = '6'  ");
                        $getdata= mysqli_fetch_assoc($querydata); 
                        $rows = mysqli_num_rows($querydata);
                        if($rows==1){ 
                        $amont = $getdata['amont'];
                        echo $amont;
                        }else{
                        echo 0;
                        }
                        ?>,
<?php
                        //Get value of July
                        $querydata= mysqli_query($conn, "SELECT `iduser` * FROM attendance WHERE month = '7'  ");
                        $getdata= mysqli_fetch_assoc($querydata);
                        $rows = mysqli_num_rows($querydata);
                        if($rows==1){ 
                        $amont = $getdata['amont'];
                        echo $amont;
                        }else{
                        echo 0;
                        }
                        ?>,



						<?php
                        //Get value of August
                        $querydata= mysqli_query($conn, "SELECT `iduser` * FROM attendance WHERE month = '8'  ");
                        $getdata= mysqli_fetch_assoc($querydata);
                        $rows = mysqli_num_rows($querydata);
                        if($rows==1){ 
                        $amont = $getdata['amont'];
                        echo $amont;
                        }else{
                        echo 0;
                        }
                        ?>,


                        <?php
                        //Get value of September
                        $querydata= mysqli_query($conn, "SELECT `iduser` * FROM attendance WHERE month = '9'  ");
                        $getdata= mysqli_fetch_assoc($querydata); 
                        $rows = mysqli_num_rows($querydata);
                        if($rows==1){ 
                        $amont = $getdata['amont'];
                        echo $amont;
                        }else{
                        echo 0;
                        }
                        ?>,
                        <?php
                        //Get value of October
                        $querydata= mysqli_query($conn, "SELECT `iduser` * FROM attendance WHERE month= '10'  ");
                        $getdata= mysqli_fetch_assoc($querydata); 
                        $rows = mysqli_num_rows($querydata);
                        if($rows==1){ 
                        $amont = $getdata['amont'];
                        echo $amont;
                        }else{
                        echo 0;
                        }
                        ?>,
                        <?php
                        //Get value of November
                        $querydata= mysqli_query($conn, "SELECT `iduser` * FROM attendance WHERE month = '11'  ");
                        $getdata= mysqli_fetch_assoc($querydata); 
                        $rows = mysqli_num_rows($querydata);
                        if($rows==1){ 
                        $amont = $getdata['amont'];
                        echo $amont;
                        }else{
                        echo 0;
                        }
                        ?>,
                        <?php
                        //Get value of December
                        $querydata= mysqli_query($conn, "SELECT `iduser` * FROM attendance WHERE month = '12' ");
                        $getdata= mysqli_fetch_assoc($querydata); 
                        $rows = mysqli_num_rows($querydata);
                        if($rows==1){ 
                        $amont = $getdata['amont'];
                        echo $amont;
                        }else{
                        echo 0;
                        }
                        ?>
                        
					],
					fill: false,
				}, ]
			},
			options: {
				responsive: true,
				title: {
					display: true,
					text: 'Chart.js Line Chart'
				},
				tooltips: {
					mode: 'index',
					intersect: false,
				},
				hover: {
					mode: 'nearest',
					intersect: true
				},
				scales: {
					xAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Month'
						}
					}],
					yAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Amont in ₹'
						}
					}]
				}
			}
		};

		window.onload = function() {
			var ctx = document.getElementById('canvas').getContext('2d');
			window.myLine = new Chart(ctx, config);
		};

		
		var colorNames = Object.keys(window.chartColors);
		

		

		
		
	</script>
</body>

</html>
