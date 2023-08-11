<?php
global $list_product_cat;
$id = (int)$_GET['id'];
 $item = get_product_from_id((int)$_GET['id']);


?>

<head>
    <title><?php echo $item['product_name'] ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="sanpham.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>

<body id="body">
    <div class="box-product-name">
        <h1><?php echo $item['product_name'] ?> </h1>
        <svg height="15" fill="#f59e0b" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
            <path
                d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z">
            </path>
        </svg>
        <svg height="15" fill="#f59e0b" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
            <path
                d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z">
            </path>
        </svg>
        <svg height="15" fill="#f59e0b" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
            <path
                d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z">
            </path>
        </svg>
        <svg height="15" fill="#f59e0b" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
            <path
                d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z">
            </path>
        </svg>
        <svg height="15" fill="#f59e0b" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
            <path
                d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z">
            </path>
        </svg>
    </div>

    <div class="product">
        <div class="product-main">
            <div class="box-product-main-img">
                <img src="<?php echo $item['thumb'] ?>" height="358" alt="<?php echo $item['product_name'] ?>"
                    title="<?php echo $item['product_name'] ?>" class="product-main-img">
            </div>
            <div class="desktop">
                <p class="title desktop">Tính năng nổi bật</p>
                <ul>
                    <?php echo $item['desc'] ?>
                </ul>
            </div>
        </div>

        <div class="product-price">
            <div class="block-box-price">
                <p class="product__price--show">
                    <?php echo number_format($item['price'], 0, ',', '.') ?> &nbsp;₫
                </p>
                <p class="product__price--through">
                    <?php echo number_format($item['price-og'], 0, ',', '.') ?>&nbsp;₫
                </p>
            </div>

            <!-- <div class="box-title">
