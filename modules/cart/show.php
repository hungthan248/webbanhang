<?php
$list_buy = get_list_buy();
?>
<?php
$path_nav = "get_nav.php";
if(file_exists($path_nav))
    require $path_nav;
else
    echo "không tồn tại đường dẫn {$path_nav}";
?>


<title>Giỏ hàng</title>
<link rel="stylesheet" href="cart.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<div class="nav-container">
    <ul>
        <li>

            <i class="fa-solid fa-house" style="color: red; font-size: 14px;margin-top: 1px ;"></i>

            <a href="index.php">Trang chủ</a>
        </li>
    </ul>
</div>
<!--shopping cart area start -->
<div class="shopping_cart_area">
    <form action="?mod=cart&act=update" method="POST">
        <div class="row">
            <div class="col-12">
                <?php
                if (!empty($list_buy)) {
                ?>
                <div class="table_desc">

                    <div class="cart_page table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th class="product_remove">Xóa</th>
                                    <th class="product_thumb">Ảnh</th>
                                    <th class="product_name">Tên sản phẩm</th>
                                    <th class="product-price">Giá</th>
                                    <th class="product_quantity">Số lượng</th>
                                    <th class="product_total">Tổng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($list_buy as $item) {
                                    ?>
                                <tr>
                                    <td class="product_remove"><a
                                            href="<?php echo "?mod=cart&act=delete&id={$item['id']}" ?>">Xóa</a></td>
                                    <td class="product_thumb"> <img src="<?php echo "{$item['thumb']}" ?>" alt=""></td>
                                    <td class="product_name"><a href=""><?php echo $item['product_name'] ?></a></td>
                                    <td class="product-price"><?php echo number_format($item['price']) . ' VND' ?></td>
                                    <td class="product_quantity"><input min="0" max="100"
                                            value="<?php echo $item['qty'] ?>" type="number"
                                            name="qty[<?php echo $item['id'] ?>]"></td>
                                    <td class="product_total"><?php echo number_format($item['total']) ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="cart_submit">
                        <input type="submit" name="btn_update_cart" value="cập nhật giỏ hàng" />

                    </div>

                </div>
                <?php
                }
                ?>
            </div>
        </div>
        <!--coupon code area start-->
        <div class="coupon_area">
            <div class="row">
                <!-- <div class="col-lg-6 col-md-6">
                    <div class="coupon_code">
                        <h3>Khuyến mãi</h3>
                        <div class="coupon_inner">
                            <p>Nhập mã giảm giá nếu có</p>
                            <input placeholder="Coupon code" type="text">
                            <button type="submit">áp dụng</button>
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-6 col-md-6">
                    <div class="coupon_code">
                        <h3>Giỏ hàng</h3>
                        <div class="coupon_inner">
                            <div class="cart_subtotal">
                                <p>Tổng giá sản phẩm</p>
                                <p class="cart_amount">
                                    <?php if ($list_buy != null) echo number_format(total_cart()); else echo "Trống" ?>
                                </p>
                            </div>
                            <div class="cart_subtotal ">
                                <p>Phí giao hàng</p>
                                <p class="cart_amount"><span>Flat Rate:0đ</span></p>
                            </div>
                            <div class="cart_subtotal">
                                <p>Tổng</p>
                                <p class="cart_amount">
                                    <?php if ($list_buy != null) echo number_format(total_cart()); else echo "Trống"?>
                                </p>
                            </div>
                            <div class="checkout_btn">
                                <a href="?mod=cart&act=checkout">Thanh toán</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--coupon code area end-->
    </form>
</div>
<!--shopping cart area end -->