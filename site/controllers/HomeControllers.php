<?php

require_once './model/product.php';
require_once './../global.php';

$productsDAO = new Product();
if (isset($_GET["action"]) == true) {
    $action = $_GET["action"];
    switch ($action) {
        case 'search':
            break;
        default:
            require 'layout.php';
            break;
    }
} else {
    if (isset($_POST['searchValue']) && $_POST['searchValue'] != "") {
        $value = $_POST['searchValue'];
    } else {
        $MESSAGE = "Không có sản phẩm nào";
        $value = "";
    }

    if ($value != "") {
        $searchs = $productsDAO->searchProducts($value);
        $productbyCates = $productsDAO->getTotalProductbyCate();
        $VIEW_NAME = 'view/shop/default.php';
        include "layout.php";
    } else {
        $products = $productsDAO->getAllProducts();
        $VIEW_NAME = 'view/home/default.php';
        include "layout.php";
    }}
;
