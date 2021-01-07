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
$result = mysqli_query($con,"SELECT `iduser`, `date`, `time` FROM `attendance`");

$all_property = array();  //declare an array for saving property

//showing property
echo '     <table class="table table-striped table-bordered" id="teacher_table" style="width:50%; "> 

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