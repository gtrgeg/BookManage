<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "saber";
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,'utf-8');
 $tprint_type=$_POST['tprint_type'];
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
 
$sql = "DELETE FROM bprint where tprint_type='$tprint_type'";
 
if ($conn->query($sql) === TRUE) {
    echo "成功删除";
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();
?>
