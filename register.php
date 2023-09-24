<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Đăng ký</title>
</head>
<body>
    <h2>Đăng ký tài khoản mới</h2>
    <form action="process_register.php" method="post">
        <label for="username">Tên người dùng:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Mật khẩu:</label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="level">level:</label>
        <input type="number" id="level" name="level" required><br><br>



        
        <!-- Thêm các trường thông tin khác cho đăng ký -->
        
        <input type="submit" value="Đăng ký">
    </form>
</body>
</html>
