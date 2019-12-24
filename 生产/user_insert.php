<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "saber";
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,'utf-8');






 
 $user_name=$_POST['user_name'];
 $uid=$_POST['uid'];
 $sex=$_POST['sex'];
 // $birthday=$_POST['birthday'];
 $phone=$_POST['phone'];
 $class=$_POST['class'];
 $mail=$_POST['mail'];
 $pwd=$_POST['pwd'];
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
 
$sql = "INSERT INTO user (user_name,uid,sex,phone,class,mail,pwd)
VALUES ('$user_name','$uid','$sex','$phone','$class','$mail','$pwd')";
 
if ($conn->query($sql) === TRUE) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();
?>
