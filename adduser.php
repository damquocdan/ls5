<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Thêm thành viên</title>
</head>
<body>
    <h2>Thêm thành viên mới</h2>
    <form action="process_add_member.php" method="post">
        <label for="username">Tên người dùng:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Mật khẩu:</label>
        <input type="password" id="password" name="password" required><br><br>
        <label for="level">level:</label>
        <input type="number" id="level" name="level" required><br><br>
        
        <!-- Thêm các trường thông tin khác cho thành viên -->
        
        <input type="submit" value="Thêm thành viên">
    </form>
</body>
</html>