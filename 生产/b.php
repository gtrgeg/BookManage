<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "saber";
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
$u=$_POST['u'];
$b=$_POST['b'];
$a = array(explode("/",$u));
$uid=$a[0][0];
$aa= array(explode("/",$b));
$ISBN=$aa[0][0];
	if ($conn->connect_error) {
		die("连接失败: " . $conn->connect_error);
	}

	 $sql = "UPDATE tushubianmu SET loan_status='已借出',borrower_id='$uid' WHERE ISBN='$ISBN'";
	 $sql2= "UPDATE user SET B_ISBN='$ISBN' WHERE uid='$uid'";
	 $sql3="SELECT * from tushubianmu WHERE ISBN='$ISBN' ";
	 $rs=$conn->query($sql3);
	 $n = $rs->fetch_row();
	 $die=$n[9];
	 if ($n[12]=="已借出") {
	 	  die("此书已借出给$die ");
	 	}elseif ($conn->query($sql) === TRUE||$conn->query($sql2)=== TRUE) {
	 echo "<script> alert('sucess');parent.location.href='brmanage.php'; </script>"; 
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
	?>

				
		
