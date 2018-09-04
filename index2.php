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
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
</head>
<body>
    <nav class="navbar ">
        <div class="navbar-brand">
          <a class="navbar-item">
            <img src="images.png" width="112" height="28">
          </a>
        </div>
    
        <div id="navMenubd-example" class="navbar-menu">
        <div class="navbar-start">
            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link  is-active" href="#">
                Menu
              </a>
              <div class="navbar-dropdown ">
                <a class="navbar-item " href="index2.php">
                    หน้าหลัก
                </a>
                <a class="navbar-item " href="checkpeople.html">
                  เช็คผลตรวจ
                </a>
                <a class="navbar-item " href="checkday.php">
                  เช็คดูยอดของการลงทะเบียน
                </a>
                <?php if($_SESSION["super"] == "1"){ ?> <a class="navbar-item " href="newuser.php">
                  เพิ่ม User ในระบบ
                </a> <?php } ?> 
              </div>
            </div>
          </div>
    
          <div class="navbar-end">
            <div class="navbar-item">
              <div class="field is-grouped">
                <p class="control">
                  <a class="button is-primary" href="index.php">
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
        <div style="margin: 6%">
            <div class="columns">
                <div class="column">
                        <a href="checkpeople.html" class="button is-primary is-outlined" style="width: 500px;height: 500px; font-size: 50px;">เช็คข้อมูลผู้ป่วย</a>
                </div>
                <div class="column">
                        <a href="checkday.php" class="button is-info is-outlined" style="width: 500px;height: 500px; font-size: 50px;">เช็คยอดลงทะเบียน</a>
                </div>
            </div>
      </div>
</body>
</html>
<?php 
  }
  else{
    header( "location: index.html" );
  };
?>
