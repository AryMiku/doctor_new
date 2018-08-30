<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!-- Bulma Version 0.7.1-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.25.0/sweetalert2.all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.25.0/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.25.0/sweetalert2.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.25.0/sweetalert2.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.25.0/sweetalert2.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.25.0/sweetalert2.min.js"></script>
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body" id="formlogin">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">ลงชื่อเข้าใช้สู่ระบบ</h3>
                    <div class="box">
                        <figure class="avatar">
                            <img src="logo.jpg" width="128px" height="128px">
                        </figure>
                        <form name="myform" action="" method="post">
                            <div class="field">
                                <div class="control">
                                    <input class="input is-large" type="text" placeholder="Username" name="username" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input class="input is-large" type="password" name="password" placeholder="Password">
                                </div>
                            </div>
                            <input type="button" value="ลงชื่อเข้าใช้" class="button is-block is-info is-large is-fullwidth" onclick="login()"><br>
                            <input type="button" value="กลับหน้าหลัก" class="button is-block is-danger is-large is-fullwidth" onclick="goback()">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

<script>
    function login(){
        var username = document.myform.username.value;
        var password = document.myform.password.value;
        var str = Math.random();
        var datastring = 'str'+str + '&username='+username +
        '&password='+password;
        $.ajax({
            type:'POST',
            url:'checklogin.php',
            data: datastring,
            
            success:function(data){
                if(data==1){
                    swal(
                        'รหัสผ่านถูกต้อง',
                        'กดปุ่มเพื่อดำเนินการต่อ!',
                        'success'
                    ).then(function () {
                        location.href="index2.php";
                    });
                }
                else{
                    swal(
                        'รหัสผ่านไม่ถูกต้อง',
                        'กดปุ่มเพื่อดำเนินการต่อ!',
                        'error'
                    )
                }
            }
        });
    }

    function goback(){
        location.href="index.html";
    }


</script>

</html>