<!-- index.php -->

<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/html">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>CYBERHELP</title>
   <link rel="stylesheet" href="css/cyber.css">
   <link rel="icon" href="css/lo.png">
</head>
<body class="body">
   <header class="header">
      <div class="header-container">
         <img class="logo" src="css/lo.png" alt="логотип" title="логотип">
         <div class="name">CYBERHELP</div>
          <nav class="menu">
              <a href="regist.html">Рега</a>
              <a href="authform.php">Вход</a>
          </nav>
      </div>
   </header>
   <main>
       <nav class="main-menu">
           <ul>
               <li>МЕНЮ</li>
               <li>АКЦИИ</li>
               <li>О НАС</li>
           </ul>
       </nav>
     <section class="products-container">
      <article class="product">
          <img class="f1" src="css/тор.png">
          <div class="r1">ТОРТ</div>
      </article>
      <article class="product">
          <img class="f2" src="css/бент.png">
          <div class="r2">БЕНТО-ТОРТ</div>
      </article>
      <article class="product">
          <img class="f3" src="css/пирожонно.png">
          <div class="r3">ПИРОЖНОЕ</div>
      </article>
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
  </section>

   </main>
   <footer class="footer">
       <div class="footer-container">
           <div class="contact">
               <h3>СВЯЗАТЬСЯ С НАМИ</h3>
               <p>Телефон: 8 (912) 345 67-89</p>
           </div>
           <div class="newsletter">
               <h3>Подпишитесь на нашу рассылку</h3>
               <form action="#" method="post">
                   <input type="email" name="email" placeholder="Ваш e-mail" required>
                   <button type="submit">Подписаться</button>
               </form>
           </div>
       </div>
       <div class="copyright">
           <p>&copy; 2024 CyberHelp</p>
       </div>
   </footer>
</body>
</html>
