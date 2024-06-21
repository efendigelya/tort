<!-- registration-success.php -->
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация завершена</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1 class="title">Регистрация успешна</h1>
        <p class="message">Спасибо за регистрацию, <?= $_COOKIE['username'] ?>! Мы свяжемся с вами по номеру <?= $_COOKIE['phone'] ?>.</p>
        <button class="button" onclick="window.location.href = 'index.php';">На главную</button>
    </div>
</body>
</html>