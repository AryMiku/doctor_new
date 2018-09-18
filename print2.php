<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>กรอกประวัติ</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <style type="text/css">   
  
    #printable { display: block; }  
    
    @media print   
    {   
        #non-printable { display: none; }   
        #printable { display: block; }   
    }   
  
</style> 
</head>
<body>



  <?php 
        error_reporting(0);
        $id = $_POST['id'];
        $nameprint = $_POST['nameprint'];
        $con=mysqli_connect("localhost","root","","doctor");
        mysqli_query($con,"SET NAMES UTF8");
        $strSQL = "select * from people where id = $id";
        //echo $strSQL;
        $objQuery = mysqli_query($con,$strSQL);
        $objResult = mysqli_fetch_array($objQuery);

        if($objResult['sex'] == "male"){
            $sex2 = "ชาย";
        }
        else{
            $sex2 = "หญิง";
        }

        if($objResult['blood'] == "nothave"){
            $blood2 = "ไม่เคย";
        }
        elseif($objResult['blood'] == "have"){
            $blood2 = "เคย";
        }

        if($objResult['goblood'] == "nohave"){
            $goblood2 = "ไม่เคย";
        }
        elseif($objResult['goblood'] == "have"){
            $goblood2 = "เคย";
        }

        if($objResult['masa'] == "noteat"){
            $masa2 = "ไม่ทาน";
        }
        elseif($objResult['masa'] == "eat"){
            $masa2 = "ทาน";
        }
        if($objResult['fatarus'] == "notknow"){
            $fatarus2 = "ไม่ทราบ";
        }
        elseif($objResult['fatarus'] == "no"){
            $fatarus2 = "ไม่ใช่";
        }
        elseif($objResult['fatarus'] == "other"){
            $fatarus2 = "อื่นๆ";
        }

        $ccomeback = $objResult['comeback'];
        
        if($objResult['comeback'] == "email line thaipost "){
            $comeback2 = "ส่งกลับทาง Email LINE และ ไปรณีย์";
        }
        elseif($objResult['comeback'] == "email line thaipost day"){
            $comeback2 = "ส่งกลับทาง Email, LINE, ไปรณีย์ และ รอรับผล ";
        }
    ?>
        <br><br>
    <div class="container">
      <div class="notification has-text-centered">
        รายละเอียดข้อมูล
      </div>
    <div class="columns is-mobile">
        <div class="column is-2" style="background-color:#f7f8f9"></div>
        
        <div class="column " style="background-color:#f7f8f9">
        <table class="table is-fullwidth">
            <tr>
                <th class="has-text-centered">หัวข้อ</th>
                <th class="has-text-centered">รายละเอียด</th>
            </tr>
            <tr>
                <td class="has-text-centered">รหัสประชาชน</td>
                <td class="has-text-centered"><?php echo $objResult['id']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">HN</td>
                <td class="has-text-centered"><?php echo $objResult['HN']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">ชื่อ-สกุล ภาษาไทย</td>
                <td class="has-text-centered"><?php echo $objResult['namethai']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">ชื่อ-สกุล ภาษาอังกฤษ</td>
                <td class="has-text-centered"><?php echo $objResult['nameeng']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">อายุ</td>
                <td class="has-text-centered"><?php echo $objResult['age']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">เพศ</td>
                <td class="has-text-centered"><?php echo $sex2 ?></td>
            </tr>
            <tr>
                <td class="has-text-centered">ประวัติการเคยได้รับเลือด</td>
                <td class="has-text-centered"><?php echo $blood2 ?></td>
            </tr>
            <tr>
                <td class="has-text-centered">รายละเอียดการได้รับเลือด</td>
                <td class="has-text-centered"><?php echo $objResult['bloodhave']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">ประวัติการบริจาคเลือด</td>
                <td class="has-text-centered"><?php echo $goblood2 ?></td>
            </tr>
            <tr>
                <td class="has-text-centered">รายละเอียดการบริจาคเลือด</td>
                <td class="has-text-centered"><?php echo $objResult['gobloodhave']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">ทานมังสวิรัติ</td>
                <td class="has-text-centered"><?php echo $masa2 ?></td>
            </tr>
            <tr>
                <td class="has-text-centered">อาการ</td>
                <td class="has-text-centered"><?php echo $objResult['masahave']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">คนในครอบครัวเป็นธาลัสซีเมีย</td>
                <td class="has-text-centered"><?php echo $fatarus2 ?></td>
            </tr>
            <tr>
                <td class="has-text-centered">รายละเอียดของธาลัสซีเมีย</td>
                <td class="has-text-centered"><?php echo $objResult['fatarushave']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">ช่องทางการติดต่อกลับ</td>
                <td class="has-text-centered"><?php echo strlen($ccomeback) ?></td>
            </tr>
            <tr>
                <td class="has-text-centered">Email</td>
                <td class="has-text-centered"><?php echo $objResult['inputmail']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">LINE ID</td>
                <td class="has-text-centered"><?php echo $objResult['inputline']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">ที่อยู่</td>
                <td class="has-text-centered"><?php echo $objResult['inputadd']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">DCIP</td>
                <td class="has-text-centered"><?php echo $objResult['DCIP']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">MCV</td>
                <td class="has-text-centered"><?php echo $objResult['MCV']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">RBC</td>
                <td class="has-text-centered"><?php echo $objResult['RBC']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">Anisocytasis</td>
                <td class="has-text-centered"><?php echo $objResult['Anisocytasis']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">รายละเอียด Anisocytasis</td>
                <td class="has-text-centered"><?php echo $objResult['Anisocytasishave']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">poikilocytosis</td>
                <td class="has-text-centered"><?php echo $objResult['poikilocytosis']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">รายละเอียดอาการ poikilocytosis</td>
                <td class="has-text-centered"><?php echo $objResult['poikilocytosishave']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">inclusion</td>
                <td class="has-text-centered"><?php echo $objResult['inclusion']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">HbH</td>
                <td class="has-text-centered"><?php echo $objResult['Hbh']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">HB</td>
                <td class="has-text-centered"><?php echo $objResult['HB']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">ข้อเสนอแนะ</td>
                <td class="has-text-centered"><?php echo $objResult['comment']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">ผลลัพธ์ของคุณ</td>
                <td class="has-text-centered"><?php echo $objResult['result']?></td>
            </tr>
            <tr>
                <td class="has-text-centered">ลงชื่อโดย</td>
                <td class="has-text-centered"><?php echo $nameprint;?></td>
            </tr>
        </table>
        <div id="non-printable" align="center">  
            
        </div>
    <?php mysqli_close($con); ?>
        </div>

        <div class="column is-2" style="background-color:#f7f8f9"></div>
    </div>

<script>
    window.print();
</script>
    
</div>
</body>
</html>