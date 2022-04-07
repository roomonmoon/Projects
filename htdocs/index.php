<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>ДГУ Педагог</title>
</head>
<body>
    <?php 
        if($_COOKIE['user'] == ''):
    ?>
    <div class="container mt-4">
        <div class="row">
            <div class="col">
            <h1>Форма регистрации</h1><br>
            <form action="validation-php/check.php" method="post">
                <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Введите фамилию"><br>
                <input type="text" class="form-control" name="middlename" id="middlename" placeholder="Введите отчество"><br>
                <input type="text" class="form-control" name="speciality" id="speciality" placeholder="Введите вашу специальность"><br>
                <input type="text" class="form-control" name="place" id="place" placeholder="Введите место где вы преподаёте"><br>
                <input type="text" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
                <input type="text" class="form-control" name="repass" id="repass" placeholder="Повторите пароль"><br>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Прикрепите вашу фотографию</label>
                    <input class="form-control" type="file" id="formFile">
                </div>                  
                <div class="buttons m3">
                    <button class="btn btn-success" type="submit">Зарегестрироваться</button>
                </div>
            </form>
        </div>
        <div class="col">
            <h1>Форма авторизации</h1><br>
            <form action="validation-php/auth.php" method="post">
                <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                <input type="text" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
                <button class="btn btn-success" type="submit">Авторизоваться</button>
            </form>
        </div>
    </div>
    <?php else: ?>
    <p>Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="validation-php/exit.php">здесь</a></p>
    <?php endif;?>
</body>
</html>