
<?php include("footer.php") ?>

<h1 style="background: blue; text-align: center; font-family: cursive;">list of presence</h1>

<div class="container" style="margin-top:30px">


<div class="card">
<div class="card-header">
<div class="row">
</div>
</div>
<div class="card-body">
<div class="table-responsive">
 <span id="message_operation"></span>
<table class="table table-striped table-bordered">



<div class="demo-content">
            <!-- code pour la barre de recherche -->
            <form name="frmSearch" method="post" action="">
            
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
    
</div>
<?php
include("../requette/database.php");
//mysql_select_db($db);
//test if connection failed
if(mysqli_connect_errno()){
die("connection failed: "
 . mysqli_connect_error()
 . " (" . mysqli_connect_errno()
 . ")");
}

//get results from database
$result = mysqli_query($con,"SELECT `name`, `email`, `date_time` FROM `students`");
$all_property = array();  //declare an array for saving property

//showing property
echo '     <table class="table table-striped table-bordered" id="teacher_table">

 <tr>';  //initialize table tag
while ($property = mysqli_fetch_field($result)) {
echo '<td>' . $property->name . '</td>';  //get field name for header
array_Push($all_property, $property->name);  //save those to array
}
echo '</tr>'; //end tr tag

//showing all data
while ($row = mysqli_fetch_array($result)) {
echo "<tr>";
foreach ($all_property as $item) {
 echo '<td>' . $row[$item] . '</td>'; //get items using property value
}
echo '</tr>';
}
echo "</table>";
?>



</table>
</div>
</div>
</div>
</div>




<style>
.datepicker {
z-index: 1600 !important; /* has to be larger than 1050 */
}
</style>

<script>
        // Fonction pour rechercher nom
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("teacher_table");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
</body>
</html>

