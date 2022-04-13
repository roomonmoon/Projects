<?php 
session_start();
require "../config.php";
include "../blocks/header.php";
include "../blocks/underheader.php";

$login = null;
$place_born = null;
$speciality = null;
$place_work = null;
$general_experience = null;
$teacher_experience = null;
$qualification_category = null;
$institution_address = null;
$institution_phone = null;
$taught_disciplines = null;
$additional_load = null;
$about_me = null;

$email = filter_var(trim($_POST['email']), 
FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']), 
FILTER_SANITIZE_STRING);
$lastname = filter_var(trim($_POST['lastname']), 
FILTER_SANITIZE_STRING);
$middlename = filter_var(trim($_POST['middlename']), 
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), 
FILTER_SANITIZE_STRING);
$repass = filter_var(trim($_POST['repass']), 
FILTER_SANITIZE_STRING);
    


if(mb_strlen($email) < 2 || mb_strlen($email) > 256) {
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
    $mysql->query("INSERT INTO `users`( `login`, `email`, `name`, `lastname`, `middlename`, `place_born`, `speciality`, `place_work`, `general_experience`, `teacher_experience`, `qualification_category`, `institution_address`, `institution_phone`, `taught_disciplines`, `additional_load`, `about_me`, `pass`, `avatar`) 
    VALUES ('$login','$email','$name','$lastname','$middlename','$place_born','$speciality','$place_work','$general_experience','$teacher_experience','$qualification_category','$institution_address','$institution_phone', '$taught_disciplines','$additional_load', '$about_me', '$pass','$avatar');");

    $mysql->close();
    header('Location: /modules/auth.php')
?>