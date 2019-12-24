<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "saber";
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,'utf-8');
 $t_size=$_POST['t_size'];
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
 
$sql = "INSERT INTO bsize (t_size)
VALUES ('$t_size')";
 
if ($conn->query($sql) === TRUE) {
    echo "<script> alert('sucess');parent.location.href='ck.php'; </script>"; 

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}// header("location:main.php");
$conn->close();
?>
