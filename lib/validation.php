
<?php
function is_username($username){
    $partten = "/^[A-Za-z0-9_\.]{6,32}$/";
    if (!preg_match($partten, $username, $matchs))
        return false;
    return true;
}
function is_password($password) {
    $partten = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
    if (!preg_match($partten, $password, $matchs))
        return false;
    return true;
    }
function form_error($label_feild){
    global $error;
    if(!empty($error[$label_feild]))
        return " <p class='error'>{$error[$label_feild]}</p>";
}
function set_value($label_feild){
    global $$label_feild;
    if(!empty($$label_feild)) return $$label_feild;
}
function is_email($email){
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
 return true;
} else{
return false;
}

}
    ?>