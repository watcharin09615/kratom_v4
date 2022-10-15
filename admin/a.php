<meta charset="utf-8">
<?php
include('../condb.php');


$type_iduser = $_POST['id_user'];
$type_species = $_POST['species'];
$type_quantity = $_POST['qty'];
$type_address = $_POST['address'];
$type_province = $_POST['provinces'];
$type_subarea = $_POST['districts'];
$type_area = $_POST['amphures'];
$type_zip_code = $_POST['zip_code'];
$type_tel = $_POST['tel'];


  $check = "SELECT * FROM petition WHERE username = '$a_user'";
  $result1 = mysqli_query($con, $check) or die(mysqli_error($con));
  $num=mysqli_num_rows($result1);

  if($num > 0)
  {
  echo "<script>";
  echo "alert(' Username นี้มีผู้ใช้งานแล้วกรุณาเปลี่ยน Username !');";
  echo "window.history.back();";
  echo "</script>";
  }else{
    if($a_pass1 != $a_pass2){
      echo "<script type='text/javascript'>";
      echo "alert('password ไม่ตรงกัน กรุณาใส่่ใหม่อีกครั้ง ');";
      echo "window.history.back();";
      echo "</script>";
    }else{
    $sql = "INSERT INTO `user`(`username`, `password`, `name`,`lastname`, `user_type`) VALUES ('$a_user','".md5($a_pass1)."','$a_name','$a_lastname','2')";
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
    mysqli_close($con);
    }
    if($result){
    echo "<script type='text/javascript'>";
    echo "alert('ลงทะเบียนสำเร็จ');";
    echo "window.location = 'memberadmin.php'; ";
    echo "</script>";
    }else{
    echo "<script type='text/javascript'>";
    echo "window.history.back();";
    echo "</script>";
    }
  }
?>