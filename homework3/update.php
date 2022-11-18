<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "homework";
$conn = new mysqli($servername, $username, $password,$dbname);

$sql = "UPDATE test SET username ='root',title='update' WHERE id = 4 ";
$res=mysqli_query($conn,$sql);

$conn->close();
