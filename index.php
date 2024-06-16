<!-- index.php -->

<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>CYBERHELP</title>
   <link rel="stylesheet" href="css/cyber.css">
   <link rel="icon" href="css/logo.png">
</head>
<body class="body">
   <header class="header">
      <div class="header-container">
         <img class="logo" src="css/logo.png" alt="логотип" title="логотип">
         <div class="name">CYBERHELP</div>
         <button onclick="window.location.href = 'regist.html';">Регистрация</button>
         <button onclick="window.location.href = 'auth.php';">Аутентификация</button>
         <img class="lupa" src="css/lupa.png" >
      </div>
   </header>
   <div class="main-content">
      <div class="separator">
         <div class="k1">МЕНЮ~</div>
         <div class="k2">АКЦИИ~</div>
         <div class="k3">О НАС</div>
     </div>
     <div class="products-container">
      <div class="product"> 
          <img class="f1" src="css/торт.png">
          <div class="r1">ТОРТ</div>
      </div>
      <div class="product"> 
          <img class="f2" src="css/бенто.png">
          <div class="r2">БЕНТО-ТОРТ</div>
      </div>
      <div class="product"> 
          <img class="f3" src="css/пирожонное.png">
          <div class="r3">ПИРОЖНЫЕ</div>
      </div>
      <?php
      if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']) {
          echo '<div class="login-info">';
          echo '<p>'.$_SESSION['message'].'</p>';
          echo '</div>';

          // Очистка сообщения о входе после отображения
          unset($_SESSION['loggedIn']);
          unset($_SESSION['message']);
      }
      ?>
  </div>
   
   </div>
   <footer class="footer"> 
      <div class="fn">СВЯЗАТЬСЯ С НАМИ</div>
      <div class="social-links">
         <img class="s1" src="css/s1.png">
         <img class="s2" src="css/s2.png">
         <img class="s3" src="css/s3.png">
         <img class="s4" src="css/s4.png">
      </div>
      <div class="number">8 (912) 345 67-89</div>
   </footer>
</body>
</html>
