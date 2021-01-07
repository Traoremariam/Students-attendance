<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

     <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body  style="background: #c0c0c0" >

<div class="wrapper" style="margin-left: auto;margin-right: auto; margin-top: 20px;"  id="div_login">
        <h2>Sign</h2>
        <span id="success"></span>

        <form  method="post" action="../requette/signature.php">
            <div class="form-group">
                <input type="text" name="email"  id="email" class="form-control"  placeholder="email">
            </div>    
            <div class="form-group ">
                <input type="password" name="password" id="password" class="form-control"  placeholder="password">
            </div>
            <div class="form-group">
                <input type="button" class="btn btn-primary" name="btn_submit" id="but_submit" value="Login">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>

        </form>
  </div>    



  <script>
$(document).ready(function() {
	
	$('#but_submit').on('click', function() {
		var email = $('#email').val();
		var password = $('#password').val();
		if(email!="" && password!="" ){
			$.ajax({
                url: "../requette/signature.php",

				type: "POST",
				data: {
					type:2,
					email: email,
					password: password						
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						location.href = "welcome.php";	

					}
					else if(dataResult.statusCode==201){
						alert('Mauvais mail ou mdp');
					}
					else if(dataResult.statusCode==202){
						$('#success').html('<div class="alert alert-danger">'+'Vous avez deja signé !'+'</div>');

					}
				}
			});
		}
		else{
			alert('Remplissez tous les champs !');
		}
	});
});
</script>
</body>
</html>

