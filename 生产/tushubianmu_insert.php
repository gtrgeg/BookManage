<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "saber";
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,'utf-8');
 $ISBN=$_POST['ISBN'];
 $book_name=$_POST['book_name'];
 $author=$_POST['author'];
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
 
$sql = "INSERT INTO tushubianmu (ISBN,book_name,author)
VALUES ('$ISBN','$book_name','$author')";
 
if ($conn->query($sql) === TRUE) {
    echo "<script> alert('sucess');parent.location.href='main.php'; </script>"; 

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}// header("location:main.php");
$conn->close();
?>
