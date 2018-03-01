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
    <link rel="stylesheet" href="panelStyle.css" type="text/css" />
    <style>
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
            <ul><a id="profileBtn"  href="#" class="menuBtns" data-toggle="collapse">Profil</a></ul>
          </ul>
        </div>
      </div>
    </div>
    <div class="content">
      <div class="postDiv">
        <div class="contentHeader">
          <ul>
            <li><button type="button" id="posty" href="#" class="btn panelBtns">Moje posty</button></li>
            <ul><button type="button" id="zh" href="#" class="btn panelBtns zh">Zmień haslo</button></ul>
            <li><button type="button" id="zm" href="#" class="btn panelBtns">Zmień email</button></li>
            <li><button type="button" id="w" href="#" class="btn panelBtns">Wyloguj</button></li>
          </ul>
        </div>
        <div class="contentQuestion">
          <div id="panel" class="contentInerQuestion">
            <chPsswd></chPsswd>
            <chMail></chMail>
          <div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
    <script src="script.js"></script>
    <script src="panelScript.js"></script>
  </body>
  </html>
