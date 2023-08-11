<?php
    if(isset($_POST['username'])){
        $error = array();
        if(empty($_POST['username']))
            $error['username'] = "Không được để trống username";
        else{
            if(!is_username($_POST['username']))
                    $error['username'] = "username cho phép và sử dụng các ký tự A-Z, a-z, 0-9, _, . và độ dài từ 6-32 ký tự ";
            else{
                $username = $_POST['username'];
            }
        }
        if(empty($_POST['password']))
            $error['password'] = "không được để trống password";
        else{
            if(!is_password($_POST['password']))
                     $error['password'] = "password sử dụng 1 kí tự hoa, ký tự đặc biệt và dài từ 6-32 ký tự ";
            else{
                $password = $_POST['password'];
            }
        }
        if (empty($error)) {
        if (check_admin($username, $password)) {
            $_SESSION['is_login'] = true;
            $_SESSION['user_login'] = $username;
            echo "<script>window.location.href='?mod=home&act=admin';
            alert('Đăng nhập thành công');
           
           </script>";
        } else if (check_login($username, $password)) {
            //lưu trữ phiên đăng nhập
            $_SESSION['is_login'] = true;
            $_SESSION['user_login'] = $username;
            echo "<script>window.location.href='?mod=home&act=trangchu';
            alert('Đăng nhập thành công');
           
           </script>";
        } 
    }
    else {
        echo "<script>window.location.href='?mod=home&act=trangchu';
            alert('Đăng nhập thất bại');
           </script>";
    
    }
}
?>