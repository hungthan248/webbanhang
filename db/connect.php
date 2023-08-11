<?php
#kết nối database
$conn = mysqli_connect('localhost', 'root', '', 'web');
if(!$conn)
    echo "kết nối không thành công.". mysqli_connect_error();
?>