<?php
// Kết nối đến cơ sở dữ liệu MySQL
$host = "localhost"; // Tên máy chủ cơ sở dữ liệu
$username = "root"; // Tên người dùng cơ sở dữ liệu
$password = ""; // Mật khẩu cơ sở dữ liệu
$database = "project"; // Tên cơ sở dữ liệu

$connection = mysqli_connect($host, $username, $password, $database);

// Kiểm tra kết nối
if (!$connection) {
    die("Lỗi kết nối cơ sở dữ liệu: " . mysqli_connect_error());
}


?>