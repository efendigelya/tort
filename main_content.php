<!-- main_content.php -->


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
