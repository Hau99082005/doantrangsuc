<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once 'inc/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy thông tin từ form
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $address = isset($_POST['address']) ? trim($_POST['address']) : '';
    $phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
    $note = isset($_POST['note']) ? trim($_POST['note']) : '';

    // Kiểm tra giỏ hàng
    if (isset($_SESSION['cart'])) {
        if (is_array($_SESSION['cart'])) {
            $cart = $_SESSION['cart'];
        } elseif (is_object($_SESSION['cart']) && method_exists($_SESSION['cart'], 'getItems')) {
            $cart = $_SESSION['cart']->getItems(); // Lấy danh sách sản phẩm từ object giỏ hàng
        } else {
            die('Dữ liệu giỏ hàng không hợp lệ.');
        }
    } else {
        die('Giỏ hàng trống. Vui lòng thêm sản phẩm trước khi đặt hàng.');
    }

    // Tính tổng tiền
    $total_amount = 0;
    foreach ($cart as $item) {
        if (is_array($item)) {
            $total_amount += $item['quantity'] * $item['price'] * 1000;
        } elseif (is_object($item)) {
            $total_amount += $item->quantity * $item->price * 1000;
        } else {
            die('Dữ liệu sản phẩm không hợp lệ.');
        }
    }

    // Kiểm tra thông tin bắt buộc
    if (empty($name) || empty($address) || empty($phone)) {
        die('Vui lòng nhập đầy đủ thông tin bắt buộc.');
    }

    // Kết nối cơ sở dữ liệu
    $db = Database::getConnection();
    if (!$db) {
        die('Không thể kết nối cơ sở dữ liệu.');
    }

    $db->begin_transaction();
    try {
        // Thêm đơn hàng
        $stmt = $db->prepare("INSERT INTO `orders` (customer_name, customer_address, customer_phone, note, total_amount, created_at) VALUES (?, ?, ?, ?, ?, NOW())");
        if (!$stmt) {
            throw new Exception('Lỗi chuẩn bị câu lệnh: ' . $db->error);
        }
        $stmt->bind_param('ssssd', $name, $address, $phone, $note, $total_amount);
        if (!$stmt->execute()) {
            throw new Exception('Lỗi thực thi câu lệnh: ' . $stmt->error);
        }

        $order_id = $stmt->insert_id;

        // Thêm các sản phẩm vào bảng order_items
        $stmt_item = $db->prepare("INSERT INTO `order_items` (order_id, product_id, quantity, price) VALUES (?, ?, ?, ?)");
        if (!$stmt_item) {
            throw new Exception('Lỗi chuẩn bị câu lệnh (order_items): ' . $db->error);
        }

        foreach ($cart as $item) {
            if (is_array($item)) {
                $stmt_item->bind_param('iiid', $order_id, $item['id'], $item['quantity'], $item['price']);
            } elseif (is_object($item)) {
                $stmt_item->bind_param('iiid', $order_id, $item->id, $item->quantity, $item->price);
            }
            if (!$stmt_item->execute()) {
                throw new Exception('Lỗi thực thi câu lệnh (order_items): ' . $stmt_item->error);
            }
        }

        // Xóa giỏ hàng sau khi đặt hàng thành công
        unset($_SESSION['cart']);
        $db->commit();

        // Hiển thị giao diện thành công
        echo <<<HTML
        <!DOCTYPE html>
        <html lang="vi">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Đặt hàng thành công</title>
            <style>
                body {
                    margin: 0;
                    padding: 0;
                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                    background: linear-gradient(135deg, #74b9ff, #81ecec);
                    color: #2d3436;
                }
                .container {
                    text-align: center;
                    background: #ffffff;
                    padding: 50px;
                    border-radius: 15px;
                    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
                    max-width: 500px;
                    width: 100%;
                    animation: fadeIn 1s ease-in-out;
                }
                .icon {
                    font-size: 80px;
                    color: #00b894;
                    margin-bottom: 20px;
                    animation: pulse 1.5s infinite;
                }
                .title {
                    font-size: 28px;
                    font-weight: bold;
                    margin-bottom: 10px;
                }
                .subtitle {
                    font-size: 18px;
                    margin-bottom: 20px;
                    color: #636e72;
                }
                .button {
                    display: inline-block;
                    padding: 10px 25px;
                    font-size: 16px;
                    color: #ffffff;
                    background: #00cec9;
                    border-radius: 5px;
                    text-decoration: none;
                    transition: background 0.3s ease;
                }
                .button:hover {
                    background: #01a3a4;
                }

                @keyframes fadeIn {
                    from {
                        opacity: 0;
                        transform: translateY(-20px);
                    }
                    to {
                        opacity: 1;
                        transform: translateY(0);
                    }
                }

                @keyframes pulse {
                    0%, 100% {
                        transform: scale(1);
                    }
                    50% {
                        transform: scale(1.1);
                    }
                }
            </style>
            <script>
                setTimeout(() => {
                    window.location.href = "index.php";
                }, 10000);
            </script>
        </head>
        <body>
            <div class="container">
                <div class="icon">✔</div>
                <div class="title">Đặt hàng thành công!</div>
                <div class="subtitle">Cảm ơn bạn đã mua sắm tại cửa hàng của chúng tôi. Chúng tôi sẽ liên hệ sớm nhất để xác nhận đơn hàng.</div>
                <a href="index.php" class="button">Quay lại trang chủ</a>
            </div>
        </body>
        </html>
        HTML;

    } catch (Exception $e) {
        $db->rollback();
        die('Có lỗi xảy ra trong quá trình xử lý đơn hàng: ' . $e->getMessage());
    } finally {
        $db->close();
    }
} else {
    die('Yêu cầu không hợp lệ.');
}
?>
