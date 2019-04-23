<?php require "db.php"; ?>
<?php if(isset($_SESSION['logged_user'])): ?>
   Тут ваш профиль
    <?php else : ?>
    <a href="/login.php">Авторизоваться</a><br>
    <a href="/sign_up.php">Регистрация</a><br>
<?php endif;?>