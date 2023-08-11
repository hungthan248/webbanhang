<?php

ob_start();

global $list_product;
$listProduct = $list_product;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Trang chủ </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="trangchu.css">
</head>

<body id="body">
    <div class="phone">
        <h2> ĐIỆN THOẠT NỔI BẬT NHẤT</h2>
        <ul>
            <li><a href="?mod=home&act=timkiem&search=Apple">Apple</a></li>
            <li><a href="?mod=home&act=timkiem&search=Samsung">Samsung</a></li>
            <li><a href="?mod=home&act=timkiem&search=Xiaomi">Xiaomi</a></li>
            <li><a href="?mod=home&act=timkiem&search=realme">realme</a></li>
            <li><a href="?mod=home&act=timkiem&search=Vivo">vivo</a></li>
            <li><a href="?mod=home&act=timkiem&search=Oppo">Oppo</a></li>
            <li><a href="?mod=home&act=timkiem&search=Nokia">Nokia</a></li>
            <li><a href="?mod=home&act=timkiem&search=Asus">Asus</a></li>
            <li><a href="?mod=home&act=timkiem&search=Tecno">Tecno</a></li>
        </ul>
    </div>

    <div class="product">


        <?php 
foreach($listProduct as $list_item) {

?>

        <div class="product__info ">
            <a href="?mod=home&act=sanpham&id=<?php echo $list_item['id'];?>" class="product__link">
                <img src="<?php echo $list_item['thumb'] ?>" width="358" height="358"
                    alt="<?php echo $list_item['product_name'] ?>" class="product__img">
                <h3><?php echo $list_item['product_name'] ?></h3>
                <div class="product__price">
                    <p class="product__price--show">
                        <?php echo number_format($list_item['price'], 0, ',', '.')?> &nbsp;₫
                    </p>
                    <p class="product__price--through">
                        <?php echo number_format($list_item['price-og'], 0, ',', '.')?> &nbsp;₫
                    </p>
                </div>
                <div class="product__price--percent">
                    <p class="product__price--percent-detail">
                        Giảm
                        <?php echo round(100-$list_item['price']*100/$list_item['price-og'])?>%
                    </p>
                </div>

            </a>
            <div class="product__icon">
                <div>
                    <div>
                        <svg height="15" fill="#f59e0b" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path
                                d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z">
                            </path>
                        </svg>
                    </div>
                </div>
                <div>
                    <svg height="15" fill="#f59e0b" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path
                            d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z">
                        </path>
                    </svg>
                </div>
                <div>
                    <svg height="15" fill="#f59e0b" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path
                            d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z">
                        </path>
                    </svg>
                </div>
                <div>
                    <svg height="15" fill="#f59e0b" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path
                            d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z">
                        </path>
                    </svg>
                </div>
                <div>
                    <svg height="15" fill="#f59e0b" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path
                            d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z">
                        </path>
                    </svg>
                </div>
            </div>
        </div>
        </a>

        <?php 
}
?>


    </div>

    <div class="footer">
        <div class="footer-contact">
            <h1>CONTACT</h1>
            <ul>
                <li>
                    <i class="fa-solid fa-house" style="color: aliceblue;"></i>
                    Đống Đa, Hà Nội
                </li>
                <li>
                    <i class="fa-solid fa-envelope" style="color: aliceblue;"></i>
                    danhhungthan123@gmail.com
                </li>
                <li>
                    <i class="fa-solid fa-mobile-screen-button" style="color: aliceblue;"></i>
                    0345678910
                </li>
                <li>
                    <i class="fa-solid fa-phone" style="color: aliceblue;"></i>
                    19001000
                </li>
            </ul>
        </div>
        <div class="footer-product">
            <h1>PRODUCT</h1>
            <ul>
                <li> Apple</li>
                <li>Samsung</li>
                <li>Oppo</li>
                <li>Xiaomi</li>
            </ul>
        </div>
        <div class="footer-icon">
            <h1>FOLLOW US</h1>
            <div>
                <i class="fa-brands fa-facebook" style="color: aliceblue; font-size: 50px;margin-left: 30px;"></i>
                <i class="fa-brands fa-instagram" style="color: aliceblue;font-size: 50px;margin-left: 15px;"></i>
                <i class="fa-brands fa-twitter" style="color: aliceblue;font-size: 50px;margin-left: 15px;"></i>
            </div>
        </div>
    </div>


</body>
<div class="nav">
    <form action="?mod=home&act=timkiem" method="POST">
        <ul>
            <li>HTshop</li>
            <li class="tk"><input class="tk_ip" type="text" name="noidung" placeholder="Tìm kiếm" ">
                <button class=" tk_btn" type=" submit"><i class="fa-solid fa-magnifying-glass"></i></button></a>
            </li>
            <li> hotline:19001000 </li>
            <?php 
if(is_login()){
?>
            <li><a href="?mod=cart&act=show">
                    <div id="cart">
                        <div>
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                        <div>
                            Giỏ hàng
                        </div>
                    </div>
                </a>
            </li>
            <li class="name">
                <div class="login">
                    <div>
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="fullname">
                        <?php echo info_user('fullname'); ?>
                    </div>
                    <div class="logout">
                        <a href="?mod=log&act=logout">

                            Đăng xuất

                        </a>
                    </div>
                </div>
            </li>
            <?php } else { ?>
            <li>
                <div id="cart">
                    <div>
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                    <div>
                        Giỏ hàng
                    </div>
                </div>

            </li>
            <li>
                <div class="login" id="btn-open">
                    <div>
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div>
                        Đăng nhập
                    </div>
                </div>

            </li>

            <?php }
?>
        </ul>
    </form>
</div>
<div id="bd">
    <div class="dn" id="tb">
        <form class="formLogin" action="?mod=log&act=login" method="POST">
            <h1>ĐĂNG NHẬP <div type="none" id="btn-close"><i class="fa-regular fa-circle-xmark exit"></i></div>
            </h1>
            <div class="username">
                <input class="ip" type="text" name="username" placeholder="Tên đăng nhập">
            </div>
            <div class="password">
                <input class="ip" type="password" name="password" placeholder="Nhập mật khẩu">
            </div>
            <a href="?mod=log&act=login">
                <div>
                    <button class="btn-dn" name="submit" type="submit">Đăng nhập
                        <i class="fa-solid fa-right-to-bracket"></i>
                    </button>
                </div>
            </a>
            <p class="dk">Bạn chưa có tài khoản? <a href="?mod=log&act=reg">Đăng ký ngay</a></p>
        </form>
    </div>
</div>

<script>
const btn_open = document.getElementById('btn-open');
const btn_close = document.getElementById('btn-close');
const t_b = document.getElementById('tb');
const b_d = document.getElementById('bd');
btn_open.addEventListener('click', () => {
    b_d.classList.add('show');
});
btn_close.addEventListener('click', () => {
    b_d.classList.remove('show');
});
b_d.addEventListener('click', (e) => {
    if (!t_b.contains(e.target)) {
        btn_close.click();

    }
});
</script>


</html>