<head>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="https://kit.fontawesome.com/7ae4faecdc.js" crossorigin="anonymous"></script>
    <title>Педагоги</title>
</head>



<?php
session_start();

require "../config.php";
include "../blocks/header.php";
include "../blocks/underheader.php";

if($_GET['id'] == $_SESSION['id'])
{
    ?>
        <?php 
            $query2 = mysqli_query($db, "SELECT * FROM `users` WHERE `id`=".$_SESSION['id']);
            $user=mysqli_fetch_assoc($query2);
            $email = $user['email'];
            $lastname = $user['lastname'];
            $name = $user['name'];
            $middlename = $user['middlename'];
            $place_born = $user['place_born'];
            $place_work = $user['place_work'];
            $speciality = $user['speciality'];
            $general_experience = $user['general_experience'];
            $teacher_experience = $user['teacher_experience'];
            $qualification_category = $user['qualification_category'];
            $avatar = $user['avatar'];
        ?>
                <div class="container content profile border">
                        <div class="row">
                            <div class="col-md-3" >
                                    <div class="profile-photo">
                                        <img width="254.5px" height="265px" class="img-responsive profile-img" src="../img/avatars/<?php print($avatar);?>" alt="">
                                    </div>
                                    <ul class="list-group mt-4 rounded-0">
                                        <li class="list-group-item rounded-0"><i class="fa-solid fa-circle-user"></i><a href="#">Основная информация</a></li>
                                        <li class="list-group-item rounded-0"><i class="fa-solid fa-graduation-cap"></i><a href="#">Образование</a></li>
                                        <li class="list-group-item rounded-0"><i class="fa-solid fa-folder"></i><a href="#">Портфолио</a></li>
                                        <li class="list-group-item rounded-0"><i class="fa-solid fa-video"></i><a href="#">Видеоматериалы</a></li>
                                        <li class="list-group-item rounded-0"><i class="fa-solid fa-book"></i><a href="#">Учебные материалы</a></li>
                                    </ul>
                            </div>

                            <div class="col-md-9">
                                <div class="profile-body">
                                    <div class="profile-bio">
                                        <div class="row">
                                            <div class="col-md-12 d-flex flex-column">
                                                <h2 class="profile-bio-h2"><?php echo $lastname.' '.$name.' '.$middlename;?></h2>
                                                <span><strong>Город:</strong> <?php print($place_born);?></span>
                                                <span><strong>Общий стаж:</strong> <?php print($general_experience);?> </span>
                                                <span><strong>Педагогический стаж:</strong> <?php print($teacher_experience);?></span>
                                                <span><strong>Квалификационная категория:</strong> <?php print($qualification_category);?></span>
                                                <span><strong>Место работы:</strong> <?php print($place_work);?></span>
                                                <span><strong>Должность:</strong> <?php print($speciality);?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                    </div>
                <?php
        ?>
    <?php
}
else
    { 
    $query3 = mysqli_query($db, "SELECT * FROM `users` WHERE `id`=".$_GET['id']);
    $user=mysqli_fetch_assoc($query3);
    $email = $user['email'];
    $lastname = $user['lastname'];
    $name = $user['name'];
    $middlename = $user['middlename'];
    $place_born = $user['place_born'];
    $place_work = $user['place_work'];
    $speciality = $user['speciality'];
    $general_experience = $user['general_experience'];
    $teacher_experience = $user['teacher_experience'];
    $qualification_category = $user['qualification_category'];
    $avatar = $user['avatar'];

    ?>
    
    <div class="container content profile border">
    <div class="row">
        <div class="col-md-3" >
                <div class="profile-photo">
                    <img width="254.5px" height="265px" class="img-responsive profile-img" src="../img/avatars/<?php print($avatar);?>" alt="">
                </div>
                <ul class="list-group mt-4 rounded-0">
                    <li class="list-group-item rounded-0"><i class="fa-solid fa-circle-user"></i><a href="#">Основная информация</a></li>
                    <li class="list-group-item rounded-0"><i class="fa-solid fa-graduation-cap"></i><a href="#">Образование</a></li>
                    <li class="list-group-item rounded-0"><i class="fa-solid fa-folder"></i><a href="#">Портфолио</a></li>
                    <li class="list-group-item rounded-0"><i class="fa-solid fa-video"></i><a href="#">Видеоматериалы</a></li>
                    <li class="list-group-item rounded-0"><i class="fa-solid fa-book"></i><a href="#">Учебные материалы</a></li>
                </ul>
        </div>
        <div class="col-md-9">
            <div class="profile-body">
                <div class="profile-bio">
                    <div class="row">
                        <div class="col-md-12 d-flex flex-column">
                            <h2 class="profile-bio-h2"><?php echo $lastname.' '.$name.' '.$middlename;?></h2>
                            <span><strong>Город:</strong> <?php print($place_born);?></span>
                            <span><strong>Общий стаж:</strong> <?php print($general_experience);?> </span>
                            <span><strong>Педагогический стаж:</strong> <?php print($teacher_experience);?></span>
                            <span><strong>Квалификационная категория:</strong> <?php print($qualification_category);?></span>
                            <span><strong>Место работы:</strong> <?php print($place_work);?></span>
                            <span><strong>Должность:</strong> <?php print($speciality);?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
    </div> 
    <?php
    }
    ?>
    <?php   
?>
