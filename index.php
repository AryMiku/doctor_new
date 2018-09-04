<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>หน้าหลัก</title>
    <script src="js/clickshow.js"></script>
    <script src="js/login.js"></script>
    <script src="js/insert.js"></script>
    <script src="js/all.js"></script>
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
  <div class="container">
        <div style="margin: 6%">
            <div class="columns">
                <div class="column">
                        <a id="btn" class="button is-primary is-outlined" style="width: 500px;height: 500px; font-size: 100px;">Register</a>
                </div>
                <div class="column">
                        <a id="btn2"  class="button is-info is-outlined" style="width: 500px;height: 500px; font-size: 100px;">Search</a>
                </div>
            </div>
            <div class="columns">
                    <div class="column has-text-centered">
                        <h1 style="font-size: 25px; margin-left: -50px">สำหรับลงทะเบียนผู้ป่วย</h1>
                    </div>
                    <div class="column has-text-centered">
                        <h1 style="font-size: 25px; margin-left: -50px; color: red;">!! เฉพาะเจ้าหน้าที่ </h1>
                    </div>
                </div>
        </div>

        <div class="modal" id="myModal2">
          <div class="modal-background"></div>
          <div class="modal-card">
            <header class="modal-card-head">
              <p class="modal-card-title">Login</p>
              <button class="delete" aria-label="close" data-bulma-modal="close"></button>
            </header>
            <section class="modal-card-body">
            <form name="myform" action="" method="post">
            <div class="field">
              <div class="control">
                Username : 
                <input class="input is-large" type="text" placeholder="Username" name="username">
              </div>
            </div>

            <div class="field">
              <div class="control">
                Password : 
                <input class="input is-large" type="password" name="password" placeholder="Password">
              </div>
            </div>
            </form>
            </section>
            <footer class="modal-card-foot">
                <button class="button is-success" onclick="login()">Login</button>
                <button class="button" data-bulma-modal="close">Cancel</button>
            </footer>
          </div>
        </div>

        <div class="modal" id="myModal" name="myModal">
            <div class="modal-background"></div>
            <div class="modal-card"  style="width:1000px">
                <header class="modal-card-head">
                <p class="modal-card-title">กรอกข้อมูล</p>
                <button class="delete" aria-label="close" data-bulma-modal="close"></button>
                </header>
                <section class="modal-card-body">
                <form method="POST" name="insert_form">
        <div class="field">
          <label class="label">ชื่อ - นามสกุล ภาษาไทย</label>
          <input class="input" type="text" placeholder="ex. นายใจดี สุดโลก" name="namethai" id="nameeiei">
        </div>

        <div class="field">
          <label class="label">ชื่อ - นามสกุล ภาษาอังกฤษ</label>
          <input class="input" type="text" placeholder="ex. jaidee suklok" name="nameeng">
        </div>

        <div class="field">
          <label class="label">HN</label>
          <input class="input" type="text" placeholder="กรุณากรอกข้อมูล" name="HN" required>
        </div>

        <div class="field">
          <label class="label">อายุ</label>
          <input class="input" type="number" name="age" placeholder="กรุณากรอกข้อมูล">
        </div>

        <div class="field">
          <label class="label">เพศ</label>
          <div class="control">
            <div class="select">
              <select name="sex">
                <option value="male">ชาย</option>
                <option value="female">หญิง</option>
              </select>
            </div>
          </div>
        </div>

        <div class="field">
          <label class="label">เลขที่บัตรประชาชน</label>
          <input class="input" type="text" placeholder="กรุณากรอกข้อมูล" name="ID" maxlength="13" required>
        </div>

        <div class="field">
          <label class="label">ประวัติการเคยได้รับเลือด</label>
          <div class="control">
            <label class="radio">
              <input type="radio" name="blood" id="blood" value="have"> เคย
            </label>
            <label class="radio">
              <input type="radio" name="blood" id="blood2" value="nothave"> ไม่เคย
            </label>
            <input class="input" type="text" name="bloodhave" placeholder="ระบุ">
          </div>
        </div>

        <div class="field">
          <label class="label">ประวัติการบริจาคเลือด</label>
          <div class="control">
            <label class="radio">
              <input type="radio" name="goblood" id="goblood" value="have"> เคย
            </label>
            <label class="radio">
              <input type="radio" name="goblood" id="goblood2" value="nohave"> ไม่เคย
            </label>
            <input class="input" type="text" name="gobloodhave" placeholder="ระบุ">
          </div>
        </div>

        <div class="field">
          <label class="label">ทานมังสวิรัติ</label>
          <div class="control">
            <label class="radio">
              <input type="radio" name="masa" id="masa" value="eat"> ทาน
            </label>
            <label class="radio">
              <input type="radio" name="masa" id="masa2" value="noteat"> ไม่ทาน
            </label>
            <input class="input" type="text" name="masahave" placeholder="ระบุ">
          </div>
        </div>

        <div class="field">
          <label class="label">คนในครอบครัวเป็นธาลัสซีเมีย</label>
          <div class="control">
            <label class="radio">
              <input type="radio" name="fatarus" id="fatarus" value="notknow"> ไม่ทราบ
            </label>
            <label class="radio">
              <input type="radio" name="fatarus" id="fatarus2" value="no"> ไม่ใช่
            </label>
            <label class="radio">
              <input type="radio" name="fatarus" id="fatarus3" value="other"> อื่นๆ
            </label>
            <input class="input" type="text" name="fatarushave" placeholder="ระบุ">
          </div>
        </div>

        <div class="field">
          <label class="label" ่>ช่องทางการตอบกลับ</label>
          <div class="control">
            <label class="checkbox">
              <input type="checkbox" name="comback1" id="comback1" value="email" onclick="a = clickemail()"> E-mail &nbsp;&nbsp;
            </label>
            <label class="checkbox">
              <input type="checkbox" name="comback2" id="comback2" value="line" onclick="b = clickline()"> LINE &nbsp;&nbsp;
            </label>
            <label class="checkbox">
              <input type="checkbox" name="comback3" id="comback3" value="thaipost" onclick="c = clickpost()"> ไปรณีย์ &nbsp;&nbsp;
            </label>
            <label class="checkbox">
              <input type="checkbox" name="comback4" id="comback4" value="day"> รอรับผลวันนี้ &nbsp;&nbsp;
            </label>
          </div>
        </div>
        <div class="field">
          <div id="email"></div>
          <div id="line"></div>
          <div id="post"></div>
        </div>
        <br>
        <div class="field is-grouped">
        </form>
                </section>
                <footer class="modal-card-foot">
                <button class="button is-success" onclick="insert()">บันทึกข้อมูล</button>
                <button class="button" data-bulma-modal="close" id="closeei">ยกเลิก</button>
                </footer>
            </div>
        </div>

        <div class="notification">
            <b>วิธีการลงทะเบียน</b> <br>
            - กดที่ปุ่ม Register > กรอกข้อมูลให้ครบถ้วน > กดที่ปุ่ม Submit
        </div>
      </div>
  </div>

      <script>
        class BulmaModal {
            constructor(selector) {
                this.elem = document.querySelector(selector)
                this.close_data()
            }
        
            show() {
                this.elem.classList.toggle('is-active')
                this.on_show()
            }
        
            close() {
                this.elem.classList.toggle('is-active')
                this.on_close()
            }
        
            close_data() {
                var modalClose = this.elem.querySelectorAll("[data-bulma-modal='close'], .modal-background")
                var that = this
                modalClose.forEach(function(e) {
                    e.addEventListener("click", function() {
                        
                        that.elem.classList.toggle('is-active')

                        var event = new Event('modal:close')

                        that.elem.dispatchEvent(event);
                    })
                })
            }
        
            on_show() {
                var event = new Event('modal:show')
            
                this.elem.dispatchEvent(event);
            }
        
            on_close() {
                var event = new Event('modal:close')
            
                this.elem.dispatchEvent(event);
            }
        
            addEventListener(event, callback) {
                this.elem.addEventListener(event, callback)
            }
        }

        var btn = document.querySelector("#btn")
        var mdl = new BulmaModal("#myModal")

        btn.addEventListener("click", function () {
            mdl.show()
        })

        mdl.addEventListener('modal:show', function() {
            console.log("opened")
        })

        mdl.addEventListener("modal:close", function() {
            console.log("closed")
        })
        
        var btn2 = document.querySelector("#btn2")
        var mdl2 = new BulmaModal("#myModal2")

        btn2.addEventListener("click", function () {
            mdl2.show()
        })

        mdl2.addEventListener('modal:show', function() {
            console.log("opened")
        })

        mdl2.addEventListener("modal:close", function() {
            console.log("closed")
        })
        
    </script>
</body>
</html>