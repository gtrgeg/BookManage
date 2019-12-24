<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "saber";
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
$u=$_POST['u'];
$ISBN=$_POST['ISBN'];
$a = array(explode("/",$u));
$uid=$a[0][0];
	if ($conn->connect_error) {
		die("连接失败: " . $conn->connect_error);
	}

	 $sql = "UPDATE tushubianmu SET loan_status='在馆',borrower_id=' ' WHERE ISBN='$ISBN'";
	 $sql2= "UPDATE user SET B_ISBN=' ' WHERE uid='$uid'";	
	if ($conn->query($sql) === TRUE||$conn->query($sql2) === TRUE) {
	    
	     echo "<script> alert('sucess');parent.location.href='brmanage.php'; </script>"; 
	} else {
	   echo "Error: " . $sql . "<br>" . $conn->error;
	}
	 
	$conn->close();
	?>


				
		
