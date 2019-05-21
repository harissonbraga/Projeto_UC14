<?php 

$conn=mysqli_connect("senacinfo-db","inf_m171","senacrs","m171_06_Prisma");
if(!$conn){
	
	die("connection failed".mysqli_connect_error());  
}

?>