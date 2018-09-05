<?php
        include 'config.php'; //เรียกใช้ไฟล์ config
        $username = $_POST['username']; 
        $password = $_POST['password']; 
        $strSQL = "insert into user (username,password,super) VALUES (
            '$username','$password','0'
        )";
        $objQuery = mysqli_query($con,$strSQL);
        echo 1;
?>