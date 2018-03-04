<?php
    session_start();
?>
  <!DOCTYPE HTML>
  <html lang="pl">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ForumZKrzychem</title>

    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="style2.css" type="text/css" />
    <link rel="stylesheet" href="siteStyle.css" type="text/css" />
    <style>
    .content{
      padding-top: 200px;
    }


    </style>
  </head>

  <body>
    <div class="mainHeader">
      <img class="banner" src="images/banner.jpg" alt="">
      <div class="header">
        <div class="menu">
          <ul>
            <ul><a href="" class="menuBtns">Kategorie</a></ul>
            <li><a href="" class="menuBtns">Najnowsze</a></li>
            <li><a href="" class="menuBtns">Jebij posta</a></li>
            <input type="text" name="search" placeholder="Wyszukaj"><button type="button" class="btn-info btn searchBtn">XD</button>
          </ul>
        </div>
        <div class="profile">
          <ul>
            <ul><a id="profileBtn" onclick="myFunction()" href="#" class="menuBtns" data-toggle="collapse">Profil</a></ul>
          </ul>
        </div>
        <div class="dropdown">
          <div id="myDropdown" class="dropdown-content">
            <div class="loginForm" id="navbar">
              <form action="zaloguj.php" method="post">
                <input type="text" name="login" placeholder="Login">
                <input type="password" name="password" placeholder="Haslo">
                <div class="btns">
                  <input type="submit" class="btn-info btn loginBtn" value="Zaloguj">
                  <a href="logowanie.php" class="btn-info btn loginBtn">Zarejestruj się!</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="content">
      <div class="postDiv">
        <div class="content">
          <div class="postDiv">
            <div id="posty">

            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
    <script src="script.js"></script>
  </body>

  </html>
