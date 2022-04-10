<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/bootstrap.css">    
    <title>Авторизация</title>
</head>
<body>
    <?php require "../../blocks/header.php"; ?>
    <?php require "../../blocks/underheader.php"; ?>
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <h1>Форма авторизации</h1><br>
                    <form action="../../validation-php/auth.php" method="post">
                        <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                        <input type="text" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
                        <button class="btn btn-success" type="submit">Авторизоваться</button>
                        <button class="btn float-right" type="button" onclick="document.location='../регистрация/'">Зарегестрироваться</button>
                    </form>
            </div>
            </form>
        </div>
    </div>
    </div>
</body>
</html>