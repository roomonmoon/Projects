<head>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Авторизация</title>
</head>
<?php 
    session_start();

    require "../config.php";
    include "../blocks/header.php";
    include "../blocks/underheader.php";

    if (isset($_SESSION['id']))
    {
        header("Location:".$siteurl);
    }
    else
    {
        if(isset($_POST['sub']))
        {
            $login=$_POST['login'];
            $pass = $_POST['pass'];

            $query1 = mysqli_query($db, "SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");

            if(mysqli_num_rows($query1)>0) 
            {
                $user=mysqli_fetch_assoc($query1);
                $id=$user['id'];
                $name=$user['name'];

                $_SESSION['id'] = $id;
                $_SESSION['name'] = $name;

                header("Location:".$siteurl);
            }
            else
            {
                print "User not found!";
            }
        }

         ?>
            <div class="container mt-4">
            <div class="row">
                <div class="col">
                    <h1>Форма авторизации</h1><br>
                        <form method="post">
                            <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                            <input type="text" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
                            <button class="btn btn-success" type="submit" name="sub">Авторизоваться</button>
                            <button class="btn float-right" type="button" onclick="document.location='/modules/check.php'">Зарегестрироваться</button>
                        </form>
                </div> 
         <?php
    }
?>