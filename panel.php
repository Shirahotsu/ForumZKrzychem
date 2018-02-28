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
        <div class="contentHeader">
          <ul>
            <li><a href="#" class="prolifeBtns">Moje posty</a></li>
            <ul><a href="#" class="prolifeBtns">Zmiana hasla</a></ul>
            <li><a href="#" class="prolifeBtns">Zmiana maila</a></li>
            <li><a href="#" class="prolifeBtns">Wyloguj</a></li>
          </ul>
        </div>
        <div class="contentQuestion">

          <div class="contentInerQuestion">
            <?php
            if(isset($_SESSION['zalogowany']))
            {
                echo "ZAJEBISCIE";
            }
            ?>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero temporibus maiores qui nisi laborum repellat perspiciatis aliquam sunt, pariatur cupiditate neque corporis inventore veniam, voluptatum suscipit odio incidunt repudiandae reiciendis quae
              cum molestias. Fuga adipisci inventore officiis consectetur illo voluptatum? Deserunt cum quos, ex iste dignissimos perspiciatis illum rerum maxime neque. Explicabo exercitationem dignissimos fugit libero inventore cumque, reiciendis voluptates
              praesentium accusantium. Est laboriosam, architecto, rem at ipsa quo ea deserunt eaque ab doloremque soluta nulla aliquam vel dolor, nemo tempore quisquam quia officiis. Dicta rem, officiis voluptate repellendus suscipit facere excepturi
              vero animi nesciunt, ducimus reprehenderit id neque ipsa repellat fugit quidem facilis enim exercitationem dolorem omnis. Reiciendis temporibus hic fugit cupiditate quo quisquam, alias minima eos. Voluptates minus nihil sequi, obcaecati
              harum quidem quo officia voluptate aut blanditiis. Ipsum dolorum deserunt quisquam inventore suscipit modi aperiam quibusdam. Maxime sequi porro praesentium perspiciatis exercitationem, accusamus vel quos soluta quis esse fugiat numquam
              voluptatem reiciendis labore eius temporibus, incidunt molestias animi illum laudantium doloribus sint, amet natus debitis. Explicabo quas architecto, obcaecati. Itaque omnis, placeat debitis officia quia impedit ad tenetur incidunt esse
              delectus aliquam provident iste? Sunt ut a deserunt, accusantium eaque modi voluptatibus. Necessitatibus cupiditate ducimus quas ratione.
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
