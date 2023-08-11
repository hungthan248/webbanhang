<?php

$id = (int)$_GET['id'];
#lấy dữ liệu sản phẩm theo id
$item = get_product_from_id($id);
?>
<style>
.breadcrumb_content ul li {
	display: inline-block;
	padding-right: 15px;
	font-size: 14px;
	font-weight: bold;
	color: #00bba6;
	text-transform: capitalize;
	line-height: 15px;
}
.breadcrumb_content ul li a {
	color: #222;
}
.breadcrumb_content ul li a:hover{
    color: #e84c3d;
}
.breadcrumb_content ul {
	line-height: 48px;
}
.breadcrumbs_area {
	height: 48px;
	background: #eee;
	line-height: 48px;
	padding: 0 20px;
}


.product_tab_button ul li {
	margin-bottom: 10px;
	padding: 10px;
	border: 1px solid #ddd;
}
.product_tab_button ul li:last-child{
    margin-bottom: 0;
}
.product_tab_button ul {
	-webkit-box-orient: vertical;
	-webkit-box-direction: normal;
	-ms-flex-direction: column;
	flex-direction: column;
}
.product_tab_button {
	width: 23%;
	float: left;
	margin-right: 20px;
}
.tab-content.produc_tab_c {
	padding: 20px;
	border: 1px solid #ddd;
	width: 71%;
	float: right;
}
.modal_img {
	position: relative;
    -webkit-transition: .3s;
    transition: .3s;
}

.view_img {
	position: absolute;
	top: 60%;
	-webkit-transform: translatey(-50%);
	transform: translatey(-50%);
	left: 44%;
    opacity: 0;
    visibility: hidden;
    -webkit-transition: .3s;
    transition: .3s;
}
.modal_img:hover{
    opacity: 0.8;
}
.modal_img:hover .view_img{
    opacity: 1;
    visibility: visible;
    top: 50%
}
.product_details .sidebar_widget.color h2 {
	font-size: 15px;
}
.view_img a {
	width: 35px;
	height: 35px;
	background: #00bba6;
	display: block;
	font-size: 15px;
	text-align: center;
	line-height: 35px;
	color: #fff;
	border-radius: 50%;
}

.product_details {
	padding: 65px 20px 50px;
}
.product_details.sidebar {
	padding: 35px 20px 0;
}
.product_details.video_details {
	padding: 65px 20px 65px;
}
.product_details.gallery_details {
	padding: 56px 20px 53px;
}
.product_d_right h1 {
	font-size: 24px;
	text-transform: capitalize;
	font-weight: 700;
	color: #333;
}
.product_d_right .product_ratting ul li:last-child a,.product_d_right .product_ratting ul li:nth-last-child(2) a  {
  color: #333;
}
.product_reference p {
	font-size: 16px;
	color: #999;
}
.product_reference p span {
	color: #00bba6;
}
.product_desc p {
	font-size: 16px;
	color: #555;
	padding: 10px 0;
	line-height: 24px;
	border-top: 1px solid #ddd;
	border-bottom: 1px solid #ddd;
}
.product_desc {
	margin-bottom: 18px;
}
.product_d_right .product_ratting {
	margin-bottom: 15px;
}
.product_d_right .content_price {
	margin-bottom: 14px;
}
.product_d_right .box_quantity {
	margin-bottom: 18px;
}
.box_quantity input {
	width: 73px;
	padding: 0 10px;
	height: 35px;
	border: 1px solid #ddd;
	background: none;
	margin-left: 10px;
	border-radius: 5px;
}
.box_quantity {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
}
.box_quantity button {
	background: #00bba6;
	font-size: 14px;
	font-weight: 900;
	color: #fff;
	text-transform: capitalize;
	border: none;
	height: 35px;
	-webkit-transition: .3s;
	transition: .3s;
	cursor: pointer;
	line-height: 35px;
	padding: 0 15px;
	border-radius: 5px;
	margin-left: 21px;
}
.box_quantity a {
	width: 30px;
	height: 30px;
	background: #00bba6;
	display: block;
	font-size: 16px;
	text-align: center;
	line-height: 32px;
	color: #fff;
	border-radius: 50%;
	margin-left: 20px;
}
.box_quantity button:hover,.box_quantity a:hover{
    background: #e84c3d;
}
.product_d_right .widget_color ul li {
	display: inline-block;
}
.product_d_right .widget_color ul li a::before {
	border-radius: 50%;
	width: 18px;
	height: 18px;
}
.product_d_right .wishlist-share {
	padding: 0;
	margin: 0;
	border: 0;
	display: inline-block;
}
.product_d_right .wishlist-share ul {
	float: right;
}
.product_d_right .wishlist-share h4 {
	float: left;
	margin-bottom: 0;
	margin-right: 10px;
}
.product_d_right .wishlist-share ul li a {
	color: #555;
}
.wishlist-share ul li a:hover{
    color: #e84c3d;
}
.product_d_size,.product_stock {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
}
.product_stock p {
	margin-bottom: 0;
	line-height: 33px;
}
.product_d_size .nice-select {
	height: 30px;
	line-height: 30px;
	margin-left: 20px;
}
.product_d_size .nice-select::after {
	top: 56%;
}
.product_d_size label {
	color: #333;
	font-weight: 700;
	text-transform: capitalize;
	margin-bottom: 0;
	line-height: 32px;
}

