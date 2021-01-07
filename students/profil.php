<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Student</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
</head>
<body  >


<nav class="navbar navbar-expand-lg bg-dark navbar-darkt">

  <p class="navbar-brand" style="color: white" >  Bienvenue <?php echo $_SESSION['name']; ; ?></>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search"> -->
      <a class="btn btn-outline-success my-2 my-sm-0"  href="../logout.php"  >DECONNEXION</a>
    </form>
  </div>
</nav>

                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <table>
                                <tbody>
                                    <tr>

 									<!-- <td><img src=""> -->
 									<td > <img  style="width: 150px; height: 200px" src="../requette/<?php echo $_SESSION['picture']; ?>"> </td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td><b> Informations </b></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td style="width:200px">Email : </td>
                                            <td><?php echo $_SESSION['email']; ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width:200px">Contact : </td>
                                            <td><?php echo $_SESSION['number'];?></td>
                                        </tr>
                                        <tr>
                                            <td style="height:15px"></td>
                                            <td></td>
                                        </tr>
                                        <!-- <tr>
                                            <td> <b> Information General</b></td>
                                            <td></td>
                                        </tr> -->
                                        <tr>
                                            <td>Nom : </td>

                                            <td><?php echo $_SESSION['name']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Sexe : </td>
                                            <td><?php echo $_SESSION['gender']; ?></td>

                                            
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


                <?php include('tab.php') ?>
                <?php include('../Graph/index.php') ?>


                        </tbody>
                    </table>
                </div>


</body>
</html>






