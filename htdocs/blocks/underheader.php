<?php
session_start();

    if (!isset($_SESSION['id']))
    {
        ?>
            <div class="underheader pt-3 pb-3 border-bottom d-flex">
                <div class="container d-flex justify-content-between align-items-center">
                    <h3 class="pull-left"></h3>
                    <ul class="d-flex mb-0">
                        <li>Вы не вошли в систему</li>
                        <li class="logout"><a href="../modules/auth.php">Войти</a></li>
                    </ul>
                </div>
            </div>
        <?php
    }
    else
    {
        if(isset($_GET['id']) & !empty($_GET['id']))
    {
        if($_GET['id'] == $_SESSION['id'])
        
        {
            $query3 = mysqli_query($db, "SELECT * FROM `users` WHERE `id`=".$_SESSION['id']);
            
                    if (mysqli_num_rows($query3)>0) 
                    {
                        $user=mysqli_fetch_assoc($query3);
                        $email = $user['email'];
                        $lastname = $user['lastname'];
                        $name = $user['name'];
                        $middlename = $user['middlename'];
                      
                    }
                    else
                    {
                        print "user not found";
                    }
            ?>
                <div class="underheader pt-3 pb-3 border-bottom d-flex">
                    <div class="container d-flex justify-content-between align-items-center">
                        <h3 class="pull-left"><?php echo $lastname.' '.$name.' '.$middlename;?></h3>
                        <ul class="d-flex mb-0">
                            <li><?=$_SESSION['name']?></li>
                            <li class="logout"><a href="../modules/exit.php">Выйти</a></li>
                        </ul>
                    </div>
                </div>   
            <?php
        }
        else
        {
            if($_GET['id'] != $_SESSION['id'])
            {
                $query4 = mysqli_query($db, "SELECT * FROM `users` WHERE `id`=".$_GET['id']);
                    if (mysqli_num_rows($query4)>0) 
                    {
                        $user=mysqli_fetch_assoc($query4);
                        $email = $user['email'];
                        $lastname = $user['lastname'];
                        $name = $user['name'];
                        $middlename = $user['middlename'];
                    }
                    else
                    {
                        print "user not found";
                    }
                ?>
                <div class="underheader pt-3 pb-3 border-bottom d-flex">
                    <div class="container d-flex justify-content-between align-items-center">
                        <h3 class="pull-left"><?php echo $lastname.' '.$name.' '.$middlename;?></h3>
                        <ul class="d-flex mb-0">
                            <li><?=$_SESSION['name']?></li>
                            <li class="logout"><a href="../modules/exit.php">Выйти</a></li>
                        </ul>
                    </div>
                </div>   
            <?php
            }
        }
        
    }
    
    }
?>
