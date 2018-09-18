<?php
        include 'config.php'; //เรียกใช้ไฟล์ config
        $id = $_POST['id'];
        $strSQL = "delete FROM people WHERE id = '$id'";
        $objQuery = mysqli_query($con,$strSQL);
        echo 1;
?>