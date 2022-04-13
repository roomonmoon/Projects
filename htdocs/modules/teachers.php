<head>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Педагоги</title>
</head>

<?php
session_start();

require "../config.php";
include "../blocks/header.php";
include "../blocks/underheader.php";

?>

<div class="row border">
        <div class="col"><br>
            <h5 class="text-uppercase text-center pt-15 text-muted">ПОИСК ПЕДАГОГОВ: <?php echo $people[0]?> ЧЕЛОВЕК</h5><br>
            <div class="input-group rounded m-auto w-25">
                <input type="search" class="form-control rounded" id="search" placeholder="Введите имя для поиска ..." aria-label="Search" aria-describedby="search-addon" />
                <button type="button" class="btn btn-outline-primary">Поиск</button>
            </div><br>
        </div>
</div>

<div class="container mt-4">
        <table class="table table-striped">
            <tbody>
                <?php 
                    while ($data = mysqli_fetch_array($result)) 
                    {
                        ?>
                        <tr>
                            <td width="100px"><img width="70px" height="70px" src="../img/avatars/<?php echo $data['avatar'];?>" alt="avatar" class="img-thumbnail"></td>
                            <td>
                                <h3><a href="/modules/user.php?id=<?php echo $data['id']?>"><?php echo $data['lastname'].' '.$data['name'].' '.$data['middlename'];?></a></h3>
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
    <script src="../js/search.js"></script>

    <style>
        .hide {
            display: none;
        }
    </style>