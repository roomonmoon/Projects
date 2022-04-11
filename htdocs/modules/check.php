<?php 
session_start();
require "../config.php";
include "../blocks/header.php";
include "../blocks/underheader.php";

$email = filter_var(trim($_POST['email']), 
FILTER_SANITIZE_STRING);
$login = filter_var(trim($_POST['login']), 
FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']), 
FILTER_SANITIZE_STRING);
$lastname = filter_var(trim($_POST['lastname']), 
FILTER_SANITIZE_STRING);
$middlename = filter_var(trim($_POST['middlename']), 
FILTER_SANITIZE_STRING);
$place_born = filter_var(trim($_POST['place_born']), 
FILTER_SANITIZE_STRING);
$speciality = filter_var(trim($_POST['speciality']), 
FILTER_SANITIZE_STRING);
$place_work = filter_var(trim($_POST['place_work']), 
FILTER_SANITIZE_STRING);
$general_experience = filter_var(trim($_POST['general_experience']), 
FILTER_SANITIZE_STRING);
$teacher_experience = filter_var(trim($_POST['teacher_experience']), 
FILTER_SANITIZE_STRING);
$qualification_category = filter_var(trim($_POST['qualification_category']), 
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), 
FILTER_SANITIZE_STRING);
$repass = filter_var(trim($_POST['repass']), 
FILTER_SANITIZE_STRING);
    

    
    if(mb_strlen($login) < 2 || mb_strlen($login) > 12) {
        echo "Недопустимая длина логина";
        exit();
    } else if(mb_strlen($pass) < 2 || mb_strlen($pass) > 32) {
        echo "Недопустимая длина пароля (от 6 до 32 символов)";
        exit();
    } else if($repass != $pass) {
        echo "Повторный пароль введён неправильно!";
        exit();
    }else if ($_FILES['filename']['size'] == 0) {
        $avatar = 'non-avatar.jpg';
    } else if(move_uploaded_file($_FILES['filename']['tmp_name'], '../img/avatars/'.$_FILES['filename']['name'])){
        if($_FILES['filename']['size'] > 2 * 1024 * 1024) {
            exit('Размер файла превышает 2 мегабайта');
        }else {
            $avatar = $_FILES['filename']['name'];
        }
    }

    


    $mysql = new mysqli('localhost','root','','register-db');
    $mysql->query("INSERT INTO `users` (`email`, `login`, `name`, `lastname`,`middlename`, `place_born`, `speciality`, `place_work`, `general_experience`, `teacher_experience`, `qualification_category`, `pass`, `avatar`)
    VALUES('$email', '$login', '$name', '$lastname', '$middlename', '$place_born', '$speciality', '$place_work', '$general_experience', '$teacher_experience', '$qualification_category', '$pass', '$avatar')");

    $mysql->close();
    header('Location: /modules/teachers.php');
?>