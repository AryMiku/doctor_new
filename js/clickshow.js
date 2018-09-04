function clickemail() {
    if(document.getElementById("comback1").checked){
        document.getElementById("email").innerHTML = "<input type='email' class='input' name='inputmail' placeholder='กรุณากรอก Email' required>";
        document.insert_form.comback1.value = 'email';
        }
    else {
      document.getElementById("email").innerHTML = "<input type='hidden'>";
      document.insert_form.comback1.value = '';
    }
  }

  function clickline() {
    if(document.getElementById("comback2").checked){
        document.getElementById("line").innerHTML = "<input type='text' class='input' name='inputline' placeholder='กรุณากรอก LINE ID' required>";
        document.insert_form.comback1.value = 'line';
        }
    else {
      document.getElementById("line").innerHTML = "<input type='hidden'>";
      document.insert_form.comback1.value = '';
    }
  }

  function clickpost() {
    if(document.getElementById("comback3").checked){
        document.getElementById("post").innerHTML = "<input type='text' class='input' name='inputadd' placeholder='กรุณากรอกที่อยู่ของคุณ' required>";
        document.insert_form.comback1.value = 'post';
        }
    else {
      document.getElementById("post").innerHTML = "<input type='hidden'>";
      document.insert_form.comback1.value = '';
    }
  }