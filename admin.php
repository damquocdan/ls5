<?php
session_start();

// Kiểm tra xem có session 'username' và 'level' tồn tại không
if (isset($_SESSION["username"]) && isset($_SESSION["level"])) {
    $username = $_SESSION["username"];
    $level = $_SESSION["level"];

    // Kiểm tra quyền hạn, ví dụ quyền level = 2 mới được truy cập
    if ($level == 2) {
        // Người dùng có quyền hạn, cho phép truy cập
        echo "Chào mừng $username đến trang quản lý admin.";
        // Thêm nội dung trang quản lý admin ở đây
    } else {
        // Người dùng không có quyền truy cập
        echo "Bạn không có quyền truy cập trang quản lý admin.";
    }
} else {
    // Không có session hoặc không đăng nhập
    echo "Bạn cần đăng nhập để truy cập trang quản lý admin.";
}
?>
