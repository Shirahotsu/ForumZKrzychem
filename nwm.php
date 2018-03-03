<?php
ini_set("display_errors", 0);
require_once 'dbconnect.php';
$polaczenie = mysqli_connect($host, $user, $password);
mysqli_query($polaczenie, "SET CHARSET utf8");
mysqli_query($polaczenie, "SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
mysqli_select_db($polaczenie, $database);

// get the q parameter from URL
$nr = $_GET["elo"];
$nr = intval($nr);
$zapytanietxt = "SELECT *
FROM dane
WHERE id=".$nr;
// SELECT * FROM dane WHERE id=".$nr."

$rezultat = mysqli_query($polaczenie, $zapytanietxt);
$ile = mysqli_num_rows($rezultat);
	for ($i = 1; $i <= $ile; $i++)
	{

		$row = mysqli_fetch_assoc($rezultat);
		$id = $row['id'];
    $user = $row['user'];
    $header = $row['header'];
    $post = $row['conntent'];
    $time = $row['time'];
    $category = $row['category'];

echo<<<END



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
        <div id="mainQuestDiv">
        <div class="contentHeader">$header</div>
        <div class="contentQuestion">
          <div class="contentQuestionInfo">
            <div class="infoImage">
              <div class="profileImage"></div>
              <div class="postInfo">$user doadal post: $time w kategorii: $category </div>
            </div>
            <div class="postLike"></div>
          </div>
          <div class="contentInerQuestion">
          $post
          </div>
          <div class="tags">
            <ul>
              <li><a href="">HEHE</a></li>
              <li><a href="">XD</a></li>
              <li><a href="">ELLO</a></li>
            </ul>
          </div>
        </div>
        </div>
        <div class="contentAnswares">
          <div class="contentAnswareHeader">#Wypierdalać</div>
          <div class="contentAnsware">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut doloremque quibusdam quis, veritatis doloribus porro adipisci vero facere, velit saepe quasi illo quod aliquam natus, nobis cupiditate iusto minima! Eum dolores veritatis, laudantium vel itaque
            praesentium veniam rem quod, consectetur, voluptate dolorem? Sint quod sapiente officia nulla vitae animi, architecto possimus tempore, vero, autem natus maiores pariatur ipsum eaque adipisci tenetur iusto iure non nostrum reprehenderit. Soluta
            expedita optio aspernatur tempore sapiente officia, commodi quaerat. Deleniti in ducimus libero est doloribus maxime asperiores impedit, quas totam, labore optio delectus et, molestiae! Accusamus assumenda culpa, neque esse distinctio ab natus
            dolore enim voluptatibus dolorem libero ipsam a suscipit aliquam quod, exercitationem, aspernatur aliquid eum voluptate. Possimus atque doloribus illo illum. Officia, voluptas aut eligendi quibusdam repellendus, iusto quos velit similique
            ducimus minus repudiandae perspiciatis voluptates? Molestias, quas optio error explicabo perferendis non commodi reprehenderit ipsum! Officiis beatae distinctio deleniti, neque nam eos consequatur cumque, enim nisi nobis eaque soluta adipisci
            error vero veniam totam ipsum ut veritatis a vel rerum ipsam? Facere laborum libero excepturi, ratione id, sed doloribus ex maxime cupiditate nesciunt distinctio nisi magnam tempora aliquam reiciendis deleniti at alias. Sint minus doloribus
            ex aliquam deleniti debitis facilis corrupti.
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
    <script src="onePostScript.js"></script>
  </body>

  </html>

END;

	}

?>
