<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "saber";
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
$ISBN=$_POST['ISBN'];
$book_name=$_POST['book_name'];
$author=$_POST['author'];
// $sql="UPDATE tushubianmu SET book_name=$book_name,author='$author' WHERE ISBN='ISBN'";
// $result = mysqli_query($conn,$sql);
	if ($conn->connect_error) {
		die("连接失败: " . $conn->connect_error);
	}

	$sql = "UPDATE tushubianmu SET book_name='$book_name',author='$author' WHERE ISBN='$ISBN'";
	 
	if ($conn->query($sql) === TRUE) {
	    
	     echo "<script> alert('sucess');parent.location.href='main.php'; </script>"; 
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	 
	$conn->close();
	?>

				
		
