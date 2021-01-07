<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>administration</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
     <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body  style="background: #c0c0c0" >

<div class="wrapper" style="margin-left: auto;margin-right: auto; margin-top: 20px;"  id="div_login">
        <h2>ADMINISTRATION</h2>
        <div id="message"></div>
        <form  method="post">
            <div class="form-group">
                <input type="text" name="txt_uname"  id="txt_uname" class="form-control"  placeholder="username">
            </div>    
            <div class="form-group ">
                <input type="password" name="txt_pwd" id="txt_pwd" class="form-control"  placeholder="password">
            </div>
            <div class="form-group">
                <input type="button" class="btn btn-primary" name="but_submit" id="but_submit" value="Login">
            </div>

        </form>
  </div>    

<script type="text/javascript">
 $(document).ready(function(){
    $("#but_submit").click(function(){
        var username = $("#txt_uname").val().trim();
        var password = $("#txt_pwd").val().trim();

        if( username != "" && password != "" ){
            $.ajax({
                url:'../requette/admin.php',
                type:'post',
                data:{username:username,password:password},
                success:function(response){
                    var msg = "";
                    if(response == 1){
                        window.location = "dashboard.php";
                    }else{
                        msg = "Invalid username and password!";
                    }
                    $("#message").html(msg);
                }
            });
        }
    });
});
</script>


</body>
</html>