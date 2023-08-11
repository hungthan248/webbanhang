<link rel="stylesheet" href="nav.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">     
<div class="nav">
<ul>    
<li>HTshop</li>
<li class="tk"><input class="tk_ip" type="text" placeholder="Tìm kiếm"> <button class="tk_btn"><i class="fa-solid fa-magnifying-glass"></i></button></li>
<li > hotline:19001000 </li>
<?php 
if(is_login()){
?>
<li><a href ="?mod=cart&act=show" style = "text-decoration: none;">
    <div id = "cart">
        <div>  
            <i class="fa-solid fa-cart-shopping"></i>
        </div>
        <div > 
           Giỏ hàng
        </div>
    </div>
</a>
</li>
 <li class = "name">   
 <div class = "login" >
         <div>  
             <i class="fa-solid fa-user"></i>
         </div>
         <div class = "fullname">
         <?php echo info_user('fullname'); ?>
         </div>
         <div class = "logout">
             <a href ="?mod=log&act=logout" >
             
                Đăng xuất
             
    </a>
         </div>
    </div>
</li>
<?php } else { ?>
<li>
    <div id = "cart">
        <div>  
            <i class="fa-solid fa-cart-shopping"></i>
        </div>
        <div > 
           Giỏ hàng
        </div>
    </div>

</li>
 <li>    
 <div class = "login" id="btn-open">
         <div>  
             <i class="fa-solid fa-user"></i>
         </div>
         <div > 
            Đăng nhập
         </div>
    </div>

</li>

<?php }
?>
</ul>
</div>