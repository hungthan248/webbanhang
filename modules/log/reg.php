<?php
global $list_users;
$list_username = $list_users;
if (isset($_POST['btn_reg'])) {
    $error = array();
    if (empty($_POST['fullname']))
        $error['fullname'] = "Không được để trống username";
    else
        $fullname = $_POST['fullname'];
    if (empty($_POST['email']))
        $error['email'] = "không được để trống email";
    else {
    if(is_email($_POST['email'])) $email = $_POST['email'];
          else  $error['email'] = "Địa chỉ email không đúng";
    }
    if (empty($_POST['username']))
        $error['username'] = "Không được để trống username";
    else {
        if (!is_username($_POST['username']))
            $error['username'] = "username cho phép và sử dụng các ký tự A-Z, a-z, 0-9, _, . và độ dài từ 6-32 ký tự ";
        else {
            $username = $_POST['username'];
        }
    }
    if (empty($_POST['password']))
        $error['password'] = "không được để trống password";
    else {
        if (!is_password($_POST['password']))
            $error['password'] = "password sử dụng 1 kí tự hoa, ký tự đặc biệt và dài từ 6-32 ký tự ";
        else {
            $password = $_POST['password'];
        }
    }
    if (empty($error)) {
        $sql = "INSERT INTO `dhd_users` (`username`, `fullname`, `password`, `email`)"
                ."VALUES ('{$username}', '{$fullname}', '{$password}', '{$email}')";
        $check_username = true;
        foreach($list_username as $name) { 
            if ($name['username'] == $_POST['username']) {
            $check_username = false;
        }
    }
          if ($check_username)  {
            mysqli_query($conn, $sql);
            echo "<script>window.location.href='?mod=home&act=trangchu';
            alert('Đăng nhập thành công');
           </script>";
          }
        else {
            echo "<script> alert('Thất bại');</script>";
            $error['username'] = "Tên đăng nhập đã tồn tại";
        }
    
        
    } else {
            echo "<script> alert('Thất bại');</script>";
            $error['acount'] = "đăng kí không thành công";
        }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>Đăng kí tài khoản</title>
<meta charset="utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">     
<link rel="stylesheet" href="dangki.css">
<link rel="stylesheet" href="nav.css">
</head>

<body>
    <form class = "formLogin" action = "" method = "POST" >
            <div class = "dn" id = "tb" >   
            <h1>ĐĂNG Kí  </h1>
            <div class = "fullname" style ="display: flex;   flex-direction: row; width: 1000px">
                <input style="width: 500px; height: 30px; background-color: #FAFAFA; border: none;" class = "ip" type="text" name = "fullname" placeholder="Họ và tên" >
                <?php echo form_error('fullname'); ?>
            </div>
            <div class = "email"  style ="display: flex;   flex-direction: row;width: 1000px">
                 <input style="width: 500px; height: 30px; background-color: #FAFAFA;border: none;" class = "ip" type="text" name = "email" placeholder="Nhập email"> <?php echo form_error('email'); ?>
                </div>
                <div class = "username"  style ="display: flex;   flex-direction: row;width: 1000px">
                    <input style="width: 500px; height: 30px; background-color: #FAFAFA;border: none;" class = "ip" type="text" name = "username" placeholder="Nhập tên đăng nhập">
                    <?php echo form_error('username'); ?>
                </div>
                <div class = "password"  style ="display: flex;   flex-direction: row;width: 1000px"> 
                    <input style="width: 500px; height: 30px; background-color: #FAFAFA;border: none;" class = "ip" type="password" name = "password" placeholder="Nhập mật khẩu">
                    <?php echo form_error('password'); ?>
                </div>
                <div > 
                    <button class = "btn-dn" name = "btn_reg" >Đăng Kí
                        <i class="fa-solid fa-right-to-bracket"></i>
            </button>
        </div>
    </div>
    </form>

<div class="footer">
    <div class="footer-contact">
        <h1>CONTACT</h1>
        <ul>
            <li>
                <i class="fa-solid fa-house" style="color: aliceblue;"></i>
                Đống Đa, Hà Nội</li>
                <li>
                    <i class="fa-solid fa-envelope" style="color: aliceblue;"></i>
        danhhungthan123@gmail.com</li>
        <li>
            <i class="fa-solid fa-mobile-screen-button" style="color: aliceblue;"></i>
            0345678910</li>
            <li>
                <i class="fa-solid fa-phone" style="color: aliceblue;"></i>
                19001000</li>
            </ul>
        </div>
        <div class="footer-product" >
            <h1>PRODUCT</h1>
            <ul>
                <li> Apple</li>
                <li>Samsung</li>
          <li>Xiaomi</li>
          <li>Vivo</li>
          </ul>
        </div>
        <div class="footer-icon">
            <h1>FOLLOW US</h1>
            <div>
                <i class="fa-brands fa-facebook" style="color: aliceblue; font-size: 50px;margin-left: 30px;"></i>
                <i class="fa-brands fa-instagram" style="color: aliceblue;font-size: 50px;margin-left: 15px;" ></i>
                <i class="fa-brands fa-twitter" style="color: aliceblue;font-size: 50px;margin-left: 15px;"></i>
            </div>
        </div>
    </div>
</body>
<div class="nav">
    <ul>    
    <li>HTshop</li>
    <li class="tk"><input class="tk_ip" type="text" placeholder="Tìm kiếm"> <button class="tk_btn"><i class="fa-solid fa-magnifying-glass"></i></button></li>
    <li > hotline:19001000 </li>
 <li class = "name">   
 <div class = "login" >
         <div>  
         <i class="fa-solid fa-house" style="color: #FAFAFA; font-size: 14px;margin-top: 1px ;"></i>
         </div>
         <div class = "logout" style= "visibility: visible; ">
             <a style="color: #FAFAFA;" href ="?mod=home&act=trangchu" >
             
               Trang chủ
             
    </a>
         </div>
    </div>
</li>
</ul>
</div>
</html>
