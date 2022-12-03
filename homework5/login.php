<?php
$user=$_GET['username'];
$pwd=$_GET['password'];
$con=mysqli_connect('localhost','root','root','test-1');
if($con){
    mysqli_query($con,'set names utf8');
    $sql="select * from login where username='$user' and password='$pwd'";
    $res=mysqli_query($con,$sql);
    if($res->num_rows > 0){
        echo "登录成功";
    } else {
        echo "账号或密码错误";
    }
}else{
echo "连接失败";
}
mysqli_close($con);
