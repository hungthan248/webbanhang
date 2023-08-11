<?php
#xuất dữ liệu
$sql = "SELECT * FROM `orders`, `order_details`, `dhd_product` where orders.orders_id = order_details.order_id and order_details.product_id = dhd_product.id";
$result = mysqli_query($conn, $sql);
$list_orders = array();
while ($row = mysqli_fetch_assoc($result)){
    $list_orders[] = $row;
}

?>
<style>
#content {
    background: white;
    width: 700px;
    border-radius: 3px;
    padding: 30px 20px 20px 20px;
    margin: 0px auto;
    text-align: center;
}

#content h1 {
    font-size: 24px;
    text-align: center;
}

.table_data {
    width: 650px;
    padding: 0px 0px 100px;
}

.table_data,
tr,
td {
    border: 1px solid #333;
    border-collapse: collapse;
}

.table_data thead tr td {
    font-weight: bold;
    border-bottom: 2px solid #333;

}

.table_data tr td {
    border-bottom: 1px solid #333;
    padding: 8px 15px;
}

.table_data tr td a:hover {
    color: red;
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

<div id="content">
    <!--    <a class="add_new" href="?mod=log&act=reg">Thêm mới</a>-->
    <h1>Danh sách Đơn Hàng</h1>
    <table class="table_data">
        <thead>
            <tr>
                <td>STT</td>
                <td>id</td>
                <td>Họ và tên</td><!-- comment -->
                <td>số điện thoại</td><!-- comment -->
                <td>Địa chỉ</td>
                <td> Tên sản phẩm</td>
                <td> Giá</td>
                <td> Số lương</td>
                <td>Tổng tiền </td>
            </tr>
        </thead>
        <tbody>
            <?php
                $dem = 0;
                foreach ($list_orders as $order){
                    $dem++;
            ?>
            <tr>
                <td><?php echo $dem ?></td>
                <td><?php echo $order['user_id'] ?></td>
                <td><?php echo $order['fullname'] ?></td>
                <td><?php echo $order['phone_number'] ?></td>
                <td><?php echo $order['address'] ?></td>
                <td><?php echo $order['product_name'] ?></td>
                <td><?php echo $order['price'] ?></td>
                <td><?php echo $order['num'] ?></td>
                <td><?php echo $order['total_money'] ?></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</div>