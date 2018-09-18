<?php
    session_start();
?>
<?php
        include 'config.php'; //เรียกใช้ไฟล์ config
        $strSQL = "SELECT * FROM user WHERE username = '".$_POST['username']."' 
        and password = '".$_POST['password']."'";
        $objQuery = mysqli_query($con,$strSQL);
        $objResult=mysqli_fetch_array($objQuery);
        $_SESSION["super"] = $objResult['super'];
        if(!$objResult)
           $check = 0  ;
        else
            $check = 1 ;
        echo $check;
?>