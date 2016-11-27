<div class="container-fluid" id="image2016">	
<?php
  //declaring variables for DB info
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "barbells_and_brews";
  // Create connection
  $connection = new mysqli($servername, $username, $password, $database);

  // Check connection
  if ($connection->connect_error) {
      die("Connection failed: " . $connection->connect_error);
  } 
  
  // Create SQL query and call on DB
	$query = "SELECT * FROM $competition ORDER BY Gender, CASE WHEN weightClass='105+' then 1 else 0 end, CASE WHEN weightClass='105' then 1 else 0 end, weightClass, total DESC, place DESC;";  //You don't need a ; like you do in SQL
	$result = mysqli_query($connection, $query);

  // Create HTML table with while loop
	echo "<div class=\"results\"><table>"; // start a table tag in the HTML
	echo "<th>Gend.</th><th>USAW#</th><th>Class</th><th>Name</th><th>BWT</th><th>Sn. 1</th><th>S. 2</th>
	<th>Sn. 3</th><th>Best Sn.</th><th>C&J 1</th><th>C&J2</th><th>C&J 3</th>
	<th>Best C&J</th><th>Total</th><th>Pl.</th>";
	while($row = mysqli_fetch_array($result, MYSQL_BOTH)){   //Creates a loop to loop through results
		echo "<tr><td>" . $row["Gender"] . "</td><td>" . $row['USAW_Number'] ."</td><td>" . $row['weightClass'] ."</td><td>" . $row['Name'] . "</td><td>" . $row['bodyweight'] . "</td><td>" . $row['snatch1'] . 
		"</td><td>" . $row['snatch2'] . "</td><td>" . $row['snatch3'] . "</td><td><strong>" . $row['bestSnatch'] . "</strong></td><td>" . $row['cleanAndJerk1'] . 
		"</td><td>" . $row['cleanAndJerk2'] . "</td><td>" . $row['cleanAndJerk3'] . "</td><td><strong>" . $row['bestCleanAndJerk'] . 
		"</strong></td><td><strong>" . $row['total'] . "</strong></td><td><strong>" . $row['place'] . "</strong></td></tr>";  //$row['index'] the index here is a field name
	}

  echo "</table></div>"; //Close the table in HTML

?>

</div>
