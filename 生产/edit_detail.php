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
$publishers=$_POST['chu'];
$language=$_POST['yu'];
$position=$_POST['wei'];
$size=$_POST['chi'];
$print_type=$_POST['yin'];
$loan_status=$_POST['loan_status'];
$price=$_POST['price'];
$edition=$_POST['edition'];
$summary=$_POST['summary'];
$classfic_name=$_POST['tu'];
// $sql="UPDATE tushubianmu SET book_name=$book_name,author='$author' WHERE ISBN='ISBN'";
// $result = mysqli_query($conn,$sql);
	if ($conn->connect_error) {
		die("连接失败: " . $conn->connect_error);
	}

	$sql = "UPDATE tushubianmu SET book_name='$book_name',author='$author',publishers='$publishers',language='$language',position='$position',size='$size',print_type='$print_type',loan_status='$loan_status',price='$price',edition='$edition',summary='$summary',classfic_name='$classfic_name' WHERE ISBN='$ISBN'";
	 
	if ($conn->query($sql) === TRUE) {
	    
	     echo "<script> alert('sucess');parent.location.href='main.php'; </script>"; 
	} else {
	   
	}
	 
	$conn->close();
	?>

				
		
