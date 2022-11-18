<html>
<body style="background-color:#A09C9C;">
<title>Query 1</title>
<div style="text-align: left; background-color:#97D2EC;">
<h1>Shipment Table</h1>
<br>


<?php
require_once('config.inc');

$cid = $_GET["custid"];

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$query2 = "SELECT * FROM snp.shipment WHERE Pno='" . $cid . "';";

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
		<button type="button" onclick="location.href='q5.php'">Select Another Part</button>
	</p>
</div>
<div>
	<p>
		
		<br>
		<button type="button" onclick="location.href='index.php'">Main Menu</button>
	</p>
</div>
</body>
</html>