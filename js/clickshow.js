var a = 1,b=1,c=1,d=1;

function clickemail() {
    if(a == 1){
        document.getElementById("email").innerHTML = "<input type='email' class='input' name='inputmail' placeholder='กรุณากรอก Email' required>";
        a = 0
        }
    else {
      document.getElementById("email").innerHTML = "<input type='hidden'>";
      a = 1
    }
  }

  function clickline() {
    if(b == 1){
        document.getElementById("line").innerHTML = "<input type='text' class='input' name='inputline' placeholder='กรุณากรอก LINE ID' required>";
        b = 0
        }
    else {
      document.getElementById("line").innerHTML = "<input type='hidden'>";
      b = 1
    }
  }

  function clickpost() {
    if(c == 1){
        document.getElementById("post").innerHTML = "<input type='text' class='input' name='inputadd' placeholder='กรุณากรอกที่อยู่ของคุณ' required>";
        c = 0
        }
    else {
      document.getElementById("post").innerHTML = "<input type='hidden'>";
      c = 1
    }
  }