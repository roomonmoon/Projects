<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="/">ДГУ <span color="blue">Педагог</span></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="/">Главная</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="../modules/teachers.php">Педагоги</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Библиотека</a>
                </li>
                <?php 
                if (isset($_SESSION['id'])) {
                  ?>
                  <li class="nav-item">
                    <a class="nav-link" href="../modules/user.php?id=<?php print $_SESSION['id']?>">Личный кабинет</a>
                  </li>
                  <?php
                }else{
                  ?>
                  <li class="nav-item">
                    <a class="nav-link" href="/blocks/form-auth.php">Личный кабинет</a>
                  </li>
                  <?php
                }
                ?>
                <li class="nav-item">
                  <a class="nav-link" href="#">Помощь</span></a>
                </li>
            </ul>
          </div>
        </div>
      </nav>
</header>