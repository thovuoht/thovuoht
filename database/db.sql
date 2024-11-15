-- Bảng Loại hàng (liên kết 1 - nhiều với bảng sản phẩm)
CREATE TABLE category (
  categoryId INT AUTO_INCREMENT PRIMARY KEY,
  categoryName VARCHAR(100) NOT NULL 
);

-- Bảng Chi nhánh
CREATE TABLE branch (
  branchId INT AUTO_INCREMENT PRIMARY KEY,
  branchName VARCHAR(50) NOT NULL 
);

-- Bảng Khuyến mãi
CREATE TABLE discount (
  discountId INT AUTO_INCREMENT PRIMARY KEY,
  discountName VARCHAR(50) NOT NULL,
  discountValue FLOAT NOT NULL,
  discountFromDate DATE NULL,
  discountToDate DATE NULL,
  discountCode VARCHAR(20) NOT NULL UNIQUE
);


-- Bảng Size sản phẩm
CREATE TABLE size (
  sizeId INT AUTO_INCREMENT PRIMARY KEY,
  sizeName VARCHAR(20) NOT NULL 
);

-- Bảng Sản phẩm
CREATE TABLE product (
  productId INT AUTO_INCREMENT PRIMARY KEY,
  productName VARCHAR(250) NOT NULL ,
  price INT NOT NULL,
  description LONGTEXT ,
  image TEXT ,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  categoryId INT NOT NULL,
  discountId INT NOT NULL,
  branchId INT NOT NULL,
  stock INT,
  sizeId INT NOT NULL,
  FOREIGN KEY (categoryId) REFERENCES category(categoryId),
  FOREIGN KEY (discountId) REFERENCES discount(discountId),
  FOREIGN KEY (branchId) REFERENCES branch(branchId),
  FOREIGN KEY (sizeId) REFERENCES size(sizeId)
);

-- Bảng Thư viện ảnh
CREATE TABLE gallery (
  galleryId INT AUTO_INCREMENT PRIMARY KEY,
  productId INT NOT NULL,
  galleryURL TEXT NOT NULL ,
  FOREIGN KEY (productId) REFERENCES product(productId)
);

-- Cụm quản lý khách hàng --

-- Bảng Vai trò (Roles)
CREATE TABLE role (
  roleId INT AUTO_INCREMENT PRIMARY KEY,
  roleType ENUM('customer', 'admin') NOT NULL ,
  description VARCHAR(255) 
);

-- Bảng Người dùng (Users)
CREATE TABLE user (
  userId INT AUTO_INCREMENT PRIMARY KEY,
  userFullname VARCHAR(50) NOT NULL ,
  userEmail VARCHAR(150) NOT NULL ,
  phoneNumber VARCHAR(20) NOT NULL,
  address VARCHAR(200) ,
  password VARCHAR(32) NOT NULL,
  roleId INT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY (roleId) REFERENCES role(roleId)
);

CREATE TABLE comment (
  commentId INT AUTO_INCREMENT PRIMARY KEY,
  userId INT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (userId) REFERENCES user(userId)
);

-- Bảng Phương thức thanh toán
CREATE TABLE payment (
  paymentId INT AUTO_INCREMENT PRIMARY KEY,
  paymentName VARCHAR(50) NOT NULL ,
  paymentStatus TINYINT NOT NULL
);

-- Bảng Địa chỉ giao hàng
CREATE TABLE statusOrder (
  statusId INT AUTO_INCREMENT PRIMARY KEY,
  statusName VARCHAR(50) NOT NULL 
);

-- Bảng Đơn hàng
CREATE TABLE orders (
  orderId INT AUTO_INCREMENT PRIMARY KEY,
  userId INT NOT NULL,
  fullname VARCHAR(50) NOT NULL ,
  email VARCHAR(150) NOT NULL ,
  phoneNumber VARCHAR(20) NOT NULL,
  addressDelivery VARCHAR(200) NOT NULL ,
  note VARCHAR(1000) ,
  orderDate DATETIME DEFAULT CURRENT_TIMESTAMP,
  paymentId INT DEFAULT(1),
  statusId INT DEFAULT(1),
  totalMoney INT,
  FOREIGN KEY (userId) REFERENCES user(userId),
  FOREIGN KEY (paymentId) REFERENCES payment(paymentId),
  FOREIGN KEY (statusId) REFERENCES statusOrder(statusId)
);

