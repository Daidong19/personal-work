<?php
$alter=$_POST['new_username'];
$con=mysqli_connect('localhost','root','root','test-1');
if($con){
    mysqli_query($con,'set names utf8');
    $sql="update altername set username=$alter";
    $res=mysqli_query($con,$sql);
    if($res->num_rows > 0){
        echo "修改成功";
    }
    else {
        echo "修改失败";
    }
}
else {
    echo "连接失败";
}
mysqli_close($con);