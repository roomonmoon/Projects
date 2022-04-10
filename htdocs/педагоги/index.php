<?php 
include "../db/databases.php";
$result = mysqli_query($induction, "SELECT * FROM `users`");
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Педагоги</title>
</head>
<body>

    <!-- Шапка -->
    <?php require "../blocks/header.php"; ?>

    <!-- поиск под шапкой -->
    <div class="row border">
        <div class="col"><br>
            <h5 class="text-uppercase text-center pt-15 text-muted">ПОИСК ПЕДАГОГОВ: 123 ЧЕЛОВЕК</h5><br>
            <div class="input-group rounded m-auto w-25">
                <input type="search" class="form-control rounded" placeholder="Введите имя для поиска ..." aria-label="Search" aria-describedby="search-addon" />
                <button type="button" class="btn btn-outline-primary">Поиск</button>
            </div><br>
        </div>
    </div>

    <!-- Педагоги -->
    
    <div class="container mt-4">
        <table class="table table-striped">
            <tbody>
                <?php 
                    while ($data = mysqli_fetch_array($result)) 
                    {
                        ?>
                        <tr>
                            <td><img width="70px" height="70px" src="../img/avatars/<?php echo $data['avatar']; ?>" alt="" class="img-thumbnail"></td>
                            <td>
                                <h3><a href="#"><?php echo $data['lastname'].' '.$data['name'].' '.$data['middlename'];?></a></h3>
                                <small class="hex">
                                <i><?php echo $data['place_born']; ?></i><br>
                                <i><?php echo $data['speciality']; ?></i>									
                                </small>   
                            </td>
                        </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
    </div>

    <!-- <?php
        if($_COOKIE['user'] == ''):
    ?> --> 
    
    <!-- <?php endif;?> -->
</body>
</html>