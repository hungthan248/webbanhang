<?php
#xuất dữ liệu
$sql = "SELECT * FROM `dhd_users`";
$result = mysqli_query($conn, $sql);
$list_users = array();
while ($row = mysqli_fetch_assoc($result)){
    $list_users[] = $row;
}
foreach ($list_users as $user){
    $user['url_delete'] = "?mod=users&act=delete&id={$user['user_id']}";
}
?>
<style>
    #content {
    background: white;
    width: 600px;
    border-radius: 3px;
    padding: 30px 20px 20px 20px;
    margin: 0px auto;
    text-align: center;
    }
    #content h1{
        font-size: 24px;
        text-align: center;
    }
     .table_data, tr, td {
        border: 1px solid #333;
        border-collapse: collapse;
    }
    
    .table_data thead tr td{
        font-weight: bold;
        border-bottom: 2px solid #333;
    }
    .table_data tr td{
        border-bottom: 1px solid #333;
        padding: 8px 15px;
    }
    .table_data tr td a:hover{
        color: red;
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" >
<div class="nav-container">
    <ul>
    <li>
    
        <i class="fa-solid fa-house" style="color: red; font-size: 14px;margin-top: 1px ;"></i>
    
    <a href="?mod=home&act=admin">Trang chủ</a>
    </li> 
      </ul>
 </div>
<div id="content">

    <h1>Danh sách thành viên</h1>
    <table class="table_data">
        <thead>
            <tr>
                <td>STT</td>
                <td>id</td>
                <td>Họ và tên</td><!-- comment -->
                <td>Tên đăng nhập</td><!-- comment -->
                <td>Email</td>
                <td>Thao tác</td>
            </tr>
        </thead>
        <tbody>
            <?php
                $dem = 0;
                foreach ($list_users as $user){
                    $dem++;
            ?>
            <tr>
                <td><?php echo $dem ?></td>
                <td><?php echo $user['user_id'] ?></td>
                <td><?php echo $user['fullname'] ?></td><!-- comment -->
                <td><?php echo $user['username'] ?></td><!-- comment -->
                <td><?php echo $user['email'] ?></td>
                <td><a href="<?php echo "?mod=users&act=delete&id={$user['user_id']}" ?>">Xóa</a></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
        </div>