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