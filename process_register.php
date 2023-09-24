<?php
// Kết nối đến cơ sở dữ liệu
include("ketnoi.php");

// Kiểm tra kết nối
if ($connection->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $connection->connect_error);
}

// Lấy dữ liệu từ biểu mẫu đăng ký
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $level = $_POST["level"];
    
    // Kiểm tra xác nhận mật khẩu
    
        // Kiểm tra xem username đã tồn tại trong cơ sở dữ liệu chưa
        $check_sql = "SELECT * FROM users WHERE username = '$username'";
        $check_result = $connection->query($check_sql);
        
        if ($check_result->num_rows > 0) {
            echo "Tên người dùng đã tồn tại, vui lòng chọn username khác.";
        } else {
            // Thực hiện câu truy vấn SQL để thêm thành viên mới vào cơ sở dữ liệu
            
            $register_sql = "INSERT INTO users (username, password, level) VALUES ('$username', '$password','$level')";
            
            if ($connection->query($register_sql) === TRUE) {
                header("Location: login.php");
            } else {
                echo "Lỗi: " . $connection->error;
            }
        }
}

// Đóng kết nối đến cơ sở dữ liệu
header("register.php");
?>
