<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$connection = mysqli_connect($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $connection->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
                
                
                // Kiểm tra xem username đã tồn tại trong cơ sở dữ liệu chưa
                $username = $_POST["username"];
                $password = $_POST["password"];
                $level = $_POST["level"];
                $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
                $result = mysqli_query($connection, $sql);
                
                if (mysqli_num_rows($result) === 1) {
                    echo "Tên người dùng đã tồn tại, vui lòng chọn username khác.";
                } else {
                    // Thực hiện câu truy vấn SQL để thêm thành viên vào cơ sở dữ liệu
                    $addsql = "INSERT INTO users (username, password, level) VALUES ('$username', '$password', '$level')";
                    
                    if ($connection->query($addsql) === TRUE) {
                        echo "Thêm thành viên thành công.";
                    } else {
                        echo "Lỗi: " . $connection->error;
                    }
                }
                
                $connection->close();
            }else {
            echo "Vui lòng điền đầy đủ thông tin.";
        }
?>
