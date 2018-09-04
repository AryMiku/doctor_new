<?php 
    $con=mysqli_connect("localhost","root","","doctor");
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    mysqli_query($con,"SET NAMES UTF8");
?>