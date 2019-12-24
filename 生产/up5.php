
<?php
 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "saber";
// 创建连接

// var_dump($_FILES);
if(move_uploaded_file($_FILES['upfile']['tmp_name'],'./img/'.$_FILES['upfile']['name'])){
echo '上传成功！'; 
// var_dump('./img/'.$_FILES['upfile']['name']);
}
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,'utf-8');
$img='./img/'.$_FILES['upfile']['name'];
$ISBN=$_GET['ISBN'];
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
 
$sql = "UPDATE  tushubianmu SET img ='$img' where ISBN='$ISBN'";
 
if ($conn->query($sql) === TRUE) {
    echo "<script> alert('sucess');parent.location.href='main.php'; </script>"; 

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}// header("location:main.php");
$conn->close();
?>
