<?php
include 'database.php';
// if($_POST['type']==2){
		$email=$_POST['email'];
		$password=$_POST['password'];
		$password1 = md5($password);
		$date= date('Y-m-d');
		$check=mysqli_query($con,"select * from students where email='$email' and password='$password1'");

		
		if (mysqli_num_rows($check)>0)
		{
			$row = mysqli_fetch_assoc($check);
			
			$idUser = $row['id'];
		  
			$check1=mysqli_query($con,"select * from attendance where iduser='$idUser' and date='$date'");

			if(mysqli_num_rows($check1)>0){
				echo json_encode(array("statusCode"=>202));

			}else{
			mysqli_query($con, "INSERT INTO attendance (iduser) VALUES ('$idUser')");

			// $_SESSION['email']=$email;
			echo json_encode(array("statusCode"=>200));
			}
		}
		else{
			echo json_encode(array("statusCode"=>201));
		}
		
	// }


?>






 








 