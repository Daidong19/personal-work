<?php
$user=$_POST['username'];
$sex=$_POST['sex'];
$phone_number=$_POST['phone_number'];
$qq=$_POST['qq'];
$college=$_POST['college'];
$profession=$_POST['proffession'];
$con=mysqli_connect('localhost','root','root','test-1');
if($con) {
    mysqli_query($con, 'set names utf8');
    $sql = "insert into information(usename,sex,phone_number,qq,college,profession) values($user,$sex,$phone_number,$qq,$college,$profession)";
    $res = mysqli_query($con, $sql);
    if ($res->num_rows > 0) {
        echo "插入成功";
    } else {
        echo "插入失败";
    }
}
else {
    echo "连接失败";
}
mysqli_close($con);