.product_stock span {
	display: inline-block;
	color: #fff;
	font-weight: 600;
	padding: 5px 15px;
	background: #333;
	line-height: 23px;
	border-radius: 5px;
	margin-left: 30px;
}
.social_sharing ul li{
    display: inline-block;
}
.social_sharing ul li a  i{
    color: #00bba6;
    -webkit-transition: .3s;
    transition: .3s;
}
.social_sharing ul li a:hover i{
    color: #fff;
}
.social_sharing ul li a {
	padding: 6px 12px;
	display: block;
	border: 1px solid #ddd;
	font-size: 13px;
	text-transform: capitalize;
    color: #333;
}
.social_sharing ul li a:hover{
    background: #00bba6;
    color: #fff;
}
.product_d_inner{
	border: 1px solid #ddd;
}
.product_info_button ul li a {
	display: block;
	padding: 10px 30px;
	float: left;
	text-transform: capitalize;
	color: #5b5b5b;
	font-size: 16px;
	font-weight: 700;
	position: relative;
}
.product_info_button ul li a::before {
	content: "";
	width: 18px;
	height: 44px;
	border: 21px solid transparent;
	border-left-color: transparent;
	border-left-style: solid;
	border-left-width: 21px;
	border-left-color: transparent;
	border-left-style: solid;
	border-left-width: 20px;
	border-left: 20px solid transparent;
	position: absolute;
	top: 0px;
	right: -40px;
    -webkit-transition: .3s;
    transition: .3s;
}
.product_info_button ul li a.active::before,.product_info_button ul li a:hover::before{
    border-left: 20px solid #009483;
}
.product_info_button ul li a.active,.product_info_button ul li a:hover {
	background: #009483;
	color: #fff;
}
.product_info_button {
	border-bottom: 3px solid #009483;
}
.product_d_inner .tab-content {
	padding: 20px 30px 25px;
}
.product_info_content p {
	margin-bottom: 0;
	color: #555;
}

.product_d_table table {
  border-top: 1px solid #ddd;
}
.product_d_table table tbody tr {
  border-bottom: 1px solid #ddd;
}
.product_d_table table tbody tr td:first-child {
  border-right: 1px solid #ddd;
  width: 30%;
  font-weight: 700;
}
.product_d_table table {
  width: 100%;
}
.product_d_table table tbody tr td {
  padding: 7px 17px;
}
.product_d_table {
	padding: 10px 0 22px;
}
.product_info_inner {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	margin-top: 15px;
}
.product_demo {
	margin-left: 30px;
}
.product_review_form h2 {
	font-size: 20px;
	text-transform: capitalize;
	color: #555;
}
.product_info_inner .product_ratting p {
	margin-bottom: 5px;
}
.product_review_form textarea {
	border: 1px solid #ddd;
	background: none;
	height: 120px;
	resize: none;
}
.product_review_form input {
	border: 1px solid #ddd;
	background: none;
}
.product_review_form button {
	border: none;
	background: #009483;
	color: #fff;
	text-transform: capitalize;
	font-weight: 700;
	padding: 5px 15px;
	display: block;
	border-radius: 5px;
	-webkit-transition: .3s;
	transition: .3s;
	cursor: pointer;
	margin-top: 20px;
}
.product_review_form button:hover{
    background: #e84c3d;;
}
.product_d_info {
	padding-bottom: 35px;
	padding: 0 20px 61px;
}
.product_d_info.sidebar {
	padding: 65px 0 66px;
}
.new_product_area.product_page {
	padding: 0 20px 0;
}
.single_p_active.owl-carousel .col-lg-3 {
	min-width: 100%;
}
.product_tab.sidebar .tab-content.produc_tab_c {
	width: 100%;
	margin-bottom: 30px;
}
.product_tab.sidebar .product_tab_button {
	width: 100%;
}
.product_tab.sidebar .product_tab_button ul {
	-webkit-box-orient: horizontal;
	-webkit-box-direction: normal;
	-ms-flex-direction: row;
	flex-direction: row;
}
.product_tab.sidebar .product_tab_button ul li {
	margin-bottom: 0;
	width: 28%;
	margin-right: 20px;
}
.product_tab.sidebar .product_tab_button ul li:last-child{
    margin-right: 0;
}
.product_d_right .product_d_size,.product_d_right .sidebar_widget.color,.product_d_right .product_stock  {
	margin-bottom: 17px;
}

