<?php

function get_info_cat($cat_id){
    global $list_product_cat;
    if(array_key_exists($cat_id, $list_product_cat))
            return $list_product_cat[$cat_id];
    return false;
}
function get_list_product_by_cat($cat_id){
    global $list_product;
    $result = array();
    foreach($list_product as &$item){
        if($item['cat_id'] == $cat_id){
            $item['url'] = "?mod=product&act=detail&id={$item['id']}";
            $result[] = $item;
        }
    }
    return $result;
}
function get_product_by_id($id){
    global $list_product;
    if(array_key_exists($id, $list_product)){
        $list_product[$id]['url_add_cart'] = "?mod=cart&act=add&id={$id}";
        return $list_product[$id];
    }
    return false;
}

function get_list_buy(){
    if(isset($_SESSION['cart'])){
        return $_SESSION['cart']['buy'];
    }
}
function get_product_from_id($id){
    global $list_product;
    $list = array();
    foreach($list_product as $item){
        if ($item['id'] == $id){
    //   $list =  array(
    //         'id' => $item['id'],
    //         'product_name' => $item['product_name'],
    //         'price' => $item['price'],
    //         'price-og' => $item['price-og'],
    //         'thumb' => $item['thumb'],
    //         'desc' => $item['desc']
    //   );
    $list = $item;
     }
    }
    return $list;
}
function get_product_by_search($content){
    global $list_product_and_cat;
    $list = array();
    foreach($list_product_and_cat as $item){
        if ( $item['cat_title'] == $content){
    $list[] = $item;
     }
    }
    return $list;
}

function get_product_by_search_name($name){
    $sql = "SELECT * FROM `dhd_product` where RTRIM(lower(product_name)) LIKE lower('$name%')";
    $conn = mysqli_connect('localhost', 'root', '', 'web');
    $result = mysqli_query($conn, $sql);
   
    $list = array();
    while ($row = mysqli_fetch_assoc($result)){
        $list[] = $row; 
    }
    return $list;
}
?>