<head>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>ДГУ Педагог</title>
</head>

<?php 
session_start();

require "config.php";
include "blocks/header.php";
include "blocks/underheader.php";

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
                    <form action="modules/check.php" method="post" enctype="multipart/form-data">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Введите email"><br>
                    <input type="text" class="form-control" name="login" id="login" placeholder="Введите login"><br>
                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Введите фамилию"><br>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
                    <input type="text" class="form-control" name="middlename" id="middlename" placeholder="Введите отчество"><br>
                    <input type="text" class="form-control" name="place_born" id="place_born" placeholder="Где вы родились?"><br>
                    <input type="text" class="form-control" name="speciality" id="speciality" placeholder="Введите вашу специальность"><br>
                    <input type="text" class="form-control" name="place_work" id="place_work" placeholder="Введите место где вы преподаёте"><br>
                    <input type="text" class="form-control" name="general_experience" id="general_experience" placeholder="Введите общий стаж"><br>
                    <input type="text" class="form-control" name="teacher_experience" id="teacher_experience" placeholder="Введите педагогический стаж"><br>
                    <input type="text" class="form-control" name="qualification_category" id="qualification_category" placeholder="Введите кваликафиционную категорию"><br>
                    <input type="text" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
                    <input type="text" class="form-control" name="repass" id="repass" placeholder="Повторите пароль"><br>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Прикрепите вашу фотографию</label>
                        <input class="form-control" type="file" id="formFile" name="filename">
                    </div>                  
                    <div class="buttons m3">
                        <button class="btn btn-success align-center" type="submit">Зарегестрироваться</button>
                    </div>  
            </form>
        </div>
    </div>
    </div>
    <?php
}
?>