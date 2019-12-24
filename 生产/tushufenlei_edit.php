
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "saber";
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
$bclassfication_num=$_POST['bclassfication_num'];
$bclassfication_name=$_POST['bclassfication_name'];
	if ($conn->connect_error) {
		die("连接失败: " . $conn->connect_error);
	}

	$sql = "UPDATE bclassfication SET bclassfication_name='$bclassfication_name' WHERE bclassfication_num='$bclassfication_num'";
	 
	if ($conn->query($sql) === TRUE) {
	    
	     echo "<script> alert('sucess');parent.location.href='main.php'; </script>"; 
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	 
	$conn->close();
	?>

				
		
