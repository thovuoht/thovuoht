<!-- Các thao tác admin có thể thực hiện với product như: -->
<?php
require_once 'pdo.php';

class Order
{
   
    public function getAllOrders($search)
    {
        $sql = "SELECT * FROM orders ord
        left join user u on ord.userId = u.userId
        left join payment pay on pay.paymentId = ord.paymentId
        left join delivery deli on deli.deliveryId = ord.deliveryId
        WHERE ord.orderId like ?";
        $orders = pdo_query($sql, '%' . $search . '%');
        return $orders;
    }

    public function getOrderDetail($orderId)
    {
        $sql = "SELECT *, orderdetails.sizeId AS sizeID  FROM orderdetails join product on orderdetails.productId = product.productId  WHERE orderId = $orderId";
        $detail = pdo_query($sql);
        return $detail;
    }
    public function getOrderById($orderId)
    {
        $sql = "SELECT * FROM orders WHERE orderId = $orderId";
        $order = pdo_query_one($sql);
        return $order;
    }
    public function getOrderByUserId($userId)
    {
        $sql = "SELECT * FROM orderdetails od
        join orders o  
        ON o.orderId = od.orderId
		JOIN payment pay 
        ON o.paymentId = pay.paymentId
  		WHERE userId = $userId having statusId < 3";
        $order = pdo_query($sql);
        return $order;
    }
    public function getOrderHistoryByUserId($userId)
    {
        $sql = "SELECT * FROM orders o 
        join orderdetails od
        ON o.orderId = od.orderId  WHERE userId = $userId
        having statusId > 2";
        $order = pdo_query($sql);
        return $order;
    }

    public function addOrder($userId, $fullname, $email, $phone, $address)
    {
        $sql = 'INSERT INTO orders (userId, fullname, email, phoneNumber, addressDelivery) VALUES (?, ?, ?, ?, ?)';
        pdo_execute($sql, $userId, $fullname, $email, $phone, $address);
        $lastest_id = "SELECT orderId FROM orders order by orderId desc limit 1";
        return pdo_query_value($lastest_id);
    }

    public function addOrderDetail($orderId, $productId, $price, $quantity, $totalMoney, $sizeId)
    {
        $sql = 'INSERT INTO orderdetails(orderId,productId,price,quantity,totalMoney, sizeID) VALUES (?,?,?,?,?,?)';
        return pdo_execute($sql, $orderId, $productId, $price, $quantity, $totalMoney, $sizeId);
    }

    public function updateOrderStatus($orderId, $statusId)
    {
        $sql = "UPDATE orders SET statusId = ? + 1 WHERE orderId = $orderId";
        pdo_execute($sql, $statusId);
    }


    public function deleteOrder($orderId)
    {
        $sql = 'DELETE FROM orders WHERE orderId = ?';
        pdo_execute($sql, $orderId);
    }

    public function deleteOrders($OrderIds)
    {
        if (empty($OrderIds)) {
            return false; 
        }
        if (is_array($OrderIds)) {
            foreach ($OrderIds as $OrderId) {
                $sql = "DELETE FROM Order WHERE OrderId = $OrderId";
                pdo_query($sql);
            }
        }
    }

    public function getAllPayments()
    {
        $sql = 'Select * from payment';
        return pdo_query($sql);
    }
    public function searchOrders($keyword)
    {
        $sql = 'SELECT * FROM Order WHERE name LIKE ?';
        $Orders = pdo_query($sql, '%' . $keyword . '%');
        return $Orders;
    }
}


?>