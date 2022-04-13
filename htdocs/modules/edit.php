<?php 
session_start();
require "../config.php";
include "../blocks/header.php";
include "../blocks/underheader.php";

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
$avatar = "non-avatar.jpg";

$place_born = filter_var(trim($_POST['place_born']), 
FILTER_SANITIZE_STRING);
$place_work = filter_var(trim($_POST['place_work']), 
FILTER_SANITIZE_STRING);
$speciality = filter_var(trim($_POST['speciality']), 
FILTER_SANITIZE_STRING);
$general_experience = filter_var(trim($_POST['general_experience']), 
FILTER_SANITIZE_STRING);
$teacher_experience = filter_var(trim($_POST['teacher_experience']), 
FILTER_SANITIZE_STRING);
$qualification_category = filter_var(trim($_POST['qualification_category']), 
FILTER_SANITIZE_STRING);
$institution_address = filter_var(trim($_POST['institution_address']), 
FILTER_SANITIZE_STRING);
$institution_phone = filter_var(trim($_POST['institution_phone']), 
FILTER_SANITIZE_STRING);
$taught_disciplines = filter_var(trim($_POST['taught_disciplines']), 
FILTER_SANITIZE_STRING);
$additional_load = filter_var(trim($_POST['additional_load']), 
FILTER_SANITIZE_STRING);
$about_me = filter_var(trim($_POST['about_me']), 
FILTER_SANITIZE_STRING);
$id = $_SESSION['id'];


if ($_FILES['filename']['size'] == 0) {
    $avatar = 'non-avatar.jpg';
} else if(move_uploaded_file($_FILES['filename']['tmp_name'], '../img/avatars/'.$_FILES['filename']['name'])){
    if($_FILES['filename']['size'] > 2 * 1024 * 1024) {
        exit('Размер файла превышает 2 мегабайта');
    }
    else 
    {
        $avatar = $_FILES['filename']['name'];
    }
}


$mysql = new mysqli('localhost','root','','register-db');
$mysql->query("UPDATE `users` SET `place_born`='$place_born',`speciality`='$speciality',`place_work`='$place_work',`general_experience`='$general_experience',
`teacher_experience`='$teacher_experience',`qualification_category`='$qualification_category',`institution_address`='$institution_address',
`institution_phone`='$institution_phone',`taught_disciplines`='$taught_disciplines',`additional_load`='$additional_load',`about_me`='$about_me',`avatar`='$avatar' WHERE `id`= '$id'");


$mysql->close();
header('Location: /modules/user.php?id='.$_SESSION['id']);

?>