-- Bảng Chi tiết đơn hàng
CREATE TABLE orderDetails (
  orderDetailId INT AUTO_INCREMENT PRIMARY KEY,
  orderId INT NOT NULL,
  productId INT NOT NULL,
  price INT NOT NULL,
  quantity INT NOT NULL,
  totalMoney INT NOT NULL,
  FOREIGN KEY (orderId) REFERENCES orders(orderId),
  FOREIGN KEY (productId) REFERENCES product(productId)
);



-- Thêm dữ liệu
-- Thêm dữ liệu vào bảng Loại hàng (category)
INSERT INTO category (categoryName)
VALUES
  ('Bàn'),
  ('Ghế'),
  ('Tủ ly'),
  ('Nệm'),
  ('Tủ đầu giường');

-- Thêm dữ liệu vào bảng Chi nhánh (branch)
INSERT INTO branch (branchName)
VALUES
  ('Chi nhánh Hà Nội'),
  ('Chi nhánh Hồ Chí Minh'),
  ('Chi nhánh Đà Nẵng'),
  ('Chi nhánh Nha Trang'),
  ('Chi nhánh Hải Phòng');

-- Thêm dữ liệu vào bảng Khuyến mãi (discount)
INSERT INTO discount (discountName, discountValue, discountFromDate, discountToDate, discountCode)
VALUES
  ('Giảm giá Mùa hè', 0.2, '2023-07-01', '2023-07-31', 'SUMMER2023'),
  ('Khuyến mãi Đặc biệt', 0.15, '2023-08-15', '2023-08-16', 'SPECIAL15'),
  ('Giảm giá Cuối mùa', 0.3, '2023-09-01', '2023-09-30', 'ENDOFSEPT'),
  ('Khuyến mãi Lễ hội', 0.1, '2023-12-01', '2024-01-02', 'FESTIVE10'),
  ('Giảm giá Sinh nhật', 0.25, '2023-07-01', '2023-07-31', 'BIRTHDAY25');

-- Thêm dữ liệu vào bảng Size (size)
INSERT INTO size (sizeName)
VALUES
  ('S'),
  ('M'),
  ('L'),
  ('XL'),
  ('XXL');

-- Thêm dữ liệu vào bảng Sản phẩm (product)
INSERT INTO product (productName, price, description, categoryId, discountId, branchId, stock, sizeId, image)
VALUES
  ('name', 200000, 'description', 1, 1, 1, 50, 1, 'https://example.com/image1.jpg'),
  ('name', 250000, 'description', 2, 2, 2, 30, 2, 'https://example.com/image1.jpg'),
  ('name', 300000, 'description', 4, 3, 3, 20, 3, 'https://example.com/image1.jpg'),
  ('name', 150000, 'description', 3, 4, 4, 10, 4, 'https://example.com/image1.jpg'),
  ('name', 180000, 'description', 5, 5, 5, 15, 5, 'https://example.com/image1.jpg');

-- Thêm dữ liệu vào bảng Thư viện ảnh (gallery)
INSERT INTO gallery (productId, galleryURL)
VALUES
  (1, 'https://example.com/image1.jpg'),
  (1, 'https://example.com/image2.jpg'),
  (2, 'https://example.com/image3.jpg'),
  (2, 'https://example.com/image4.jpg'),
  (3, 'https://example.com/image5.jpg');

-- Thêm dữ liệu vào bảng Vai trò (role)
INSERT INTO role (roleType, description)
VALUES
  ('customer', 'Vai trò khách hàng thông thường'),
  ('admin', 'Vai trò quản trị viên'),
  ('guest', 'Vai trò khách'),
  ('vip', 'Vai trò khách hàng VIP'),
  ('sales', 'Vai trò nhân viên bán hàng');

