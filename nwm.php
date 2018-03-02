<?php





 // // if(isset($_POST['name']) === true && empty($_POST['name']) === false){
 //   require 'sql.php';
 //   $query = mysql_query('
 //    SELECT `dane`.`conntent`
 //    FROM `dane`
 //    WHERE 'dane'.`id`='2';
 //   ');
 //   echo (mysql_num_rows($query)!==0) ? msql_result($query, 0, 'conntent'):'ni mo';
 // // }
 $q = intval($_GET['q']);
 require 'sql.php';
   $query = mysql_query("SELECT * FROM dane WHERE id = '".$q."'");

 echo "<table>
 <tr>
 <th>Firstname</th>
 <th>Lastname</th>
 <th>Age</th>
 <th>Hometown</th>
 <th>Job</th>
 </tr>";
 while($row = mysqli_fetch_array($query)) {
     echo "<tr>";
     echo "<td>" . $row['id'] . "</td>";
     echo "<td>" . $row['user'] . "</td>";
     echo "<td>" . $row['conntent'] . "</td>";
     echo "<td>" . $row['time'] . "</td>";
     echo "<td>" . $row['category'] . "</td>";
     echo "</tr>";
 }
 echo "</table>";
 mysqli_close($con);
 ?>
