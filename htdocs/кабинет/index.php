<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link href="../css/open-iconic-bootstrap.css" rel="stylesheet">
    <title>Личный кабинет</title>
</head>
<body>
    <?php require "../blocks/header.php"; ?>
    <?php require "../blocks/underheader.php"; ?>
    <?php require "../blocks/user.php"; ?>
    <?php
        if($_COOKIE['user'] == ''):
    ?>

    <?php else: ?>
    <?php endif;?>
    <script src="https://kit.fontawesome.com/7ae4faecdc.js" crossorigin="anonymous"></script>
</body>
</html>