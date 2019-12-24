<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "saber";
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,'utf-8');
 $rc_num=$_POST['rc_num'];
 $rc_name=$_POST['rc_name'];
 $rc_bnum=$_POST['rc_bnum'];
 $rc_dnum=$_POST['rc_dnum'];
 $stop=$_POST['stop'];
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
 
$sql = "INSERT INTO rclassfication (rc_num,rc_name,rc_bnum,rc_dnum,stop)
VALUES ('$rc_num','$rc_name','$rc_bnum','$rc_dnum','$stop')";
 
if ($conn->query($sql) === TRUE) {
    echo "<script> alert('sucess');parent.location.href='main.php'; </script>"; 

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}// header("location:main.php");
$conn->close();
?>
