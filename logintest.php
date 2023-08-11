<?php
if( isset($_POST['submit'])){
$u = $_POST['username'];
$p = $_POST['password'];
$con = mysqli_connect("localhost","root", "","test");
$query = "select * from nguoidung  where tendangnhap = '$u' and matkhau = '$p'";
$count = mysqli_query($con,$query);
if(mysqli_num_rows($count) > 0) {
    echo " <script> alert('Đăng nhập thành công'); </script> ";

   
  
}
else {

    echo " <script> alert('Đăng nhập thất bại') </script> ";
  
 
}
}
else {
    header("location: trangchu.html");
}
?>  




 