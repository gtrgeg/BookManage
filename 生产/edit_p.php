<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "saber";
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
$uid=$_GET['uid'];
$user_name=$_POST['user_name'];
$sex=$_POST['sex'];
$phone=$_POST['phone'];
$class=$_POST['class'];
$mail=$_POST['mail'];
$pwd=$_POST['pwd'];
// $sql="UPDATE tushubianmu SET book_name=$book_name,author='$author' WHERE ISBN='ISBN'";
// $result = mysqli_query($conn,$sql);
	if ($conn->connect_error) {
		die("连接失败: " . $conn->connect_error);
	}

	$sql = "UPDATE user SET user_name='$user_name',sex='$sex',phone='$phone',class='$class',mail='$mail',pwd='$pwd' WHERE uid='$uid'";
	 
	if ($conn->query($sql) === TRUE) {
	    
	     echo "<script> alert('sucess');parent.location.href='main.php'; </script>"; 
	} else {
	   
	}
	 
	$conn->close();
	?>

				
		
