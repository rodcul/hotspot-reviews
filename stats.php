<?php include("template/header.php"); ?>
<div class="container">
<a href="logs.php">Logs</a>
<?php
   include('config.php');


   $conn = mysql_connect($dbhost, $dbuser, $dbpass);

   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }

   $sql = 'SELECT DATE(create_time)as date,ROUND(AVG(rating),1) as rating, count(id) as count FROM hotspot.ratings GROUP BY DATE(create_time) ORDER BY date desc';
   mysql_select_db($db);
   $retval = mysql_query( $sql, $conn );

   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }


   echo "<table>";
   echo "<thead><tr><th>DATE</th><th>RATING</th><th>COUNT</th></tr></thead>";

   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {

     echo "<tbody><tr>";


     echo "<td>{$row['date']}</td>";
     echo "<td>{$row['rating']}</td>";
     echo "<td>{$row['count']}</td>";

     echo "</tr></tbody>";

   }

   echo "</table>\n";
   mysql_close($conn);
?>
</div>
<?php include("template/footer.php"); ?>
