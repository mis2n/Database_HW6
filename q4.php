<html>
<body style="background-color:#A09C9C;">
<title>Query 4</title>
<div style="text-align: left; background-color:#97D2EC;">
<h1>Supplier Table</h1>
<br>
<br>

<?php
require_once('config.inc');
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$query2 = "SELECT * FROM snp.supplier;";

$rows = $conn->query($query2);

if($rows->num_rows > 0) {
    // output data of each row
    echo "Sno  Sname   Status_     City <br>";
    echo "-------------------------<br>";
    while($row = $rows->fetch_assoc()) {
      echo " ". $row["Sno"] . " _ " . $row["Sname"]. " _ " . $row["Status_"] . " _ " . $row["City"]. "<br>";
        }
  } else {
    echo "0 results";
  }

?>
</div>
<div>
	<p>
		
		<br>
		<button type="button" onclick="location.href='index.php'">Main Menu</button>
	</p>
</div>
</body>
</html>