function update(){
    var namethai = document.update_form.namethai.value;
    var nameeng = document.update_form.nameeng.value;
    var HN = document.update_form.HN.value;
    var age = document.update_form.age.value;
    var sex = document.update_form.sex.value;
    var ID = document.update_form.ID.value;
    var blood = document.update_form.blood.value;
    var bloodhave = document.update_form.bloodhave.value;
    var goblood = document.update_form.goblood.value;
    var gobloodhave = document.update_form.gobloodhave.value;
    var masa = document.update_form.masa.value;
    var masahave = document.update_form.masahave.value;
    var fatarus = document.update_form.fatarus.value;
    var fatarushave = document.update_form.fatarushave.value;
    var inputmail = document.update_form.inputmail.value;
    var inputline = document.update_form.inputline.value;
    var inputadd = document.update_form.inputadd.value;
    var usercheck = document.update_form.usercheck.value;
    var checkcheck = document.update_form.checkcheck.value;
    if(usercheck == ""){
        swal(
            'ผิดพลาด!!',
            'กรุณากรอกชื่อผู้ตรวจสอบด้วย',
            'error'
          )
    }
    else{
        var str = Math.random();
        var datastring = 'str'+str + '&namethai='+namethai +
        '&nameeng='+nameeng + '&HN='+ HN + '&age='+ age + '&sex='+ sex +
        '&ID='+ID + '&blood='+ blood + '&bloodhave='+ bloodhave + '&goblood='+ goblood +
        '&gobloodhave='+ gobloodhave + '&masa='+ masa + '&masahave='+ masahave +
        '&fatarus='+ fatarus + '&fatarushave='+ fatarushave + '&fatarushave='+ fatarushave + 
        '&inputmail='+ inputmail + '&inputline='+ inputline + '&inputadd='+ inputadd + '&checkcheck='+ checkcheck + '&usercheck='+ usercheck;
        $.ajax({
            type:'POST',
            url:'updateuser.php',
            data: datastring,
            success:function(){
                let timerInterval
                swal({
                title: 'กำลังดำเนินการในส่วนต่อไป',
                html: 'กำลังพาไปหน้าต่อไปใน <strong></strong> วินาที.',
                timer: 1000,
                onOpen: () => {
                    swal.showLoading()
                    timerInterval = setInterval(() => {
                    swal.getContent().querySelector('strong')
                        .textContent = swal.getTimerLeft()
                    }, 100)
                },
                onClose: () => {
                    clearInterval(timerInterval)
                }
                }).then((result) => {
                if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.timer
                ) {
                    window.location.href = "check.php?id="+ID+"&name="+namethai+"";
                }
                })
            }
        });
    }
}

function gohome(){
    window.close()
    window.opener.location.reload();
}