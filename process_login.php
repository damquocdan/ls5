<?php
// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$connection = mysqli_connect($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($connection->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $connection->connect_error);
}

// Lấy dữ liệu từ biểu mẫu đăng nhập
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Kiểm tra thông tin đăng nhập
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($connection, $sql);
    
    if (mysqli_num_rows($result) === 1) {
        // Đăng nhập thành công
        session_start();
        $_SESSION["username"] = $username;
        $_SESSION["level"] = $level;
        header("Location: adduser.php"); // Chuyển hướng đến trang chào mừng sau khi đăng nhập thành công
        exit();
    } else {
        // Đăng nhập không thành công
        echo "Tên người dùng hoặc mật khẩu không chính xác.";
    }
}

// Đóng kết nối đến cơ sở dữ liệu
$connection->close();
?>