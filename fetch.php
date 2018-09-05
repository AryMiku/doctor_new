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
   <table class="table table bordered">
    <tr>
     <th>HN</th>
     <th>เลขบัตรประชาชน</th>
     <th>ชื่อ - นามสกุล</th>
     <th>อายุ</th>
     <th>เพศ</th>
     <th>ตรวจข้อมูล</th>
     <th>ลบข้อมูล</th>
     <th>สถานะ</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
    if($row["HN"] == "1"){
        $a = "<div style='background-color:green'>dfdfd</div>";
    }
    else{
        $a = "<div style='background-color:red'>dfdfd</div>";
    }
  $output .= '
   <tr>
    <td>'.$row["HN"].'</td>
    <td>'.$row["id"].'</td>
    <td>'.$row["namethai"].'</td>
    <td>'.$row["age"].'</td>
    <td>'.$row["sex"].'</td>
    <td>'.'ตรวจสอบข้อมูล'.'</td>
    <td><a onclick="testdelete('.$row["id"].')">'.'ลบข้อมูล'.'</a></td>
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