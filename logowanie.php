<?php
    session_start();
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>TiT</title>

	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="registryStyle.css" type="text/css" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
</head>
<body>
  <img src="images/regImg.jpeg" alt="" class="bgc">
<div class="content">
  <div class="postDiv">
    <div id="regDiv" class="registerDiv">
      <div class="innerDiv">
      <form action="">
        <input class="registerInput" id="i4" type="text" name="mail" placeholder="e-mail" id="">
        <input class="registerInput" id="i1" type="text" name="login" placeholder="Login" id="">
        <input class="registerInput" id="i2" type="password" name="password" placeholder="Haslo" id="">
        <input class="registerInput" id="i3" type="password" name="password" placeholder="Powtórz haslo" id="">
        <input type="submit" id="reg" class="btn-info btn loginBtn" value="Zarejestruj">
      </form>
      </div>
  </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="js/bootstrap.js"></script>
<script src="registryScript.js"></script>
</body>
</html>
