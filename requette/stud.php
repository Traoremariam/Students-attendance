<?php
include 'database.php';

// if($_POST['type']==2){
		$email=$_POST['email'];
		$password=$_POST['password'];
		$password1 = md5($password);
		$check=mysqli_query($con,"select * from students where email='$email' and password='$password1'");

		$row = mysqli_fetch_assoc($check);
			
		$_SESSION['picture'] = $row['picture'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['name'] = $row['name'];
		$_SESSION['number'] = $row['number'];
		$_SESSION['gender'] = $row['gender'];
		// $_SESSION['id'] = $row['id'];
		$_SESSION['iduser'] = $row['id'];
		




		if (mysqli_num_rows($check)>0)
		{
			// $_SESSION['email']=$email;
			echo json_encode(array("statusCode"=>200));
		}
		else{
			echo json_encode(array("statusCode"=>201));
		}
		
	// }


?>






 








 