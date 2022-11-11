<html>
<head><title>Get Part Data</title></head>

<?php
require_once('config.inc');
$hostname = "mysql:dbname=". $dbname . ";host=" . $servername;
$db = new PDO('mysql:dbname=snp;host=localhost', $username, $password);
?>

<body style="background-color:#FEF5AC;">
<br>
<h1>Select part to display data . . .</h1>
<br>

<form action="q5_execute.php" method="get">
	<label for="custid">Part</label>
	<select id="custid" name="custid">

<?php
$select = 'SELECT Pno FROM snp.part';
$rows = $db->query($select)->fetchALL(PDO::FETCH_ASSOC);
print_r($rows);
foreach($rows as $row){
	echo "<option value=\"" . $row['Pno'] . "\">";
	echo $row['Pno'];
	echo "</option>";
}
?>
	</select>
<input type=submit>
</form>

<br><br>
<div><p><button type="button" onclick="location.href='index.php'">Main Menu</button><p></div>