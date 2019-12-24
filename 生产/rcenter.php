<?php 
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "saber";
// $ISBN=$_GET['ISBN'];
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,'utf-8');
$uid=$_SESSION['uid'];
// 检测连接
 $conn = new mysqli($servername, $username, $password, $dbname);
				$sql="SELECT * FROM user WHERE uid='$uid'";
				$result = mysqli_query($conn,$sql);
				while ($row = mysqli_fetch_array($result)) {
			?>
					<center>
					<form action="edit_p.php?uid=<?php echo $row['uid'] ;?>" method="post" class="bs-example bs-example-form" role="form" style="width: 300px;">
					<div class="input-group" >			
					<span class="input-group-addon">用户ID</span>
					<input class="form-control" disabled="disabled" type="text" name="uid" value="<?php echo $row['uid'] ;?>" ></div><br>
					<div class="input-group" >
					<span class="input-group-addon">用户名:</span>
					<input class="form-control" type="text" name="user_name" value="<?php echo $row['user_name'];?>"></div><br>
					<div class="input-group" >
					<span class="input-group-addon">性别:</span>
					<input class="form-control" type="text" name="sex" value="<?php echo $row['sex'];?>"></div><br><br>
					<div class="input-group" >
					<span class="input-group-addon">电话:</span>
					<input class="form-control" type="text" name="phone" value="<?php echo $row['phone'];?>"></div><br>
					<div class="input-group" >
					<span class="input-group-addon">班级:</span>
					<input class="form-control" type="text" name="class" value="<?php echo $row['class'];?>"></div><br>
					<div class="input-group" >
					<span class="input-group-addon">邮箱地址:</span>
					<input class="form-control" type="text" name="mail" value="<?php echo $row['mail'];?>"></div><br>
					<div class="input-group" >			
					<span class="input-group-addon">密码</span>
					<input class="form-control" type="text" name="pwd" value="<?php echo $row['pwd'];?>" ></div><br><br><br>
					<input type="submit" class="btn btn-default ">
			</form></center>
			<?php
				}
 ?>