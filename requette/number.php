<?php
   session_start();
   $host = 'localhost';
   $user = 'root';
   $pass = '';
   $db = 'students_part2';
   
   $conn = mysqli_connect($host, $user, $pass, $db);


    $number=$_POST['number'];

    $check=" SELECT number FROM students WHERE number='$number' ";

    $query = mysqli_query($conn, $check);
    $coun = mysqli_num_rows($query);

    if($coun == '1' || $coun > '1')
    {
        echo ('no');
        // $ok = false;
    }
    else
    {
        echo ('yes');

    }
    exit();

    mysqli_close($conn);





?>
