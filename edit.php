<?php
// Start the session
session_start();
?>
<?php 
  if($_SESSION["super"] == "1" || $_SESSION["super"] == "0")
  {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <title>Document</title>
</head>
<body>
    <?php
            error_reporting(0);
            $id = $_GET['id'];
            //echo $id;
            $con=mysqli_connect("localhost","root","","doctor");
            mysqli_query($con,"SET NAMES UTF8");
            // Check connection
            if (mysqli_connect_errno())
            {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

            $strSQL = "SELECT * FROM people WHERE id = '".$_GET['id']."'";
            //echo $strSQL;
            $result = mysqli_query($con,$strSQL);
            $objResult = mysqli_fetch_array($result,MYSQLI_ASSOC);
            //echo $objResult["blood"];
            ?>
            
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
                      <i class="fas fa-home"></i>
                    </span>
                    <span>กลับสู่หน้าหลัก</span>
                  </a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </nav>


  <div class="container">
    <div class="notification" style="font-size: 50px">
      <center>กรอกข้อมูล</center>
    </div>
    <div class="columns is-mobile">
      <div class="column" style="background-color:#f7f8f9">

      </div>
      <div class="column" style="background-color:#f7f8f9">
        <form action="" method="POST" name="update_form">
        <div class="field">
          <label class="label">ชื่อ - นามสกุล ภาษาไทย</label>
          <input class="input" type="text" placeholder="ex. นายใจดี สุดโลก" name="namethai" value="<?php echo $objResult["namethai"]; ?>">
        </div>

        <div class="field">
          <label class="label">ชื่อ - นามสกุล ภาษาอังกฤษ</label>
          <input class="input" type="text" placeholder="ex. jaidee suklok" name="nameeng" value="<?php echo $objResult["nameeng"]; ?>">
        </div>

        <div class="field">
          <label class="label">HN</label>
          <input class="input" type="text" placeholder="กรุณากรอกข้อมูล" name="HN" required value="<?php echo $objResult["HN"]; ?>">
        </div>

        <div class="field">
          <label class="label">อายุ</label>
          <input class="input" type="number" name="age" placeholder="กรุณากรอกข้อมูล" value="<?php echo $objResult["age"]; ?>">
        </div>

        <div class="field">
          <label class="label">เพศ</label>
          <div class="control">
            <div class="select">
              <select name="sex">
                <option value="male" <?php if($objResult["sex"] == 'male') echo 'selected'; ?>>ชาย</option>
                <option value="female" <?php if($objResult["sex"] == 'female') echo 'selected'; ?>>หญิง</option>
              </select>
            </div>
          </div>
        </div>

        <div class="field">
          <label class="label">เลขที่บัตรประชาชน</label>
          <input class="input" type="text" placeholder="กรุณากรอกข้อมูล" name="ID" maxlength="13" required value="<?php echo $objResult["id"]; ?> ">
        </div>

        <div class="field">
          <label class="label">ประวัติการเคยได้รับเลือด</label>
          <div class="control">
            <label class="radio">
              <input type="radio" name="blood" value="have" <?php if($objResult["blood"] == 'have') echo 'checked=checked';?>> เคย
            </label>
            <label class="radio">
              <input type="radio" name="blood" value="nothave" <?php if($objResult["blood"] == 'nothave') echo 'checked=checked';?>> ไม่เคย
            </label>
            <input class="input" type="text" name="bloodhave" placeholder="ระบุอาการ" value="<?php echo $objResult["bloodhave"]; ?>">
          </div>
        </div>

        <div class="field">
          <label class="label">ประวัติการบริจาคเลือด</label>
          <div class="control">
            <label class="radio">
              <input type="radio" name="goblood" value="have" <?php if($objResult["goblood"] == 'have') echo 'checked=checked';?>> เคย
            </label>
            <label class="radio">
              <input type="radio" name="goblood" value="nohave" <?php if($objResult["goblood"] == 'nohave') echo 'checked=checked';?>> ไม่เคย
            </label>
            <input class="input" type="text" name="gobloodhave" placeholder="ระบุอาการ" value="<?php echo $objResult["gobloodhave"]; ?>">
          </div>
        </div>

        <div class="field">
          <label class="label">ทานมังสวิรัติ</label>
          <div class="control">
            <label class="radio">
              <input type="radio" name="masa" value="eat" <?php if($objResult["masa"] == 'eat') echo 'checked=checked';?>> ทาน
            </label>
            <label class="radio">
              <input type="radio" name="masa" value="noteat" <?php if($objResult["masa"] == 'noteat') echo 'checked=checked';?>> ไม่ทาน
            </label>
            <input class="input" type="text" name="masahave" placeholder="ระบุอาการ" value="<?php echo $objResult["masahave"]; ?>">
          </div>
        </div>

        <div class="field">
          <label class="label">คนในครอบครัวเป็นธาลัสซีเมีย</label>
          <div class="control">
            <label class="radio">
              <input type="radio" name="fatarus" value="notknow" <?php if($objResult["fatarus"] == 'notknow') echo 'checked=checked';?>> ไม่ทราบ
            </label>
            <label class="radio">
              <input type="radio" name="fatarus" value="no" <?php if($objResult["fatarus"] == 'no') echo 'checked=checked';?>> ไม่ใช่
            </label>
            <label class="radio">
              <input type="radio" name="fatarus" value="other" <?php if($objResult["fatarus"] == 'other') echo 'checked=checked';?>> อื่นๆ
            </label>
            <input class="input" type="text" name="fatarushave" placeholder="ระบุอาการ" value="<?php echo $objResult["fatarushave"]; ?>">
          </div>
        </div>

        <div class="field">
          <label class="label" ่>ช่องทางการตอบกลับ</label>
          <!-- <div class="control">
            <label class="checkbox">
              <input type="checkbox" name="comback1" value="email" onclick="clickemail()"> E-mail &nbsp;&nbsp;
            </label>
            <label class="checkbox">
              <input type="checkbox" name="comback2" value="line" onclick="clickline()"> LINE &nbsp;&nbsp;
            </label>
            <label class="checkbox">
              <input type="checkbox" name="comback3" value="thaipost" onclick="clickpost()"> ไปรณีย์ &nbsp;&nbsp;
            </label>
            <label class="checkbox">
              <input type="checkbox" name="comback4" value="day"> รอรับผลวันนี้ &nbsp;&nbsp;
            </label>
          </div> -->
        </div>
        <div class="field">
        <label class="label">Email</label>
          <input type='email' class='input' name='inputmail' placeholder='Email' value='<?php echo $objResult[inputmail]; ?>'>
          <label class="label">LINE</label>
          <input type='text' class='input' name='inputline' placeholder='กรุณากรอก LINE ID' value='<?php echo $objResult[inputline]; ?>'>
          <label class="label">ที่อยู่ของคุณ</label>
          <input type='text' class='input' name='inputadd' placeholder='กรุณากรอกที่อยู่ของคุณ' value='<?php echo $objResult[inputadd]; ?>'>
        </div>
        
        <div class="field">
          <label class="label" style="color : red;">ผู้ตรวจสอบข้อมูล</label>
          <input class="input" type="text" placeholder="กรุณากรอกข้อมูล" name="usercheck" value='<?php echo $objResult[usercheck]; ?>'>
          <input type="hidden" value="true" name="checkcheck">
        </div>
        <br>
      </form>
      <div class="field is-grouped">
          <div class="control">
            <button class="button is-success" onclick="update()">ตกลง</button>
          </div>
          <div class="control">
            <button class="button is-text" onclick="update()">Cancel</button>
          </div>
        </div>
      </div>
      <div class="column" style="background-color:#f7f8f9">
      </div>
    </div>
  </div>


  <script src='https://use.fontawesome.com/releases/v5.0.0/js/all.js'></script>


  <?php
    mysqli_close($con);
    ?>

</body>
</html>
<?php 
  }
  else{
    header( "location: index.html" );
  };
?>