-- Thêm dữ liệu vào bảng Người dùng (user)
INSERT INTO user (userFullname, userEmail, phoneNumber, address, password, roleId)
VALUES
  ('Nguyễn Văn A', 'nguyenvana@example.com', '123456789', 'Số 1 Đường X, Quận Y, Thành phố Z', 'password123', 1),
  ('Trần Thị B', 'tranthib@example.com', '987654321', 'Số 2 Đường X, Quận Y, Thành phố Z', 'password456', 1),
  ('Admin User', 'admin@example.com', '555555555', 'Số 3 Đường X, Quận Y, Thành phố Z', 'adminpassword', 2),
  ('Guest User', 'guest@example.com', '111111111', 'Số 4 Đường X, Quận Y, Thành phố Z', 'guestpassword', 3),
  ('VIP User', 'vip@example.com', '999999999', 'Số 5 Đường X, Quận Y, Thành phố Z', 'vippassword', 4);

-- Thêm dữ liệu vào bảng Phương thức thanh toán (payment)
INSERT INTO payment (paymentName, paymentStatus)
VALUES
  ('Thẻ tín dụng', 1),
  ('PayPal', 1),
  ('Tiền mặt khi nhận hàng', 1),
  ('Chuyển khoản ngân hàng', 1),
  ('Thanh toán qua điện thoại di động', 1);

-- Thêm dữ liệu vào bảng trạng thái đơn hàng
INSERT INTO statusOrder (statusName)
VALUES
  ('Chờ xử lý'),
  ('Đang giao'),
  ('Đã nhận hàng'),
  ('Hoàn Thành'),
  ('Hủy đơn hàng'),
  ('Bị Hủy');

-- Thêm dữ liệu vào bảng Đơn hàng (orders)
INSERT INTO orders (userId, fullname, email, phoneNumber, addressDelivery, note, orderDate, paymentId, statusId,totalMoney)
VALUES
  (1, 'Nguyễn Văn A', 'nguyenvana@example.com', '123456789', 'Số 1 Đường X, Quận Y, Thành phố Z', 'Vui lòng giao hàng trong ngày làm việc', '2023-07-15 10:00:00', 1, 1, 200000),
  (2, 'Trần Thị B', 'tranthib@example.com', '987654321', 'Số 2 Đường X, Quận Y, Thành phố Z', 'Không có yêu cầu đặc biệt', '2023-07-16 15:30:00', 2, 2, 150000),
  (3, 'Admin User', 'admin@example.com', '555555555', 'Số 3 Đường X, Quận Y, Thành phố Z', 'Yêu cầu giao hàng gấp', '2023-07-17 12:45:00', 3, 3, 300000),
  (4, 'Guest User', 'guest@example.com', '111111111', 'Số 4 Đường X, Quận Y, Thành phố Z', 'Giao hàng tại lễ tân', '2023-07-18 09:30:00', 4, 4, 500000),
  (5, 'VIP User', 'vip@example.com', '999999999', 'Số 5 Đường X, Quận Y, Thành phố Z', 'Yêu cầu giao hàng sau giờ hành chính', '2023-07-19 18:00:00', 5, 5, 800000);

-- Thêm dữ liệu vào bảng Chi tiết đơn hàng (orderDetails)
INSERT INTO orderDetails (orderId, productId, price, quantity, totalMoney)
VALUES
  (1, 1, 200000, 2, 400000),
  (2, 2, 150000, 3, 450000),
  (3, 3, 300000, 1, 300000),
  (4, 4, 500000, 1, 500000),
  (5, 5, 800000, 1, 800000);

DELIMITER //
CREATE TRIGGER reset_orderdetailId
AFTER INSERT ON orders -- Giả sử bạn có một bảng có tên là 'orders' chứa trường orderId
FOR EACH ROW
BEGIN
    DECLARE prevOrderId INT;
    SET prevOrderId = 0;

    -- Tìm orderId trước đó của bản ghi cuối cùng trong bảng orders
    SELECT orderId INTO prevOrderId
    FROM orders
    ORDER BY orderId DESC
    LIMIT 1;

    IF NEW.orderId != prevOrderId THEN
        -- Đặt lại orderDetailId về 1 mỗi khi có orderId mới được tạo
        UPDATE orderDetails
        SET orderDetailId = 1
        WHERE orderId = NEW.orderId;
    END IF;
END;
//
DELIMITER ;

