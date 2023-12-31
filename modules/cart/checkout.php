<?php
$list_buy = get_list_buy();
?>
<?php
if (isset($_POST['btn_checkout'])) {
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
    if (empty($_POST['address']))
        $error['address'] = "Không được để trống địa chỉ";
    else {
        $address = $_POST['address'];
    }
    if (empty($_POST['phone']))
        $error['phone'] = "không được để trống số điện thoại";
    else {
        $phone = $_POST['phone'];
    }
   
        $note = $_POST['note'];
    if (empty($error)) {
 
        $sql = "INSERT INTO `orders` (`user_id`, `fullname`, `email`, `phone_number`, `address`, `note`)"
                . "VALUES ('{$_SESSION['user_id']}', '{$fullname}', '{$email}', '{$phone}', '{$address}', '{$note}')";
  
        if (mysqli_query($conn, $sql)) {
             $order_id = mysqli_insert_id($conn);
            foreach($list_buy as $item){
                $pro_id = $item['id'];
                $qty = $item['qty'];
                $price = $item['price'];
                $total = $item['price'] * $item['qty'];
                $order_details = "INSERT INTO `order_details` (`order_id`, `product_id`, `price`, `num`,`total_money`)"
                . "VALUES ('{$order_id}', '{$pro_id}', '{$price}', '{$qty}','{$total}')";
                if(mysqli_query($conn, $order_details)){
                $_SESSION['cart']['buy'] = array();
                unset($_SESSION['info']);
                $_SESSION['cart']['info'] = array();
                echo "<script>window.location.href='?mod=home&act=trangchu';
            alert('Đặt hàng thành công');
           </script>";
               
                
                }
            }
        }
    } else {
        $error['acount'] = "đặt hàng không thành công";
    }
}
?>
<?php
$path_nav = "get_nav.php";
if(file_exists($path_nav))
    require $path_nav;
else
    echo "không tồn tại đường dẫn {$path_nav}";
?>
<link rel="stylesheet" href="checkout.css">
﻿


<!--Checkout page section-->
<div class="Checkout_section">
    <div class="checkout_form">
        <form action="" method="POST">
            <div class="row">

                <div class="col-lg-6 col-md-6">
                    <h3>Thông tin khách hàng</h3>
                    <div class="row">
                        <div class="col-12 mb-30">
                            <label>Họ và tên</label>
                            <input type="text" name="fullname">
                            <?php echo form_error('fullname'); ?>
                        </div>
                        <div class="col-12 mb-30">
                            <label>Địa chỉ nhận hàng <span>*</span></label>
                            <input type="text" name="address">
                            <?php echo form_error('address'); ?>
                        </div>

                        <div class="col-lg-6 mb-30">
                            <label>Số điện thoại<span>*</span></label>
                            <input type="text" name="phone">
                            <?php echo form_error('phone'); ?>

                        </div>
                        <div class="col-lg-6 mb-30">
                            <label> Email <span>*</span></label>
                            <input type="text" name="email">
                            <?php echo form_error('email'); ?>

                        </div>
                        <div class="col-12">
                            <div class="order-notes">
                                <label for="order_note">Ghi chú</label>
                                <textarea id="order_note" name="note"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">

                    <h3>Thông tin đơn hàng</h3>
                    <div class="order_table table-responsive mb-30">
                        <table>
                            <thead>
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th>Tổng</th>
                                </tr>
                            </thead>
                            <?php
                            if (isset($list_buy)) {
                                ?>
                            <tbody>
                                <?php
                                    foreach ($list_buy as $item) {
                                        ?>
                                <tr>
                                    <td><?php echo $item['product_name'] ?><strong> ×<?php echo $item['qty'] ?></strong>
                                    </td>
                                    <td><?php echo number_format($item['total']) ?></td>
                                </tr>
                                <?php
                                    }
                                    ?>
                            </tbody>
                            <?php
                            }
                            ?>
                            <tfoot>
                                <tr>
                                    <th>Tổng đơn sản phẩm</th>
                                    <td><?php echo number_format(total_cart()) ?></td>
                                </tr>
                                <tr>
                                    <th>Phí giao hàng</th>
                                    <td><strong></strong></td>
                                </tr>
                                <tr class="order_total">
                                    <th>Tổng đơn hàng</th>
                                    <td><strong><?php echo number_format(total_cart()) ?></strong></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="payment_method">
                        <!-- <div class="panel-default">
                            <input id="payment" name="payment-method" type="radio" data-target="createp_account"
                                value="online">
                            <label for="payment" data-toggle="collapse" data-target="#method"
                                aria-controls="method">Thanh toán banking</label>
                        </div>
                        <div class="panel-default">
                            <input id="payment_defult" name="payment_method" type="radio" data-target="createp_account"
                                value="cod">
                            <label for="payment_defult" data-toggle="collapse" data-target="#collapsedefult"
                                aria-controls="collapsedefult">Thanh toán khi nhận hàng</label>
                        </div> -->
                        <div class="order_button">
                            <button type="submit" name="btn_checkout">Thanh toán</button>
                        </div>
                    </div>

                </div>

            </div>
        </form>
    </div>
</div>
<!--Checkout page section end-->