<!-- authform.php -->
<?php
session_start(["use_strict_mode" => true]);
if (isset($_SESSION['username'])) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Добро пожаловать</title>
    </head>
    <body>
    <div class="container">
        <p class="name">Вы вошли как <?=$_SESSION['username']?></p>
        <p><a href='auth.php?logout=1'>Выйти</a></p>
    </div>
    </body>
    </html>
<?php } else { ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Вход</title>
    </head>
    <body>
    <form method="post" action="auth.php" class="form-container">

        <div class="container">
            <h2 class="title">Вход</h2>

            <label for="id1">Логин:</label><br>
            <input name="login" id="id1" type="text" size="20" maxlength="40">
        </div>
        <div class="container">
            <label for="id2">Пароль:</label><br>
            <input name="password" id="id2" type="password" size="20" maxlength="40">
        </div>
        <div class="container">
            <input type="submit" value="Войти" class="button">
        </div>

    </form><p class="message"><?=$_SESSION['message']?></p>
    </body>
    </html>
    <?php
    unset($_SESSION['message']);
}
?>

