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

<body>
  <?php
    $name = $_GET['name'];
    $id = $_GET['id'];
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
      
  <form action="checkresult.php" method="post">
    <div class="container">
      <div class="notification">
        <center>กรุณากรอกข้อมูลของ&nbsp; <?php echo $name; ?></center>
      </div>
      <div class="columns is-mobile">
        <div class="column" style="background-color:#f7f8f9">
        </div>
        <div class="column" style="background-color:#f7f8f9">
          <div>
            <div class="field">
              <label class="label">DCIP</label>
              <div class="control">
                <div class="select">
                  <select name="DCIP">
                    <option value="positive">Positive</option>
                    <option value="negative">Negative</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="field">
              <label class="label">MCV</label>
              <input class="input" type="number" name="MCV" min="0" max="200" step="0.1" placeholder="กรุณากรอกเป็นตัวเลข" required>
            </div>

            

            <div class="field">
            <label class="label">Normochromic Normocytic (RBC)</label>
              <div class="control">
                <label class="radio">
                  <input type="radio" name="RBC" value="true">
                  Yes
                </label>
                <label class="radio">
                  <input type="radio" name="RBC" value="false">
                  No
                </label>
              </div>
            </div>

            <div class="field">
              <label class="label">Anisocytasis</label>
              <div class="control">
                <div class="select">
                  <select name="Anisocyfosis">
                    <option value="0">0</option>
                    <option value="1">1+</option>
                    <option value="2">2+</option>
                    <option value="3">3+</option>
                    <option value="4">4+</option>
                  </select>
                </div>
                <div>
                  <input class="input" type="text" name="haveinani" placeholder="กรุณากรอกลักษณะที่พบ">
                </div>
              </div>
            </div>

            <div class="field">
              <label class="label">Poikilocytosis </label>
              <div class="control">
                <div class="select">
                  <select name="Poikilocytosis">
                    <option value="0">0</option>
                    <option value="1">1+</option>
                    <option value="2">2+</option>
                    <option value="3">3+</option>
                    <option value="4">4+</option>
                  </select>
                </div>
                <div>
                  <input class="input" type="text" name="havepoiki" placeholder="กรุณากรอกลักษณะที่พบ">
                </div>
              </div>
            </div>

            <div class="field">
              <label class="label">Inclusion body</label>
              <div class="control">
                <div class="select">
                  <select name="body">
                    <option value="NotDone">Not Done</option>
                    <option value="Done">Done</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="field">
              <label class="label">HbH</label>
              <div class="control">
                <div class="select">
                  <select name="HBH">
                    <option value="NotFound">Not Found</option>
                    <option value="Found">Found</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="field">
              <label class="label">HB</label>
              <input class="input" type="number" name="HB" min="0" max="50" step="0.1" placeholder="กรุณากรอกเป็นตัวเลข" required>
            </div>

            <div class="field">
              <label class="label">ข้อเสนอแนะ</label>
              <div class="control">
                <textarea class="textarea" name="comment" placeholder="กรอกข้อเสนอแนะได้ที่ตรงนี้"></textarea>
              </div>
            </div>

            <div class="field is-grouped">
              <div class="control">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <button class="button is-link">Submit</button>
              </div>
              <div class="control">
                <button class="button is-text">Cancel</button>
              </div>
            </div>
          </div>
        </div>
        <div class="column" style="background-color:#f7f8f9">
        </div>
      </div>
    </div>
  </form>
</body>

</html>
<?php 
  }
  else{
    header( "location: index.html" );
  };
?>