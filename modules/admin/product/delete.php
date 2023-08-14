<?php 

//xóa sản phẩm
$id = (int)$_GET['id'];
if(!empty($id)) {
$sql = "delete from dhd_product where id='$id'";
if(mysqli_query($conn,$sql)){
    echo "<script>window.location.href='?mod=home&act=admin';
    alert('thành công');
   </script>";
} else {  echo "<script>window.location.href='?mod=home&act=admin';
    alert('thất bại');
   </script>";
}
}
?>