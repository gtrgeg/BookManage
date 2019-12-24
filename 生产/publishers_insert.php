<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "saber";
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,'utf-8');
 $Publishers_number=$_POST['Publishers_number'];
 $Publishers_name=$_POST['Publishers_name'];
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
 
$sql = "INSERT INTO publishers (Publishers_number,Publishers_name)
VALUES ('$Publishers_number','$Publishers_name')";
 
if ($conn->query($sql) === TRUE) {
    echo "<script> alert('sucess');parent.location.href='main.php'; </script>"; 

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}// header("location:main.php");
$conn->close();
?>
