<?php
session_start();
$ROOT_URL = "/HomeDec"; 
$CONTENT_ADMIN_URL = "$ROOT_URL/public/admin"; 
$CONTENT_SITE_URL = "$ROOT_URL/public/site"; 
$ADMIN_URL = "$ROOT_URL/admin"; 
$SITE_URL = "$ROOT_URL/site"; 
$PER_PAGE = 3;
$IMAGE_DIR = $ROOT_URL."/uploads/images/";

$VIEW_NAME = "index.php";
$MESSAGE = "";
function exist_param($fieldname)
{
    return array_key_exists($fieldname, $_REQUEST);
}
function uploadImage($fieldname)
{ 
    global $IMAGE_DIR; 
    if (isset($_FILES[$fieldname]) && $_FILES[$fieldname]['error'] === UPLOAD_ERR_OK) {
    $file_uploaded = $_FILES[$fieldname];
    $img = $file_uploaded["name"];
 
     $target_path = $IMAGE_DIR . $img;


     if (move_uploaded_file($file_uploaded["tmp_name"], $target_path)) {
         return $img;
     } else {
    
         echo "Upload không thành công";
         return false;
     }
 } else {
     echo "Upload không thành công";

     return false;
 }
}



function add_cookie($name, $value, $day)
{
 setcookie($name, $value, time() + (86400 * $day), "/");
}

function delete_cookie($name)
{
 add_cookie($name, "", -1);
}

function get_cookie($name)
{
 return $_COOKIE[$name] ?? '';
}

function check_login()
{
 global $SITE_URL;
 if (isset($_SESSION['user'])) {
     if ($_SESSION['user']['vai_tro'] == 1) {
         return;
     }
     if (strpos($_SERVER["REQUEST_URI"], '/admin/') == FALSE) {
         return;
     }
 }
 $_SESSION['request_uri'] = $_SERVER["REQUEST_URI"];
 header("location: $SITE_URL/tai-khoan/dang-nhap.php");
}


function convert_name($name)
{
 return ucfirst(trim(preg_replace('/\s+/', ' ', $name)));
}


function convert_ho_ten($name)
{
 return ucwords(strtolower(trim(preg_replace('/\s+/', ' ', $name))));
}
function check_username($name)
{
 return preg_match('/^\w{5,20}$/', $name);
}


?>