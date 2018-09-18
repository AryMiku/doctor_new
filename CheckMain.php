<?php
// Start the session
session_start();
?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Webslesson Tutorial</title>
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
 <nav class="navbar ">
        <div class="navbar-brand">
          <a class="navbar-item">
            <img src="img/images.png" width="112" height="28">
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
                <a class="navbar-item " href="CheckMain.php">
                  เช็คผลตรวจ
                </a>
                <a class="navbar-item " href="Check_InDayTime.php">
                  เช็คดูยอดของการลงทะเบียน
                </a>
                <?php if($_SESSION["super"] == "1"){ ?> <a class="navbar-item " onclick="testadduser()">
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
   <br />
   <div class="column">
    <h2 align="center">ค้นหาข้อมูล</h2>
   </div>
   <div class="form-group">
    <div class="column">
        <div class="field has-addons has-text-centered" style="margin-left:100px;">
            <div class="control">
                <input class="input" type="text" placeholder="ค้นหา" name="id" style="width:1000px" name="search_text" id="search_text">
            </div>
        </div>
    </div>
   </div>
   <br />
   <div id="result"></div>
  </div>
 </body>
</html>


<script>

    $(document).ready(function(){

        load_data();

        function load_data(query)
        {
            $.ajax({
            url:"fetch.php",
            method:"POST",
            data:{query:query},
            success:function(data)
            {
                $('#result').html(data);
            }
            });
        }
        $('#search_text').keyup(function(){
            var search = $(this).val();
            if(search != '')
            {
                load_data(search);
            }
            else
            {
                load_data();
            }
        });
    });

    function testdelete(id){
       

        swal({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!'
        }).then((result) => {
        if (result.value) {
            var str = Math.random();
            var datastring = 'str'+str + '&id='+id.toString();
            $.ajax({
                url:"delete.php",
                method:"POST",
                data:datastring,
                success:function(data){
                    swal(
                        'Suscess',
                        'ลบข้อมูลเรียบร้อย',
                        'success'
                    ).then((result)=>{
                        load_data();
                    })
                }
        });
        } else if (
            // Read more about handling dismissals
            result.dismiss === swal.DismissReason.cancel
        ) {
            swal(
            'Cancelled',
            'ข้อมูลของคุณยังไม่ถูกลบ',
            'error'
            )
        }
        })

        
    }

    function load_data(query)
        {
            $.ajax({
            url:"fetch.php",
            method:"POST",
            data:{query:query},
            success:function(data)
            {
                $('#result').html(data);
            }
            });
        }

    function testupdate(id){
        //swal(id.toString());
        window.open("EditProfile.php?id="+ id+ "", "_blank","width=1700,height=750");
    }



</script>