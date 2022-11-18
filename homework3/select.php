<?php
$dbhost = 'localhost';  // mysql服务器主机地址
$dbuser = 'root';            // mysql用户名
$dbpass = 'root';          // mysql用户名密码
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
    die('Could not connect: ' . mysqli_error());
}
echo '数据库连接成功！';
USE test-1;
$sql = "SELECT * FROM websites WHERE id = '1' ";

//$res=$conn->query($sql);
$res=mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($res)) {
    echo "id:" . $row["id"]. "  username:   " . $row["username"]. "    title:   " . $row["title"] ."  content:  " . $row["content"] . " time:   ". $row["time"] ."<br>";
}

mysqli_close($conn);
?>
