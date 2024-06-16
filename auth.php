<!-- auth.php -->

<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $validUsername = 'user'; 
    $validPassword = 'password'; 

    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username === $validUsername && $password === $validPassword) {
            $_SESSION['loggedIn'] = true;
            $_SESSION['message'] = 'Успешный вход в систему для пользователя: ' . $username;
            header('Location: index.php');
            exit();
        } else {
            $_SESSION['message'] = 'Некорректный логин или пароль. Попробуйте еще раз.';
            header('Location: auth.php');
            exit();
        }
    } else {
        $_SESSION['message'] = 'Пожалуйста, введите логин и пароль.';
        header('Location: auth.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Аутентификация</title>
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <div class="form-container">
    <div class="name">Аутентификация</div>
       <form action="auth.php" method="post" class="login-form">
           <input type="text" name="username" placeholder="Логин" required>
           <input type="password" name="password" placeholder="Пароль" required>
           <button type="submit">Войти</button>
       </form>
       <form action="logout.php" method="post">
           <button type="submit">Выход</button>
       </form>
       <?php
       if (isset($_SESSION['message'])) {
           echo '<p>' . $_SESSION['message'] . '</p>';
           unset($_SESSION['message']); // очистим переменную, чтобы не отображать сообщение при обновлении страницы
       }
       ?>
   </div>
</body>
</html>
