<?php

echo "<h1>Hello World</h1>";

$servername = "localhost";
$username = "csclubadm";
$password = "csclub123";
$dbname = "csclubdb";

try{
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql = "select * from officers";
	$conn->exec($sql);
	echo "<h2>SQL injection worked.<h2>";
	echo "<table>";
	$result = mysql_query($sql);
	while($row = mysql_fetch_array($result)){
		echo "<p>Hello</p>";
		echo "<tr><td>" . $row['name'] . "</td><td>" . $row["role"] . "</td><td>" . $row["membership_year"] . "</td><td>" . $row["email"] . "</td></tr>";
	}
	echo "</table>";
	echo "<h1>Table up there</h1>";
}
catch(PDOException $e)
	{
	echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
//mysql_close();
?>
