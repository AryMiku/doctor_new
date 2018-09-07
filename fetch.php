<?php
//fetch.php
include 'config.php';
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($con, $_POST["query"]);
 $query = "
  SELECT * FROM people 
  WHERE HN LIKE '%".$search."%'
  OR id LIKE '%".$search."%'
  OR namethai LIKE '%".$search."%'
  OR age LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM people
 ";
}
$result = mysqli_query($con, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
    <tr>
     <th width="100"><div align="center">HN</div></th>
     <th width="300"><div align="center">เลขบัตรประชาชน</div></th>
     <th width="350"><div align="center">ชื่อ - นามสกุล</div></th>
     <th width="100"><div align="center">อายุ</div></th>
     <th width="10"><div align="center">เพศ</div></th>
     <th width="150"><div align="center">ตรวจข้อมูล</div></th>
     <th width="10"><div align="center">ลบข้อมูล</div></th>
     <th width="10"><div align="center">สถานะ</div></th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
    if($row["checkcheck"] == 'true'){
        $a = "<div align='center' style='background-color:#51ff65'>ตรวจสอบแล้ว</div>";
    }
    else{
        $a = "<div align='center' style='background-color:red'>ยังไม่ตรวจสอบ</div>";
    }
  $output .= '
   <tr>
    <td><div align="center">'.$row["HN"].'</div></td>
    <td><div align="center">'.$row["id"].'</div></td>
    <td><div align="center">'.$row["namethai"].'</div></td>
    <td><div align="center">'.$row["age"].'</div></td>
    <td><div align="center">'.$row["sex"].'</div></td>
    <td><div align="center"><a onclick="testupdate('.$row["id"].')">'.'แก้ไข'.'</a></div></td>
    <td><div align="center"><a onclick="testdelete('.$row["id"].')">'.'ลบข้อมูล'.'</a></div></td>
    <td>'.$a.'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>