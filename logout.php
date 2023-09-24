<?php
session_start();
session_destroy(); // Hủy bỏ tất cả session
header("Location: login.php"); // Chuyển hướng đến trang đăng nhập sau khi đăng xuất
exit();
?>