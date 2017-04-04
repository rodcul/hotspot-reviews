<?php include("template/header.php"); ?>
<div class="container">
<a href="stats.php">Stats</a>
<?php
   include('config.php');


   $conn = mysql_connect($dbhost, $dbuser, $dbpass);

   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }

   $sql = 'SELECT * FROM hotspot.ratings order by id desc';
   mysql_select_db($db);
   $retval = mysql_query( $sql, $conn );

   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }


   echo "<table>";
   echo "<thead><tr><th>TIMESTAMP</th><th>UID</th><th>RATING</th></tr></thead>";

   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {

     echo "<tbody><tr>";


     echo "<td>{$row['create_time']}</td>";
     echo "<td>{$row['uid']}</td>";
     echo "<td>{$row['rating']}</td>";
     echo "</tr></tbody>";

   }
   echo "</table>\n";

   mysql_close($conn);
?>
</div>
<?php include("template/footer.php"); ?>