.product_d_right .sidebar_widget.color h2 {
	margin-bottom: 8px;
}
</style>
                         <!--breadcrumbs area start-->
                        <div class="breadcrumbs_area">
                            <div class="row">
                                <div class="col-12">
                                    <div class="breadcrumb_content">
                                        <ul>
                                            <li><a href="index.html">Trang chủ</a></li>
                                            <li><i class="fa fa-angle-right"></i></li>
                                            <li>Chi tiết sản phẩm</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--breadcrumbs area end-->


                         <!--product wrapper start-->
                        <div class="product_details">
                            <div class="row">
                                    <div class="col-lg-5 col-md-6">
                                        <div class="product_tab fix"> 
                                            <div class="tab-content produc_tab_c">
                                                <div class="tab-pane fade show active" id="p_tab1" role="tabpanel">
                                                    <div class="modal_img">
                                                        <a href="#"><img src="<?php echo "assets/img/product/{$item['thumb']}" ?>" alt="<?php echo $item['product_name'] ?>"></a>
                                                        <div class="img_icone">
                                                           <img src="assets\img\cart\span-new.png" alt="">
                                                       </div>
                                                        <div class="view_img">
                                                            <a class="large_view" href="<?php echo $item['product_name'] ?>"><i class="fa fa-search-plus"></i></a>
                                                        </div>    
                                                    </div>
                                                </div>
                                            </div>

                                        </div> 
                                    </div>
                                    <div class="col-lg-7 col-md-6">
                                        <div class="product_d_right">
                                            <h1><?php echo $item['product_name'] ?></h1>
                                             <div class="product_ratting mb-10">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"> Đánh giá sản phẩm </a></li>
                                                </ul>
                                            </div>
                                            <div class="product_desc">
                                                <p><?php echo $item['desc'] ?></p>
                                            </div>

                                            <div class="content_price mb-15">
                                                <span><?php echo number_format($item['price']).' VND' ?></span>
                                                <!-- <span class="old-price">$130.00</span> -->
                                            </div>
                                            <div class="box_quantity mb-20">
                                                <form action="#">
                                                    <label>số lượng</label>
                                                    <input min="0" max="100" value="1" type="number">
                                                </form> 
                                                <a href="<?php echo $item['url_add_cart'] ?>"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a> 
                                                <a href="<?php echo $item['url_add_cart'] ?>" title="add to wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <!--product details end-->


                        <!--product info start-->
                        <div class="product_d_info">
                            <div class="row">
                                <div class="col-12">
                                    <div class="product_d_inner">   
                                        <div class="product_info_button">    
                                            <ul class="nav" role="tablist">
                                                <li>
                                                    <a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Chi tiết sản phẩm</a>
                                                </li>
                                                <li>
                                                     <a data-toggle="tab" href="#sheet" role="tab" aria-controls="sheet" aria-selected="false">Thông số</a>
                                                </li>
                                                <li>
                                                   <a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Đánh giá</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="info" role="tabpanel">
                                                <div class="product_info_content">
                                                    <p><?php echo $item['product_show'] ?></p>
                                                </div>    
                                            </div>

                                            <div class="tab-pane fade" id="sheet" role="tabpanel">
                                                <div class="product_d_table">
                                                   <form action="#">
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="first_child">Compositions</td>
                                                                    <td>Polyester</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="first_child">Styles</td>
                                                                    <td>Girly</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="first_child">Properties</td>
                                                                    <td>Short Dress</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </form>
                                                </div>
                                                <div class="product_info_content">
                                                    <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p>
                                                </div>    
                                            </div>
                                            <div class="tab-pane fade" id="reviews" role="tabpanel">
                                                <div class="product_info_content">
                                                    <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p>
                                                </div>
                                                <div class="product_info_inner">
                                                    <div class="product_ratting mb-10">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        </ul>
                                                        <strong>Posthemes</strong> 
                                                        <p>09/07/2018</p>
                                                    </div>
                                                    <div class="product_demo">
                                                        <strong>demo</strong>
                                                        <p>That's OK!</p>
                                                    </div>
                                                </div> 
                                                <div class="product_review_form">
                                                    <form action="#">
                                                        <h2>Add a review </h2>
                                                        <p>Your email address will not be published. Required fields are marked </p>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <label for="review_comment">Your review </label>
                                                                <textarea name="comment" id="review_comment"></textarea>
                                                            </div> 
                                                            <div class="col-lg-6 col-md-6">
                                                                <label for="author">Name</label>
                                                                <input id="author" type="text">

                                                            </div> 
                                                            <div class="col-lg-6 col-md-6">
                                                                <label for="email">Email </label>
                                                                <input id="email" type="text">
                                                            </div>  
                                                        </div>
                                                        <button type="submit">Submit</button>
                                                     </form>   
                                                </div>     
                                            </div>
                                        </div>
                                    </div>     
                                </div>
                            </div>
                        </div>  
                        <!--product info end-->
                    </div>
                    <!--pos page inner end-->
                </div>
            </div>
            <!--pos page end-->