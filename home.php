<?php
session_start();

?>


<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
<div id="main">
<h1 style="background-color: gray;color: white;"><?php echo $_SESSION['name']?> está online</h1>
    <div class="output">
      <?php include 'dbh.php'; 
      $sql="SELECT  * FROM posts ";  
      $result = $conn->query($sql);

if($result->num_rows > 0) {


	while($row = $result->fetch_assoc()) {
	echo "" .$row["name"]. " " .":: " . $row["msg"]." --"
	 .$row["date"]. "<br>";
    echo "<br>";  
   }
} else { 
     echo "0 results";
	}
$conn->close();
?> 



    </div>    

<center>
<form method="post" action="send.php">
<textarea align="center" name="msg" placeholder="Digite sua Mensagem...."
class="form-control"></textarea><br>
<input type="submit" value="Enviar">
</form>
</center>
<br>

<form action="telas/saguao.php">

<input style="width: 100%;backgound-color: #6945ed;color: 
    black;font-size: 20px;" type="submit" value="Saguão">

</form>
<br>

<form action="logout.php">

<input style="width: 100%;backgound-color: #6945ed;color: 
    black;font-size: 20px;" type="submit" value="Logout">


</form>



</div>

</body>
</html>