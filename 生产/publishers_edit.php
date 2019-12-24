
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "saber";
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
$Publishers_number=$_POST['Publishers_number'];
$Publishers_name=$_POST['Publishers_name'];
	if ($conn->connect_error) {
		die("连接失败: " . $conn->connect_error);
	}

	$sql = "UPDATE publishers SET Publishers_name='$Publishers_name' WHERE Publishers_number='$Publishers_number'";
	 
	if ($conn->query($sql) === TRUE) {
	    
	     echo "<script> alert('sucess');parent.location.href='main.php'; </script>"; 
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	 
	$conn->close();
	?>

				
		
