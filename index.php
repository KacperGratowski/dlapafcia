<!doctype HTML>
<html>
<!--JN1-->
	<head>
		<title>AnarchiaSMP</title>
		<meta encoding = "UTF-8">
		<meta name="description" content="Oficjalna strona Anarchii SMP.">
		 <link rel="stylesheet" href="..\css\landing.css">
		 <link rel="icon" 
      type="image/png" 
      href="..\images\heart.png">
	</head>
	<body>
<?php
	if(!array_key_exists("more", $_GET))
?>
<d1v class="1">
	<h1 class="text"><span>serca graczy</span></h1>
	</div>
	<div class="2">
	<table class = "lista , anim"><tbody>
<?php
$servername = "127.0.0.1";
$username = "Anarchia";
$password = "Anarchia";
$dbname = "Anarchia";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT nick,hearts FROM users ORDER BY hearts DESC";


$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {

	echo '<tr>';
	echo '<td> <img class="glufka" src="https://mc-heads.net/avatar/' . $row["nick"] . '" alt="' . $row["nick"] . '" height=75 width=75></td> <td><h2>'.$row["nick"].'</h2></td> <td class="UwU">'.$row["hearts"].'</td>   <td  class="UwU"><img src="..\images\heart.png" alt="serce" height=20 width=20 class = "serduszko"></td>';
	echo '</tr>';
	echo '</div>';
	
}

$conn->close();
?>
</tbody>
</table>
<?php
	
	echo '<a href="../" class="guzik">Powrót</a>';
	
		
		
	
	
?>

	</body>
</html>