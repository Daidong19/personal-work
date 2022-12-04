<?php
$user=$_POST['username'];
$pwd=$_POST['password'];
$con=mysqli_connect('localhost','root','root','test-1');
if($con) {
    mysqli_query($con, 'set names utf8');
    $sql = "insert into register(username,password) values($user,$pwd)";
    $res = mysqli_query($con, $sql);
    if ($res->num_rows > 0) {
        echo "注册成功";
    } else {
        echo "注册失败";
    }
}
else {
    echo "连接失败";
}
mysqli_close($con);
