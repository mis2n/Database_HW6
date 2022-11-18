<html>
<body style="background-color:#A09C9C;">
<title>Query 1</title>
<div style="text-align: left; background-color:#97D2EC;">
<h1>Shipment Table</h1>

<?php
require_once('config.inc');
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$query = "INSERT INTO snp.shipment (Sno, Pno, Qty, Price) VALUES ('s2', 'p3', 200, 0.006);";

try{
    $results = $conn->query($query);
    echo $query;
    echo "<br><br>";
}
catch(Exception $e){
    echo "Error: " . $e->getMessage() . "<br><br>";
}

$query2 = "SELECT * FROM snp.shipment;";

$rows = $conn->query($query2);

if($rows->num_rows > 0) {
    // output data of each row
    echo "Sno  Pno   Qty     Price <br>";
    echo "-------------------------<br>";
    while($row = $rows->fetch_assoc()) {
      echo " ". $row["Sno"] . " _ " . $row["Pno"]. " _ " . $row["Qty"] . " _ " . $row["Price"]. "<br>";
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