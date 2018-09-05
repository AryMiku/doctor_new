function testadduser (){
    var a = '';
    swal.mixin({
        input: 'text',
        confirmButtonText: 'Next &rarr;',
        showCancelButton: true,
        progressSteps: ['1', '2']
      }).queue([
        {
          title: 'UserName ใหม่ที่ต้องการเพิ่ม'
        },
        'Password ใหม่ที่ต้องการเพิ่ม'
      ]).then((result) => {
        a = result.value;
        if (result.value) {
          swal({
            title: 'All done!',
            html:
              'UserName และ Password (โปรดตรวจสอบความถูกต้อง): <pre><code>' +
                'UserName : ' + result.value[0] + '<br>Password : ' + result.value[1] +  
              '</code></pre>',
            confirmButtonText: 'Confirm',
            showCancelButton: true
          }).then((value)=>{
              if(value.value == true){
                var str = Math.random();
                var datastring = 'str'+str + '&username='+result.value[0] +
                '&password='+result.value[1];
                $.ajax({
                    type:'POST',
                    url:'adduser.php',
                    data: datastring,
                    success:function(){
                        swal(
                            'Complete',
                            'เพิ่มข้อมูลเสร็จสิ้น',
                            'success'
                        )
                    }
                });
              }
              else{
                swal('เป็นเท็จ')
              }
          })
        }
        console.log(a[0]);
      })
}

