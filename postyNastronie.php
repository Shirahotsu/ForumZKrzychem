<?php
ini_set("display_errors", 0);
require_once 'dbconnect.php';
$polaczenie = mysqli_connect($host, $user, $password);
mysqli_query($polaczenie, "SET CHARSET utf8");
mysqli_query($polaczenie, "SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
mysqli_select_db($polaczenie, $database);

// get the parameter from URL
$nr = $_GET["elo"];
$nr = intval($nr);
$i = $nr;
while ($i < 5)
{
  if($i==0){
  $zapytanietxt = "SELECT *
  FROM dane
  WHERE id=(
      SELECT max(id) FROM dane
    )";
  }
  else{
  $zapytanietxt = "SELECT *
  FROM dane
  WHERE id=(
      SELECT max(id) FROM dane
    )".-$i;
}

$rezultat = mysqli_query($polaczenie, $zapytanietxt);
		$row = mysqli_fetch_assoc($rezultat);
    $header = $row['header'];
    $id = $row['id'];

echo<<<END
<div class="contentHeader"><a href="nwm.php?elo=$id">$header</a></div>
END;
$i++;
}

?>

<!--

1. zrobić by po kliknięcu odpalao danego posta po $_GET['elo']
2. ustawić 5 najnowszych postó
3. zrobić funkcjię inkrementacji i dekrementacji jak wybierze się kolejną stronę


 -->
