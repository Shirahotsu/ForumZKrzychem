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
</head>
<body>
<div class="content">
  <div class="postDiv">
    <div class="registerDiv">
      <span class="info">Zarejestuj się</span>
      <div class="innerDiv">
      <form action="">
        <input class="registerInput" id="1" type="text" name="login" placeholder="Login" id="">
        <input class="registerInput" id="2" type="password" name="password" placeholder="Haslo" id="">
        <input class="registerInput" id="3" type="password" name="password" placeholder="Powtorz haslo" id="">
        <input class="registerInput" id="4" type="text" name="mail" placeholder="e-mail" id="">
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
