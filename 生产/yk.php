<head>
	<title>导航界面</title>
	<?php

header("content-type:text/html;charset=utf-8");         //设置编码

?>
<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="01.js" count="200" zindex="-2" opacity="0.5" color="47,135,193" type="text/javascript">
    </script>
    <style>
table  td{
text-align:center;//水平居中
line-height: 25px;//行高
vertical-align:middle；//垂直居中
}
table tr {
text-align:center;//水平居中
line-height: 25px;//行高
vertical-align:middle；//垂直居中
}
</style>
<div class="panel panel-default" style="background-color: #ed5a65;margin-left: 150px;margin-right: 150px;height: 45px" >
    <div class="panel-body">

         <Strong> 欢迎您！
 <div class="pull-right">
                <span class="glyphicon glyphicon-calendar"></span>
                <?php
                $Today = date('y:m:d');
                $new = date('l, F d, Y', strtotime($Today));
                echo $new;
                ?>
              </div>
          </div>  
        </div>
        <br>
        <br>
        <br>
<div class="table-responsive" id="index-form">
	<table class="table">
		<thead>
			<tr >
				<th style="text-align: center;">ISBN</th>
				<th style="text-align: center;">图书简介</th>
				<th style="text-align: center;">状态</th>
			</tr>
		</thead>
		<tbody>
<?php 
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "saber";
				 
				// 创建连接
				$conn = new mysqli($servername, $username, $password, $dbname);
				$sql="SELECT * FROM tushubianmu";
				$result = mysqli_query($conn,$sql);
				while ($row = mysqli_fetch_array($result)) {
			?>
				<tr id="bi">
					<td id="<?php echo $row['ISBN'];?>" ><?php echo $row['ISBN'] ;?></td>
					<td id="<?php echo $row['ISBN'];?>"><?php echo $row['book_name'];?></td>
					<td id="<?php echo $row['ISBN'];?>"><?php echo $row['author'];?></td>
			<?php
				}
				 // var_dump($result);
				 // var_dump($row);
				 // var_dump($row['ISBN']);
				 // echo $row['ISBN'];
			;?>

		</tbody>
</table>
</div>
<br><br>  
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="text-align: center;">
        <div class="modal-content" >
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    注册新账号
                </h4>
            </div>
            <div class="modal-body">
                <form method="post" action="user_insert.php" >
姓名: <input type="text"  name="user_name" ><br><br>
学号:<input type="text"  name="uid" ><br><br>
性别: <input type="text" name="sex" id="demo2" onblur="myFunction2();"><span id="err2"></span><br><br>
<!-- 出生日期: <input type="text"  name="birthday"><br><br> -->
联系电话: <input type="text"  name="phone"><br><br>
班级: <input type="text" name="class" ><br><br>
电子邮箱: <input type="email"  name="mail" ><br><br>
密码: <input type="text"  name="pwd"><br><br>
<input type="submit" >
</form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div> <br><br><br><br><br><center>
<p>感兴趣？点击<a href="#" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-user" ></span> 注册</a>拥有自己的账号吧!</p></center><br><br>
<center>
	
    