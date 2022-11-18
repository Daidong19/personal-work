<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "homework";
$conn = new mysqli($servername, $username, $password,$dbname);
$sql = "SELECT * FROM test WHERE username = 'root' ";
$res=mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($res)) {
    echo "id:" . $row["id"]. "  username:   " . $row["username"]. "    title:   " . $row["title"] ."  content:  " . $row["content"] . " time:   ". $row["time"] ."<br>";
}

$conn->close();
