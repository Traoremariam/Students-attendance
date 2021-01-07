<!doctype html>
<html>
<head lang="en">
<meta charset="utf-8">
<title>students attendance</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">

</head>
<body style="background-color: #c6c6c6;">
<div class="container" style=" margin-right:-200px"; >
<div class="row">

<div class="col-md-8" style="width: 60%;">

<h1>Registration</h1>
<span id="success"></span>

<form id="form" action="" method="post" enctype="multipart/form-data " >
<div class="form-group">
<input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required />
</div>
<div class="form-group">
<input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required />
<span id="msgbo" style="display:none"></span>

</div>
<div class="form-group">
<input type="text" class="form-control" id="number" name="number" placeholder="Enter number" required maxlength="8"/>
<span id="msgbox" style="display:none"></span>


</div>

<div class="form-group">  
                     <input type="radio" name="gender" value="Male" />Male <br />  
                     <input type="radio" name="gender" value="Female" />Female <br />  
 </div>  
<div class="form-group">
<input type="password" class="form-control" id="password" name="password" placeholder="Enter password"  required maxlength="8" />
</div>
<div class="form-group">
<input type="password" class="form-control"   id="confirm_password" name="confirm_password" placeholder="Confirm password" onkeypress="register()"  required maxlength="8" />
<div id="checkconfirm" ></div>

</div>

<input id="uploadImage" type="file" accept="image/*" name="image" required />
<br>
<input class="btn btn-success" type="submit" value="INCRIPTION" id="btn-register"name="sub" style="background: blue;">
<h5>Already have an account? <a href="sign.php">sign here</h5>.</p>

</form>
</div>
</div>
</div>
<!-- AJAX CHECK -->
<script>

function register() {

var password= document.getElementById('password').value ;
var confirm= document.getElementById('confirm_password').value;

if (password!=confirm){
  var field = document.getElementById("checkconfirm")
  field.innerHTML = "invalid";
}
else{
  var field = document.getElementById("checkconfirm")
  field.innerHTML = "valid";
}
}
</script>
<script type="text/javascript">
$("#email").blur(function()
{
$("#msgbo").removeClass().addClass('messagebox').text('Check en cours...').fadeIn("slow");
$.post("../requette/verif.php" ,{ email:$(this).val() } ,function(data)
{
if(data=='no')
{
$("#msgbo").fadeTo(200,0.1,function()
{
$(this).html('Ce email est déjà pris').addClass('busy').fadeTo(900,1);
});
}
else
{
$("#msgbo").fadeTo(200,0.1,function()
{
$(this).html('Ce email est disponible').addClass('dispo').fadeTo(900,1);
});
}
});
});
</script>

<!-- AJAX CHECK -->
<script type="text/javascript">
$("#number").blur(function()
{
$("#msgbox").removeClass().addClass('messagebox').text('Check en cours...').fadeIn("slow");
$.post("../requette/number.php" ,{ number:$(this).val() } ,function(data)
{
if(data=='no')
{
$("#msgbox").fadeTo(200,0.1,function()
{
$(this).html('Ce number est déjà pris').addClass('busy').fadeTo(900,1);
});
}
else
{
$("#msgbox").fadeTo(200,0.1,function()
{
$(this).html('Ce number est disponible').addClass('dispo').fadeTo(900,1);
});
}
});
});
</script>

<script>

  
    $(document).ready(function (e) {
 $("#form").on('submit',(function(e) {
  e.preventDefault();
  $.ajax({
         url: "../requette/requette.php",
   type: "POST",
   data:  new FormData(this),
   contentType: false,
         cache: false,
   processData:false,
   beforeSend : function()
   {
    //$("#preview").fadeOut();
    $("#err").fadeOut();
   },
   success: function(data)
      {
        $('#success').html('<div class="alert alert-success">'+'Registration successful !'+'</div>');
    if(data=='invalid')
    {
     // invalid file format.
     $("#err").html("Invalid File !").fadeIn();
    }
    else
    {
     // view uploaded file.
     $("#preview").html(data).fadeIn();
     $("#form")[0].reset(); 
    }
      },
     error: function(e) 
      {
    $("#err").html(e).fadeIn();
      }          
    });
 }));
});
</script>

</body>



</html>
