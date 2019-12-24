<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "saber";
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
$u=$_POST['u'];
$rclassfic_name=$_POST['rclassfic_name'];
$a = array(explode("/",$u));
$uid=$a[0][0];
	if ($conn->connect_error) {
		die("连接失败: " . $conn->connect_error);
	}

	 $sql = "UPDATE user SET rclassfic_name='rclassfic_name ' WHERE uid='$uid'";	
	if ($conn->query($sql) === TRUE) {
	    
	     echo "<script> alert('sucess');parent.location.href='main.php'; </script>"; 
	} else {
	   echo "Error: " . $sql . "<br>" . $conn->error;
	}
	 
	$conn->close();
	?>


				
		
