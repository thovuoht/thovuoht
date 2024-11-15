<?php


require_once '../../model/product.php';
require_once '../../model/order.php';
require_once '../../../global.php';

$productsDAO = new Product();
$OrderModel = new Order();

if (isset($_GET["action"])) {
    $action = $_GET["action"];
    switch ($action) {
        case 'addCart':
            if (isset($_POST['name'])) {
                $id = $_POST['id'];
                $namepro = $_POST['name'];
                $price = $_POST['price'];
                $image = $_POST['img'];
                $size = $_POST['shop-sizes'];
                $qty = $_POST['quantity'];
                $fg = 0;
                $i = 0;

                if (isset($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $index => $item) {
                        if ($item[1] == $namepro && $item[5] == $size) {
                            $_SESSION['cart'][$index][4] += $qty;
                            $fg = 1;
                            break;
                        }
                    }
                }

                if ($fg == 0) {
                    $_SESSION['cart'][] = array($id, $namepro, $price, $image, $qty, $size);
                }

                $result = array(
                    'status' => 1,
                    'message' => 'Thêm sản phẩm vào giỏ hàng thành công',
                    'cartCount' => count($_SESSION['cart']),
                );
            } else {
                $result = array(
                    'status' => 0,
                    'message' => 'Dữ liệu không hợp lệ',
                );
            }
            $VIEW_NAME = 'view/cart/default.php';
            break;

        case 'delCart':
            if (isset($_GET['i']) && isset($_SESSION['cart'])) {
                array_splice($_SESSION['cart'], $_GET['i'], 1);
            } else {
                unset($_SESSION['cart']);
            }
            $VIEW_NAME = 'view/cart/default.php';
            break;

        case 'update':
            if (isset($_POST['quantity'])) {
                foreach ($_POST['quantity'] as $index => $quantity) {
                    if ($quantity == 0) {
                        unset($_SESSION['cart'][$index]);
                    } else {
                        $_SESSION['cart'][$index][4] = $quantity;
                    }
                }
            }
            $VIEW_NAME = 'view/cart/default.php';
            break;

        default:
            $VIEW_NAME = 'view/cart/default.php';
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
    } else {
        $VIEW_NAME = 'view/cart/default.php';
    }
}
require "../../layout.php";
