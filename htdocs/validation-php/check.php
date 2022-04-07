<?php 
    $login = filter_var(trim($_POST['login']), 
    FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']), 
    FILTER_SANITIZE_STRING);
    $lastname = filter_var(trim($_POST['lastname']), 
    FILTER_SANITIZE_STRING);
    $middlename = filter_var(trim($_POST['middlename']), 
    FILTER_SANITIZE_STRING);
    $speciality = filter_var(trim($_POST['speciality']), 
    FILTER_SANITIZE_STRING);
    $place = filter_var(trim($_POST['place']), 
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), 
    FILTER_SANITIZE_STRING);
    $repass = filter_var(trim($_POST['repass']), 
    FILTER_SANITIZE_STRING);
    
    if(mb_strlen($login) < 5 || mb_strlen($login) > 12) {
        echo "Недопустимая длина логина";
        exit();
    } else if(mb_strlen($pass) < 6 || mb_strlen($pass) > 32) {
        echo "Недопустимая длина пароля (от 6 до 32 символов)";
        exit();
    } else if($repass != $pass) {
        echo "Повторный пароль введён неправильно!";
        exit();
    }

    $mysql = new mysqli('localhost','root','','register-db');
    $mysql->query("INSERT INTO `users` (`login`, `name`, `lastname`, `middlename`, `speciality`, `place`, `pass`)
    VALUES('$login', '$name', '$lastname', '$middlename', '$speciality', '$place', '$pass')");

    $mysql->close();
    header('Location: /');
?>