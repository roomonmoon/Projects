<head>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="https://kit.fontawesome.com/7ae4faecdc.js" crossorigin="anonymous"></script>
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
            $institution_address = $user['institution_address'];
            $institution_phone = $user['institution_phone'];
            $taught_disciplines = $user['taught_disciplines'];
            $additional_load = $user['additional_load'];
            $about_me = $user['about_me'];
            $avatar = $user['avatar'];
            
        ?>
                <title><?php echo $lastname.' '.$name.' '.$middlename;?></title>
                <div class="container content profile border">
                        <div class="row d-flex justify-content-end">
                            <div class="col-md-3 h-100" >
                                    <div class="profile-photo">
                                        <img width="254.5px" height="265px" class="img-responsive profile-img" src="../img/avatars/<?php print($avatar);?>" alt="">
                                    </div>
                                    <br>
                                    <div class="tabs">
                                        <div class="tabs-header">
                                            <div class="tab-h" data-tab="0"><i class="fa-solid fa-pen-to-square"></i>Редактирование профиля</div>
                                            <div class="tab-h" data-tab="1"><i class="fa-solid fa-graduation-cap"></i>Образование</div>
                                            <div class="tab-h" data-tab="2"><i class="fa-solid fa-folder"></i>Портфолио</div>
                                            <div class="tab-h" data-tab="3"><i class="fa-solid fa-video"></i>Видеоматериалы</div>
                                            <div class="tab-h" data-tab="4"><i class="fa-solid fa-book"></i>Научные и учебные материалы</div>
                                        </div>
                                    </div>
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
                                                <span><strong>Адрес учреждения:</strong> <?php print($institution_address);?></span>
                                                <span><strong>Телефон учреждения:</strong> <?php print($institution_phone);?></span>
                                                <span><strong>Преподаваемые дисциплины:</strong> <?php print($taught_disciplines);?></span>
                                                <span><strong>Дополнительная нагрузка:</strong> <?php print($additional_load);?></span>
                                                <br><span style="border-top: 1px solid rgba(0, 0, 0, 0.1);"></span><br>
                                                <span><strong>О себе:</strong> <?php print($about_me);?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="content-block col-md-9">
                                <div class="content-body profile-body">
                                    <div class="content-bio profile-bio">
                                        <div class="row">
                                            <div class="col-md-12 d-flex flex-column">
                                                <h2 class="profile-bio-h2"><i class="fa-solid fa-pen-to-square"></i> Изменить информацию о себе:</h2>
                                                <span style="border-top: 1px solid rgba(0, 0, 0, 0.1);"></span><br>

                                                <form action="edit.php" method="post" enctype="multipart/form-data">

                                                    <!-- <div class="form-group">
                                                        <label for="exampleInputEmail1">Введите адрес новой почты</label>
                                                        <input type="email" class="form-control" name="email" id="email" placeholder="Введите email:">
                                                        <small id="emailHelp" class="form-text text-muted">Мы никогда не будем делиться вашей электронной почтой с кем-либо еще.</small>
                                                    </div> -->
                                                    
                                                    <div class="form-group">
                                                        <label for="place_born">Город</label>
                                                        <input type="text" class="form-control" name="place_born" id="place_born" placeholder="Москва">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="general_experience">Ваш общий стаж педагога</label>
                                                        <input type="text" class="form-control" name="general_experience" id="general_experience" placeholder="11 лет">
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="teacher_experience">Ваш педагогический стаж</label>
                                                        <input type="text" class="form-control" name="teacher_experience" id="teacher_experience" placeholder="9 лет">
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="qualification_category">Ваша кваликафицинная категория</label>
                                                        <input type="text" class="form-control" name="qualification_category" id="qualification_category" placeholder="2 средняя">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="speciality">Кем вы работаете?</label>
                                                        <input type="text" class="form-control" name="speciality" id="speciality" placeholder="Классный руководитель">
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="place_work">Где вы работаете?</label>
                                                        <input type="text" class="form-control" name="place_work" id="place_work" placeholder="Дагестанский государственный университет">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="institution_address">Адрес вашего учреждения</label>
                                                        <input type="text" class="form-control" name="institution_address" id="institution_address" placeholder="694411, Сахалинская область, Тымовский район, с.Воскресеновка, ул.Школьная, д. 11">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="institution_phone">Телефон учреждения</label>
                                                        <input type="text" class="form-control" name="institution_phone" id="institution_phone" placeholder="+7 (424) 479-31-43">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="taught_disciplines">Преподаваемые дисциплины</label>
                                                        <input type="text" class="form-control" name="taught_disciplines" id="taught_disciplines" placeholder="Математика, русский язык и т.д.">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="additional_load">Дополительная нагрузка</label>
                                                        <input type="text" class="form-control" name="additional_load" id="additional_load" placeholder="Классное руководство, заместитель директора и т.д.">
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="about_me">Расскажите о себе:</label>
                                                        <textarea class="form-control" name="about_me" id="about_me" rows="3" placeholder="Астапенок Мария Андреевна, 1989 года рождения, работает учителем начальных классов в МБОУ СОШ с.Воскресеновка 6 лет и т.д."></textarea>
                                                    </div>
                                                    
                                                    <div class="mb-3">
                                                        <label for="formFile" class="form-label">Обновить аватарку</label>
                                                        <input class="form-control" type="file" id="formFile" name="filename">
                                                    </div>  
                                                    
                                                    <button type="submit" class="btn btn-primary">Сохранить новую информацию</button>
                                                    </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="content-block col-md-9">
                                <div class="content-body profile-body">
                                    <div class="content-bio profile-bio">
                                        <div class="row">
                                            <div class="col-md-12 d-flex flex-column">
                                                <h2 class="profile-bio-h2"><i class="fa-solid fa-graduation-cap"></i> Образование</h2>
                                                <span style="border-top: 1px solid rgba(0, 0, 0, 0.1);"></span><br>
                                                <div class="education-block">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="content-block col-md-9">
                                <div class="content-body profile-body">
                                    <div class="content-bio profile-bio">
                                        <div class="row">
                                            <div class="col-md-12 d-flex flex-column">
                                                <h2 class="profile-bio-h2"><i class="fa-solid fa-folder"></i> Портфолио</h2>
                                                <span style="border-top: 1px solid rgba(0, 0, 0, 0.1);"></span><br>
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

                            <div class="content-block col-md-9">
                                <div class="content-body profile-body">
                                    <div class="content-bio profile-bio">
                                        <div class="row">
                                            <div class="col-md-12 d-flex flex-column">
                                                <h2 class="profile-bio-h2"><i class="fa-solid fa-video"></i> Видеоматериалы</h2>
                                                <span style="border-top: 1px solid rgba(0, 0, 0, 0.1);"></span><br>
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

                            <div class="content-block col-md-9">
                                <div class="content-body profile-body">
                                    <div class="content-bio profile-bio">
                                        <div class="row">
                                            <div class="col-md-12 d-flex flex-column">
                                                <h2 class="profile-bio-h2"><i class="fa-solid fa-book"></i> Научные и учебные материалы</h2>
                                                <span style="border-top: 1px solid rgba(0, 0, 0, 0.1);"></span><br>
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
    $institution_address = $user['institution_address'];
    $institution_phone = $user['institution_phone'];
    $taught_disciplines = $user['taught_disciplines'];
    $additional_load = $user['additional_load'];
    $about_me = $user['about_me'];
    $avatar = $user['avatar'];

    ?>
    <title><?php echo $lastname.' '.$name.' '.$middlename;?></title>
    <div class="container content profile border">
    <div class="row d-flex justify-content-end">
        <div class="col-md-3" >
                <div class="profile-photo">
                    <img width="254.5px" height="265px" class="img-responsive profile-img" src="../img/avatars/<?php print($avatar);?>" alt="">
                </div>
                <div class="tabs">
                    <div class="tabs-header">
                    <div class="tab-h" data-tab="0"><i class="fa-solid fa-graduation-cap"></i>Образование</div>
                    <div class="tab-h" data-tab="1"><i class="fa-solid fa-folder"></i>Портфолио</div>
                    <div class="tab-h" data-tab="2"><i class="fa-solid fa-video"></i>Видеоматериалы</div>
                    <div class="tab-h" data-tab="3"><i class="fa-solid fa-book"></i>Научные и учебные материалы</div>
                </div>
            </div>
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
                            <span><strong>Адрес учреждения:</strong> <?php print($institution_address);?></span>
                            <span><strong>Телефон учреждения:</strong> <?php print($institution_phone);?></span>
                            <span><strong>Преподаваемые дисциплины:</strong> <?php print($taught_disciplines);?></span>
                            <span><strong>Дополнительная нагрузка:</strong> <?php print($additional_load);?></span>
                            <br><span style="border-top: 1px solid rgba(0, 0, 0, 0.1);"></span><br>
                            <span><strong>О себе:</strong> <?php print($about_me);?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-block col-md-9">
            <div class="content-body profile-body">
                <div class="content-bio profile-bio">
                    <div class="row">
                        <div class="col-md-12 d-flex flex-column">
                            <h2 class="profile-bio-h2"><i class="fa-solid fa-graduation-cap"></i> Образование</h2>
                            <span style="border-top: 1px solid rgba(0, 0, 0, 0.1);"></span><br>
                            <div class="education-block">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-block col-md-9">
            <div class="content-body profile-body">
                <div class="content-bio profile-bio">
                    <div class="row">
                        <div class="col-md-12 d-flex flex-column">
                            <h2 class="profile-bio-h2"><i class="fa-solid fa-folder"></i> Портфолио</h2>
                            <span style="border-top: 1px solid rgba(0, 0, 0, 0.1);"></span><br>
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

        <div class="content-block col-md-9">
            <div class="content-body profile-body">
                <div class="content-bio profile-bio">
                    <div class="row">
                        <div class="col-md-12 d-flex flex-column">
                            <h2 class="profile-bio-h2"><i class="fa-solid fa-video"></i> Видеоматериалы</h2>
                            <span style="border-top: 1px solid rgba(0, 0, 0, 0.1);"></span><br>
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

        <div class="content-block col-md-9">
            <div class="content-body profile-body">
                <div class="content-bio profile-bio">
                    <div class="row">
                        <div class="col-md-12 d-flex flex-column">
                            <h2 class="profile-bio-h2"><i class="fa-solid fa-book"></i> Научные и учебные материалы</h2>
                            <span style="border-top: 1px solid rgba(0, 0, 0, 0.1);"></span><br>
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
 <style>
    .tabs-header {
        border-right: 1px solid rgba(0, 0, 0, 0.125);
        border-left: 1px solid rgba(0, 0, 0, 0.125);
        border-bottom: 1px solid rgba(0, 0, 0, 0.125);
        margin-top: 10px;
        border-top: none;
        width: 254.5px;
    }
    .tab-h {
        border-top: 1px solid rgba(0, 0, 0, 0.125);
        padding: 5px;
        font-size: 14px;
        cursor: pointer;
        color: #555;
    }
    .tab-h i {
        padding: 0 10px 0 10px;
    }
    .tab-h:hover {
        background-color: #eaeaea;
        color: black;
    }
    
    .content-body {
        padding: 20px;
        background: #f7f7f7;
    }
    .content-info {
        background: #fff;
        position: relative;
        padding: 15px 10px 5px 15px;
    }
    .content-block {
        display: none;
    }
    .active {
        background-color: #eaeaea;
        color: black;
    }
    </style>

        <script src="../js/script.js"></script> 
    <?php   
    
?>
