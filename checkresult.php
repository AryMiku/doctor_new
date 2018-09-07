<?php
// Start the session
session_start();
?>
<?php 
  if($_SESSION["super"] == "1" || $_SESSION["super"] == "0")
  {
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>กรอกประวัติ</title>
  <script src="js/clickshow.js"></script>
    <script src="js/login.js"></script>
    <script src="js/insert.js"></script>
    <script src="js/adduser.js"></script>
    <script src="js/all.js"></script>
    <script src="js/updateuser.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/sweetalert2.all.js"></script>
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="js/sweetalert2.js"></script>
    <script src="js/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="css/bulma.min.css">
    <link rel="stylesheet" href="css/sweetalert2.css">
    <link rel="stylesheet" href="css/sweetalert2.min.css">
</head>

<?php 
    error_reporting(0);
    $DCIP = $_POST['DCIP'];
    $MCV = $_POST['MCV'];
    $Anisocy = $_POST['Anisocyfosis'];
    $haveinani = $_POST['haveinani'];
    $Poiki = $_POST['Poikilocytosis'];
    $havepoiki = $_POST['havepoiki'];
    $HBH = $_POST['HBH'];
    $HB = $_POST['HB'];
    $RBC = $_POST['RBC'];
    $body = $_POST['body'];
    $comment = $_POST['comment'];
    $id = $_POST['id'];
    //echo $id;
    if($RBC == "true"){
        $RBC2 = "true";
    }
    else{
        $RBC2 = "false";
    }

    if($Anisocy == "0"){
        $Anisocy2 = "0";
    }
    else if($Anisocy == "1"){
        $Anisocy2 = "1+";
    }
    else if($Anisocy == "2"){
        $Anisocy2 = "2+";
    }
    else if($Anisocy == "3"){
        $Anisocy2 = "3+";
    }
    else if($Anisocy == "4"){
        $Anisocy2 = "4+";
    }

    if($Poiki == "0"){
        $Poiki2 = "0";
    }
    else if($Poiki == "1"){
        $Poiki2 = "1+";
    }
    else if($Poiki == "2"){
        $Poiki2 = "2+";
    }
    else if($Poiki == "3"){
        $Poiki2 = "3+";
    }
    else if($Poiki == "4"){
        $Poiki2 = "4+";
    }

    //ส่วนโชว์ผลลัพท์ทั้งหมด
    //echo "DCIP : $DCIP <br>";
    //echo "MCV : $MCV <br>";
    //echo "RBC : $RBC2 <br>";
    //echo "Anisocytasis : $Anisocy2 <br>";
    //echo "ลักษณะที่พบของ Anisocytasis : $haveinani <br>";
    //echo "Poikilocytosis : $Poiki2 <br>";
    //echo "ลักษณะที่พบของ Poikilocytosis : $havepoiki <br>";
    //echo "Inclusion Body : $body <br>";
    //echo "HbH : $HBH <br>";
    //echo "Hb : $HB <br>";
    //echo "ข้อแนะนำ : $comment <br>";

    ///

    if($DCIP == "positive"){ //ทำฝั่งซ้าย
        if($MCV >= 80){
            $text = "มีโอกาสเป็นพาหะธาลัสซีเมียชนิด Hemoglobin E";
            $texttext = "";
        }
        else{
            if($MCV >= 70 && $MCV <= 79){
                if($RBC == "true"){
                    $text = "มีโอกาสเป็นพาหะธาลัสซีเมียชนิด Hemoglobin E";
                    $texttext = "";
                }
                else{
                    if($Anisocy < 3 && $Poiki < 3){
                        $text = "มีโอกาสเป็นพาหะธาลัสซีเมียชนิด Hemoglobin E";
                        $texttext = "";
                    }
                    else{
                        if($body == "Done"){
                            if($HBH == "Found"){
                                $text = "เป็นโรคธาลัสซีเมียชนิด Hb H disease";
                                $texttext = "";
                            }
                            else{
                                $text = "เป็นโรคธาลัสซีเมียชนิดรุนแรง";
                                $texttext = "";
                            }
                        }
                        else{
                            $text = "เป็นโรคธาลัสซีเมียชนิดรุนแรง";
                            $texttext = "";
                        }
                    }
                }
            }
            else{
                if($MCV <= 69){
                    if($Anisocy < 3 && $Poiki < 3){
                        $text = "มีโอกาสเป็นพาหะธาลัสซีเมียชนิด Hemoglobin E";
                        $texttext = "";
                    }
                    else{
                        if($body == "Done"){
                            if($HBH == "Found"){
                                $text = "เป็นโรคธาลัสซีเมียชนิด Hb H disease";
                                $texttext = "";
                            }
                            else{
                                $text = "เป็นโรคธาลัสซีเมียชนิดรุนแรง";
                                $texttext = "";
                            }
                        }
                        else{
                            $text = "เป็นโรคธาลัสซีเมียชนิดรุนแรง";
                            $texttext = "";
                        }
                    }
                }
            }
        }
    }
    else{ //ทำฝั่งขวา
        if($MCV >= 79){
            if($HB >= 12){
                $text = "ปกติ";
                $texttext = "";
            }
            else{
                $text = "มีภาวะซีดเล็กน้อย";
                $texttext = "";
            }
        }
        else{
            if($MCV >= 72 && $MCV <= 78.9){
                if($Anisocy < 3 && $Poiki < 3){
                    $text = "มีโอกาสเป็นพาหะธาลัสซีเมียหรือมีภาวะซีดเนื่องจากการพร่องธาตุเหล็ก";
                    $texttext = "";
                }
                else{
                    if($MCV < 72){
                        if($Anisocy < 3 && $Poiki < 3){
                            $text = "มีโอกาสเป็นพาหะธาลัสซีเมียหรือมีภาวะซีดเนื่องจากการพร่องธาตุเหล็ก";
                            $texttext = "";
                        }
                        else{
                            if($body == "Done"){
                                if($HBH == "Found"){
                                    $text = "เป็นโรคธาลัสซีเมียชนิด Hb H disease";
                                    $texttext = "";
                                }
                                else{
                                    $text = "เป็นโรคธาลัสซีเมียชนิดรุนแรง";
                                    $texttext = "";
                                }
                            }
                            else{
                                $text = "เป็นโรคธาลัสซีเมียชนิดรุนแรง";
                                $texttext = "";
                            }
                        }
                    }
                }
            }
            else{
                if($MCV < 72){
                    if($Anisocy < 3 && $Poiki < 3){
                        $text = "มีโอกาสเป็นพาหะธาลัสซีเมียหรือมีภาวะซีดเนื่องจากการพร่องธาตุเหล็ก";
                        $texttext = "";
                    }
                    else{
                        if($body == "Done"){
                            if($HBH == "Found"){
                                $text = "เป็นโรคธาลัสซีเมียชนิด Hb H disease";
                                $texttext = "";
                            }
                            else{
                                $text = "เป็นโรคธาลัสซีเมียชนิดรุนแรง";
                                $texttext = "";
                            }
                        }
                        else{
                            $text = "เป็นโรคธาลัสซีเมียชนิดรุนแรง";
                            $texttext = "";
                        }
                    }
                }
            }
        }
    }

?>

<body>

  <nav class="navbar ">
    <div class="navbar-brand">
      <a class="navbar-item">
        <img src="img/images.png" width="112" height="28">
      </a>
    </div>

            <div id="navMenubd-example" class="navbar-menu">
          <div class="navbar-end">
            <div class="navbar-item">
              <div class="field is-grouped">
                <p class="control">
                  <a class="button is-primary" onclick="gohome();">
                    <span class="icon">
                      <i class="fas fa-sign-out-alt"></i>
                    </span>
                    <span>ออกจากระบบ</span>
                  </a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </nav>

    <div class="container">
      <div class="notification">
        <center>ผลลัพธ์</center>
      </div>
      <div class="columns is-mobile">
        
        <div class="column" style="background-color:#f7f8f9">
          <div>
            <table class="table is-fullwidth">
               <tr>
                 <th class="has-text-centered">หัวข้อ</th>
                 <th class="has-text-centered">ผลลัพท์ที่ได้</th>
               </tr>
               <tr>
                 <td class="has-text-centered">DCIP</td>
                 <td class="has-text-centered"><?php echo $DCIP; ?></td>
               </tr>
               <tr>
                <td class="has-text-centered">MCV</td>
                <td class="has-text-centered"><?php echo $MCV; ?></td>
               </tr>
               <?php if($RBC2 == "true"){ ?><tr>
                <td class="has-text-centered">RBC</td>
                <td class="has-text-centered"> normocytic </td>
               </tr> <?php } ?>
               <tr>
                <td class="has-text-centered">Anisocytasis </td>
                <td class="has-text-centered"><?php echo $Anisocy2; ?></td>
               </tr>
               <tr>
                <td class="has-text-centered">ลักษณะที่พบของ Anisocytasis</td>
                <td class="has-text-centered"><?php echo $haveinani; ?></td>
               </tr>
               <tr>
                <td class="has-text-centered">Poikilocytosis</td>
                <td class="has-text-centered"><?php echo $Poiki2; ?></td>
               </tr>
               <tr>
                <td class="has-text-centered">ลักษณะที่พบของ Poikilocytosis</td>
                <td class="has-text-centered"><?php echo $havepoiki; ?></td>
               </tr>
               <tr>
                <td class="has-text-centered">Inclusion Body</td>
                <td class="has-text-centered"><?php echo $body; ?></td>
               </tr>
               <tr>
                <td class="has-text-centered">HbH</td>
                <td class="has-text-centered"><?php echo $HBH; ?></td>
               </tr>
               <tr>
                <td class="has-text-centered">Hb</td>
                <td class="has-text-centered"><?php echo $HB; ?></td>
               </tr>
               <tr>
                <td class="has-text-centered">ข้อแนะนำ</td>
                <td class="has-text-centered"><?php echo $comment; ?></td>
               </tr>
            </table>
        </div>
    </div>  
      </div>
      <div class="notification" style="margin: 40px;">
        <center>ผลลัพธ์ : <?php echo $text.$texttext; ?></center>
      </div>
    </div>
    <?php 
        $con=mysqli_connect("localhost","root","","doctor");
        // Check connection
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        mysqli_query($con,"SET NAMES UTF8");
        $strSQL = "update people set DCIP='$DCIP' ,MCV='$MCV' ,RBC='$RBC2' ,Anisocytasis='$Anisocy2' ,Anisocytasishave='$haveinani' ,poikilocytosis='$Poiki2' ,poikilocytosishave='$havepoiki' 
        ,inclusion='$body' ,Hbh='$HBH' ,HB='$HB' ,comment='$comment',result='$text',texttext='$texttext' where id='$id'";
        //echo $strSQL;
        $result = mysqli_query($con,$strSQL);
    ?>
</body>

</html>
<?php 
  }
  else{
    header( "location: index.html" );
  };
?>
