<?php 
        include 'config.php';   
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
        $inputmail = $_POST['inputmail'];
        $inputline = $_POST['inputline'];
        $inputadd = $_POST['inputadd'];
        $usercheck = $_POST['usercheck'];
        $checkcheck = $_POST['checkcheck'];
            mysqli_query($con,"SET NAMES UTF8");
            $strSQL = "UPDATE people SET ";
            $strSQL .="namethai = '".$namethai."' ";
            $strSQL .=",nameeng = '".$nameeng."' ";
            $strSQL .=",HN = '".$HN."' ";
            $strSQL .=",age = '".$age."' ";
            $strSQL .=",sex = '".$sex."' ";
            $strSQL .=",blood = '".$blood."' ";
            $strSQL .=",bloodhave = '".$blood่have."' ";
            $strSQL .=",goblood = '".$goblood."' ";
            $strSQL .=",gobloodhave = '".$gobloodhave."' ";
            $strSQL .=",masa = '".$masa."' ";
            $strSQL .=",masahave = '".$masahave."' ";
            $strSQL .=",fatarus = '".$fatarus."' ";
            $strSQL .=",fatarushave = '".$fatarushave."' ";
            $strSQL .=",inputmail = '".$inputmail."' ";
            $strSQL .=",inputline = '".$inputline."' ";
            $strSQL .=",inputadd = '".$inputadd."' ";
            $strSQL .=",usercheck = '".$usercheck."' ";
            $strSQL .=",checkcheck = '".$checkcheck."' ";
            $strSQL .="WHERE id = '".$id."' ";
            
            //echo $strSQL;
            $result = mysqli_query($con,$strSQL);
            mysqli_close($con);
    ?>