<p>Chọn màu</p>
</div>
<div class="box-content">
<ul class="list-variants">
<li class="item-variant false false">
<div class="color"  title="Đen" class="is-flex is-align-items-center">
<img src="https://cdn2.cellphones.com.vn/50x50,webp,q100/media/catalog/product/x/_/x_m_17.png" width="50" height="50" alt="iPhone 14 Pro 128GB | Chính hãng VN/A-Đen" loading="lazy">
<div class="is-flex is-flex-direction-column">
<strong class="item-variant-name">Đen</strong> 
<span>24.790.000</span>
</div>
</div>
</li>
<li class="item-variant false false">
<div class="color" title="Vàng" class="is-flex is-align-items-center">
<img src="https://cdn2.cellphones.com.vn/50x50,webp,q100/media/catalog/product/v/_/v_ng_1_2.png" width="50" height="50" alt="iPhone 14 Pro 128GB | Chính hãng VN/A-Vàng" loading="lazy">
<div class="is-flex is-flex-direction-column">
<strong class="item-variant-name">Vàng</strong> 
<span>24.690.000</span>
</div>
</div>
</li>
<li class="item-variant false false">
<div class="color" title="Bạc" class="is-flex is-align-items-center">
<img src="https://cdn2.cellphones.com.vn/50x50,webp,q100/media/catalog/product/b/_/b_c_1_2.png" width="50" height="50" alt="iPhone 14 Pro 128GB | Chính hãng VN/A-Bạc" loading="lazy"> 
<div class="is-flex is-flex-direction-column">
<strong class="item-variant-name">Bạc</strong> 
<span>25.090.000</span>
</div>
</div>
</li>
<li class="item-variant false false">
<div class="color"  title="Tím" class="is-flex is-align-items-center">
<img src="https://cdn2.cellphones.com.vn/50x50,webp,q100/media/catalog/product/t/_/t_m-iphone-14-pro_1.png" width="50" height="50" alt="iPhone 14 Pro 128GB | Chính hãng VN/A-Tím" loading="lazy"> 
<div class="is-flex is-flex-direction-column">
<strong class="item-variant-name">Tím</strong> 
<span>25.090.000</span>
</div>
</div>
</li>
</ul>
</div> -->



            <div class="box-buy">

                <button class="btn-buy">
                    <strong style="color: aqua;">MUA NGAY</strong>
                    <span style="color: aqua;">(Giao nhanh từ 2 giờ hoặc nhận tại cửa hàng)</span>
                </button>

                <button class="btn-cart" type="submit" name="btn-cart">
                    <img src="https://cdn2.cellphones.com.vn/50x,webp,q70/media/wysiwyg/add-to-cart.png" width="50"
                        alt="cart-icon">
                    <a style="color = red;" href="<?php if(is_login()) echo "?mod=cart&act=add&id=$_GET[id]";?> ">Thêm
                        vào giỏ</a>
                </button>
            </div>



            <div class="box-warranty-info">
                <div class="box-title">
                    <p>Thông tin sản phẩm</p>
                </div>
                <div class="box-content warranty-info">
                    <div class="item-warranty-info">
                        <div class="icon">
                            <svg height="15" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50">
                                <title>mb</title>
                                <image width="35" height="50" transform="translate(7.5)"
                                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAyCAYAAADWU2JnAAAABHNCSVQICAgIfAhkiAAAAWRJREFUWEftmcFNw0AQRf+sG6ADoAJCBUAHlJDL7hW7ApIOcrS8PpgKKAHTQaiAlOBcfdhBIxHJRgFpbWT7MHuLtM78efu0hx0CAOfcM4A1gCv5PdVi5oaIamNMluf5gZxzGwASZrbFzHvv/a2E+ZyayLmuQwgPEoZnQ9IvnC0pzHbRYbIQwn6qYzPG7ADcfNfrkxGJyrKspwpjra2J6E7D/CSuZH5zUMkomdj7SZ1RZ9SZWALqTCwxvWfUGXUmloA6E0tM7xl1Rp2JJaDOxBL7855h5hTAZC9XAHZEtDr7WBTb2T/vX/YDY2yzL23bplVVNc65RwCvsX/Q2T+KzLEoiotucWutOPA0MNDwMMz87r2/7xYeOYcYHkZCGGOuZRpyCmStfSOiXsAISluy1h6I6DLio+5WCbIJITTGGBkRiTeD1mmQMfuIB8BHURQrkjbkrJl5PYLQIBoAjsxcJ0mSynF/AXY82KKEipF6AAAAAElFTkSuQmCC">
                                </image>
                            </svg>
                        </div>
                        <div class="description">Hàng chính hãng Việt Nam, Mới</div>
                    </div>
                    <div class="item-warranty-info">
                        <div class="icon">
                            <svg height="15" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50">
                                <title>
                                    box</title>
                                <image width="50" height="50" transform="translate(0 -4)"
                                    xlink:href="data:image/png;base64,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">
                                </image>
                            </svg>
                        </div>
                        <div class="description">Hộp, Sách hướng dẫn, Cây lấy sim, Cáp Lightning - Type C</div>
                    </div>
                    <div class="item-warranty-info">
                        <div class="icon"><svg height="15" id="Layer_1" data-name="Layer 1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 50 50">
                                <title>
                                    bh</title>
                                <image width="50" height="50"
                                    xlink:href="data:image/png;base64,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">
                                </image>
                            </svg>
                        </div>
                        <div class="description">1 ĐỔI 1 trong 30 ngày nếu có lỗi phần cứng nhà sản xuất. Bảo hành 12
                            tháng tại trung tâm bảo hành chính hãng
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="cps-block-technicalInfo mb-3 ml-3 px-3 pt-3 pb-1">
            <div class="is-flex is-justify-content-space-between is-align-items-center">
                <h2 class="title is-6 mb-3">Thông số kỹ thuật</h2>
            </div>
            <ul class="technical-content">
                <li class="technical-content-item is-flex is-align-items-center is-justify-content-space-between p-2">
                    <p>Kích thước màn hình</p>
                    <div>6.1 inches</div>
                </li>
                <li class="technical-content-item is-flex is-align-items-center is-justify-content-space-between p-2">
                    <p>Công nghệ màn hình</p>
                    <div>Super Retina XDR OLED</div>
                </li>
                <li class="technical-content-item is-flex is-align-items-center is-justify-content-space-between p-2">
                    <p>Camera sau</p>
                    <div>Camera chính: 48 MP, f/1.8, 24mm, OIS <br> Camera góc siêu rộng: 12 MP, f/2.2, 120˚, 1.4µm<br>
                        Camera tele: 12 MP, f/2.8, PDAF, OIS, 3x optical zoom <br> Cảm biến độ sâu TOF 3D LiDAR </div>
                </li>
                <li class="technical-content-item is-flex is-align-items-center is-justify-content-space-between p-2">
                    <p>Camera trước</p>
                    <div>Camera selfie: 12 MP, f/1.9, 23mm, PDAF </div>
                </li>
                <li class="technical-content-item is-flex is-align-items-center is-justify-content-space-between p-2">
                    <p>Chipset</p>
                    <div>Apple A16 Bionic 6 nhân</div>
                </li>
                <li class="technical-content-item is-flex is-align-items-center is-justify-content-space-between p-2">
                    <p>Dung lượng RAM</p>
                    <div>6 GB</div>
                </li>
                <li class="technical-content-item is-flex is-align-items-center is-justify-content-space-between p-2">
                    <p>Bộ nhớ trong</p>
                    <div>128 GB</div>
                </li>
                <li class="technical-content-item is-flex is-align-items-center is-justify-content-space-between p-2">
                    <p>Pin</p>
                    <div> 3200 mAh</div>
                </li>
                <li class="technical-content-item is-flex is-align-items-center is-justify-content-space-between p-2">
                    <p>Thẻ SIM</p>
                    <div>2 SIM (nano‑SIM và eSIM)</div>
                </li>
                <li class="technical-content-item is-flex is-align-items-center is-justify-content-space-between p-2">
                    <p>Hệ điều hành</p>
                    <div>iOS 16</div>
                </li>
                <li class="technical-content-item is-flex is-align-items-center is-justify-content-space-between p-2">
                    <p>Độ phân giải màn hình</p>
                    <div>2556 x 1179 pixels</div>
                </li>
                <li class="technical-content-item is-flex is-align-items-center is-justify-content-space-between p-2">
                    <p>Tính năng màn hình</p>
                    <div>Công nghệ ProMotion với tần số quét 120Hz<br>Tỷ lệ tương phản 2.000.000: 1<br>Độ sáng tối đa:
                        1.000 nits (điển hình), 1.600 nits (HDR), 2.000 nits (ngoài trời)
                    </div>
                </li>
            </ul>

        </div>

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
    <ul>
        <li>HTshop</li>
        <li class="tk"><input class="tk_ip" type="text" placeholder="Tìm kiếm"> <button class="tk_btn"><i
                    class="fa-solid fa-magnifying-glass"></i></button></li>
        <li> hotline:19001000 </li>
        <?php 
