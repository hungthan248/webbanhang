<?php
$id = (int)$_GET['id'];
if (isset($_POST['btn_update'])) {
    $error = array();
    $product_name = $_POST['product_name'];
    if (empty($_POST['price']))
        $error['price'] = "không được để trống giá sản phẩm";
    else {
            $price= $_POST['price'];
    }
    if (empty($_POST['desc'])){
        $error['desc'] = "không được để trống ";
    } else{
        $desc = $_POST['desc'];
    
    }
     if (empty($_POST['thumb'])){
        $error['thumb'] = "không được để trống ";
     }
     else {
     
         $thumb = $_POST['thumb'];
     }
    if (empty($error)) {
        $sql = "UPDATE `dhd_product` SET `product_name` = '{$product_name}', `price` = '{$price}', `desc` = '{$desc}', `thumb` = '{$thumb}' WHERE `id` = {$id}";
        if(mysqli_query($conn, $sql))
        echo "<script>window.location.href='?mod=home&act=admin';
        alert('Đăng nhập thành công');
       </script>";
        } else {
            $error['update'] = "chỉnh sửa không thành công";
            echo " <script>alert('That bai');</script>";
        }
    }
$sql = "SELECT * FROM `dhd_product` where `id` = {$id}";
$result = mysqli_query($conn, $sql);
$item = mysqli_fetch_array($result);

?>
<style>
.submit {
    width: 100%;
    text-align: center;
}

.account_form h2 {
    font-size: 26px;
    text-transform: capitalize;
    color: #333;
    font-weight: 700;
    line-height: 22px;
    margin-bottom: 38px;
    text-align: center;
}

.account_form form {
    border: 1px solid #d3ced2;
    padding: 20px;
    border-radius: 5px;
}

.account_form label {
    font-size: 15px;
    font-weight: 400;
    color: #555;
}

.account_form label {
    font-size: 15px;
    font-weight: 400;
    color: #555;
    cursor: pointer;
}

.account_form input {
    border: 1px solid #e5e5e5;
    height: 32px;
    max-width: 100%;
    padding: 0 0 0 10px;
    background: none;
}

.login_submit button {
    background: #333;
    border: 0;
    color: #fff;
    display: inline-block;
    font-size: 12px;
    font-weight: 700;
    height: 38px;
    line-height: 18px;
    padding: 10px 15px;
    text-transform: capitalize;
    cursor: pointer;
    -webkit-transition: .3s;
    transition: .3s;
    margin-right: 20px;
}

.login_submit a.reg {
    background: #333;
    border: 0;
    color: #fff;
    display: inline-block;
    font-size: 12px;
    font-weight: 700;
    height: 38px;
    line-height: 18px;
    padding: 10px 15px;
    text-transform: capitalize;
    cursor: pointer;
    -webkit-transition: .3s;
    transition: .3s;
    margin-right: 20px;
}

.login_submit button:hover {
    background: #e84c3d;
}

.login_submit label input[type="checkbox"] {
    width: 15px;
    height: 13px;
    margin-right: 3px;
}

.login_submit a {
    text-align: right;
    font-size: 13px;
    color: #00bba6;
    float: right;
    line-height: 39px;
}

.login_submit a:hover,
.account_form label:hover {
    color: #e84c3d;
}

.customer_login {

    padding: 69px 20px 100px;
}

.account_form {
    right: 100px;
    margin-bottom: 35px;
}

.table_desc.wishlist table tbody tr td.product_total a {
    background: #00bba6;
    font-size: 12px;
    font-weight: 700;
    height: 38px;
    line-height: 18px;
    padding: 10px 20px;
    color: #fff;
    text-transform: capitalize;
}

.table_desc.wishlist table tbody tr td.product_total a:hover {
    background: #e84c3d;
}

.table_desc.wishlist table tbody tr:last-child td {
    border-bottom: 0;
}

.wishlist-share {
    text-align: center;
    padding: 20px 0;
    border: 1px solid #ddd;
    margin-bottom: 35px;
}

.wishlist-share ul li {
    display: inline-block;
}

.wishlist-share ul li a {
    padding: 0 10px;
    color: #333;
    display: block;
}

.wishlist-share h4 {
    font-size: 18px;
    color: #333;
    font-weight: 700;
    text-transform: capitalize;
}
</style>


<div class="nav-container">
    <ul>
        <li>

            <i class="fa-solid fa-house" style="color: red; font-size: 14px;margin-top: 1px ;"></i>

            <a href="?mod=home&act=admin">Trang chủ</a>
        </li>
    </ul>
</div>
<div class="customer_login">
    <div class="row">
        <!--login area start-->
        <div class="col-lg-6 col-md-6">
            <div class="account_form">
                <h2>Chỉnh sửa sản phẩm</h2>
                <form enctype="multipart/form-data" action="" method="POST">
                    <p>
                        <label>Tên sản phẩm <span>*</span></label>
                        <input type="text" name="product_name" value="<?php echo $item['product_name'] ?>"
                            autocomplete="off" /><br>
                        <?php echo form_error('product_name'); ?>

                    </p>
                    <p>
                        <label>giá sản phẩm<span>*</span></label>
                        <input type="int" name="price" value="<?php echo number_format($item['price'])?> "
                            autocomplete="off" /><br>
                        <?php echo form_error('price'); ?>

                    </p>
                    <p>
                        <label>mô tả<span>*</span></label>
                        <input type="text" name="desc"><br>
                        <?php echo form_error('desc'); ?>
                    </p>
                    <p>
                        <label>ảnh sản phẩm<span>*</span></label>
                        <input type="text" name="thumb"><br>
                        <?php echo form_error('thumb'); ?>
                    </p>
                    <p>
                        <?php echo form_error('update'); ?>
                    </p>
                    <div class="login_submit">
                        <button type="submit" class="submit" name="btn_update" value="add">Tạo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>