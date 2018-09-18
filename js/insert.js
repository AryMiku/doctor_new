function insert(){
    var namethai = document.insert_form.namethai.value;
    var nameeng = document.insert_form.nameeng.value;
    var HN = document.insert_form.HN.value;
    var age = document.insert_form.age.value;
    var sex = document.insert_form.sex.value;
    var ID = document.insert_form.ID.value;
    var blood = document.insert_form.blood.value;
    var bloodhave = document.insert_form.bloodhave.value;
    var goblood = document.insert_form.goblood.value;
    var gobloodhave = document.insert_form.gobloodhave.value;
    var masa = document.insert_form.masa.value;
    var masahave = document.insert_form.masahave.value;
    var fatarus = document.insert_form.fatarus.value;
    var fatarushave = document.insert_form.fatarushave.value;
    try {
        var inputmail = document.insert_form.inputmail.value;
        var comback1 = 'Email';
    }
    catch(err) {
        var inputmail = '';
        var comback1 = '';
    }
    try {
        var inputline = document.insert_form.inputline.value;
        var comback2 = 'Line';
    }
    catch(err) {
        var inputline = '';
        var comback2 = '';
    }
    try {
        var inputadd = document.insert_form.inputadd.value;
        var comback3 = 'thaipost';
    }
    catch(err) {
        var inputadd = '';
        var comback3 = '';
    }
    if(document.getElementById("comback4").checked){
        var comback4 = 'รอรับผล';
    }
    else{
        var comback4 = '';
    }
    var comback = comback1 + ' ' + comback2 + ' '+ comback3 + ' ' + comback4;
    if(namethai == "" || HN == "" || ID == ""){
        swal(
            'ผิดพลาด!',
            'คุณยังไม่กรอกชื่อ-นามสกุล หรือ บัตรประชน หรือ HN ของคุณ',
            'error'
          );
    }
    else{
        var str = Math.random();
        var datastring = 'str'+str + '&namethai='+namethai +
        '&nameeng='+nameeng + '&HN='+ HN + '&age='+ age + '&sex='+ sex +
        '&ID='+ID + '&blood='+ blood + '&bloodhave='+ bloodhave + '&goblood='+ goblood +
        '&gobloodhave='+ gobloodhave + '&masa='+ masa + '&masahave='+ masahave +
        '&fatarus='+ fatarus + '&fatarushave='+ fatarushave + '&fatarushave='+ fatarushave + '&comback1='+ comback1 + 
        '&comback2='+ comback2 + '&comback3='+ comback3 + '&comback4='+ comback4 + '&comback='+ comback + 
        '&inputmail='+ inputmail + '&inputline='+ inputline + '&inputadd='+ inputadd;
        $.ajax({
            type:'POST',
            url:'API_Insert.php',
            data: datastring,
            success:function(){
                swal(
                    'Complete',
                    'เพิ่มข้อมูลเสร็จสิ้น',
                    'success'
                )
                document.insert_form.namethai.value = '';
                document.insert_form.nameeng.value = '';
                document.insert_form.HN.value = '';
                document.insert_form.age.value = '';
                document.insert_form.sex.value = 'male';
                document.insert_form.ID.value = '';
                document.getElementById("blood").checked = false;
                document.getElementById("blood2").checked = false;
                document.insert_form.bloodhave.value = '';
                document.getElementById("goblood").checked = false;
                document.getElementById("goblood2").checked = false;
                document.insert_form.gobloodhave.value = '';
                document.getElementById("masa").checked = false;
                document.getElementById("masa2").checked = false;
                document.insert_form.masahave.value = '';
                document.getElementById("fatarus").checked = false;
                document.getElementById("fatarus2").checked = false;
                document.getElementById("fatarus3").checked = false;
                document.insert_form.fatarushave.value = '';
                if(document.getElementById("comback1").checked){
                    document.insert_form.inputmail.value = '';
                }
                if(document.getElementById("comback2").checked){
                    document.insert_form.inputline.value = '';
                }
                if(document.getElementById("comback3").checked){
                    document.insert_form.inputadd.value = '';
                }
                document.getElementById("comback1").checked = false;
                document.getElementById("comback2").checked = false;
                document.getElementById("comback3").checked = false;
                document.getElementById("comback4").checked = false;
                document.getElementById("email").innerHTML = "<input type='hidden'>";
                document.getElementById("line").innerHTML = "<input type='hidden'>";
                document.getElementById("post").innerHTML = "<input type='hidden'>";
                document.getElementById("nameeiei").focus();
                $( "#closeei" ).trigger( "click" );
            }
        });
    }

    

    
}