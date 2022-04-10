<?php
    if($_COOKIE['user'] == ''):
?>

<div class="underheader pt-3 pb-3 border-bottom d-flex">
    <div class="container d-flex justify-content-between align-items-center">
        <h3 class="pull-left">Фамилия Имя Отчество</h3>
        <ul class="d-flex mb-0">
            <li>Вы не вошли в систему</li>
            <li class="logout"><a href="../кабинет/авторизация/">Войти</a></li>
        </ul>
    </div>
</div>

<?php else: ?>

<div class="underheader pt-3 pb-3 border-bottom d-flex">
    <div class="container d-flex justify-content-between align-items-center">
        <h3 class="pull-left text-muted">Фамилия Имя Отчество</h3>
        <ul class="d-flex mb-0">
            <li><?=$_COOKIE['user']?></li>
            <li class="logout"><a href="../validation-php/exit.php">Выйти</a></li>
        </ul>
    </div>
</div>   

<?php endif;?>