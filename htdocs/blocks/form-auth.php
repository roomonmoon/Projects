<head>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Регистрация</title>
</head>

<?php
session_start();

require "../config.php";
include "../blocks/header.php";
include "../blocks/underheader.php";


if(isset($_SESSION['id']))
{
    $id = $_SESSION['id'];
    header("Location:".$siteurl."/modules/user.php?id=".$id);
}
else 
{
    ?>
    <div class="container mt-4">
    <div class="row">
        <div class="col">
            <h1>Форма регистрации</h1><br>
                <form action="../modules/check.php" method="post" enctype="multipart/form-data">
                <input type="email" class="form-control" name="email" id="email" placeholder="Введите email"><br>
                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Введите фамилию"><br>
                <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
                <input type="text" class="form-control" name="middlename" id="middlename" placeholder="Введите отчество"><br>
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
                <input type="password" class="form-control" name="repass" id="repass" placeholder="Повторите пароль"><br>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Прикрепите вашу фотографию</label>
                    <input class="form-control" type="file" id="formFile" name="filename">
                </div>                  
                <div class="buttons m3">
                    <button class="btn btn-success" type="submit">Зарегестрироваться</button>
                </div>  
        </form>
    </div>
</div>
</div>
    <?php
}

?>    


