<?php
        include 'config.php'; //เรียกใช้ไฟล์ config
        $namethai = $_POST['namethai']; //ชื่อนามสกุลภาษาไทย
        $nameeng = $_POST['nameeng']; //ชื่อนามสกุลภาษาอังกฤษ
        $HN = $_POST['HN']; //ค่า HN
        $age = $_POST['age']; //อายุ
        $sex = $_POST['sex']; //เพศ
        $id = $_POST['ID']; //รหัสบัตรประชาชน
        $blood = $_POST['blood']; //เช็คการเคยได้รับเลือด
        $blood่have = $_POST['bloodhave']; //รายละเอียดการเคยได้รับเลือด
        $goblood = $_POST['goblood']; //เช็คการเคยบริจาคเลือด
        $gobloodhave = $_POST['gobloodhave']; //รายละเอียดการเคยบริจาคเลือด
        $masa = $_POST['masa']; //เช็คมังซะวีรัส
        $masahave = $_POST['masahave']; //รายละเอียดมังซะวีรัส
        $fatarus = $_POST['fatarus']; //เช็คทารัสในครอบครัว
        $fatarushave = $_POST['fatarushave']; //รายละเอียดทารัสในครอบครัว
        $comback1 = $_POST['comback1']; //เช็คทางตอบกลับ
        $comback2 = $_POST['comback2']; //เช็คทางตอบกลับ
        $comback3 = $_POST['comback3']; //เช็คทางตอบกลับ
        $comback4 = $_POST['comback4']; //เช็คทางตอบกลับ
        $inputmail = $_POST['inputmail'];
        $inputline = $_POST['inputline'];
        $inputadd = $_POST['inputadd'];
        $comback = $_POST['comback'];
        $strSQL = "insert into people (namethai,nameeng,HN,age,sex,id,blood,bloodhave,goblood,gobloodhave,masa,masahave,fatarus,fatarushave,comeback,date,inputmail,inputline,inputadd,sent) VALUES (
            '$namethai','$nameeng','$HN','$age','$sex','$id','$blood','$blood่have','$goblood','$gobloodhave','$masa','$masahave','$fatarus','$fatarushave','$comback',now(),'$inputmail','$inputline','$inputadd','false'
        )";
        $objQuery = mysqli_query($con,$strSQL);
        echo 1;
?>