if(is_login()){
?>
        <li><a href="?mod=users&act=main">
                <div id="cart">
                    <div>
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                    <div>
                        Người dùng
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
    <div class="nav-container">
        <ul>
            <li>

                <i class="fa-solid fa-house" style="color: red; font-size: 14px;margin-top: 1px ;"></i>

                <a href="?mod=home&act=admin">Trang chủ</a>
            </li>
            <li>

                <i class="fa-solid fa-chevron-right" style="color: red; font-size: 14px;margin-top:2px;"></i>

                <a href="">
                    <?php 
       $list = array();
       foreach($list_product_cat as $itemcat){
        if ($itemcat['cat_id'] ==  $item['cat_id']){
    $list = $itemcat;
     }
    }
    echo $list['cat_title'];
    ?>
                </a>
            </li>

            <li>

                <i class="fa-solid fa-chevron-right" style="color: red; font-size: 14px;margin-top:2px;"></i>

                <p>
                    <?php echo $item['product_name'] ?>
                </p>
            </li>
        </ul>
    </div>
</div>
</div>
<div id="bd">
    <div class="dn" id="tb">
        <form class="formLogin" action="?mod=log&act=login" method="POST">
            <h1>ĐĂNG NHẬP <div id="btn-close"><i class="fa-regular fa-circle-xmark exit"></i></div>
            </h1>
            <div class="username">
                <input class="ip" type="text" name="username" placeholder="Tên đăng nhập">
            </div>
            <div class="password">
                <input class="ip" type="password" name="password" placeholder="Nhập mật khẩu">
            </div>
            <div>
                <button class="btn-dn" name="submit" type="submit">Đăng nhập
                    <i class="fa-solid fa-right-to-bracket"></i>
                </button>
            </div>
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
        // btn_close.click();
        b_d.classList.remove('show');
    }
});
</script>