<!--form-handler.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    
    // Сохраняем загруженный файл
    $uploadDir = 'uploads/';
    $avatarPath = $uploadDir . basename($_FILES['avatar']['name']);
    move_uploaded_file($_FILES['avatar']['tmp_name'], $avatarPath);
    
    // Сохраняем данные в Cookies
    setcookie('username', $username, time() + (86400 * 30), "/");
    setcookie('phone', $phone, time() + (86400 * 30), "/");
    
    // Перенаправляем пользователя на новую страницу
    header("Location: registration-success.php");
    exit();
}
?>
