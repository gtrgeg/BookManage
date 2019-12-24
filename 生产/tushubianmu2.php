<style>
table  td{
text-align:center;//水平居中
line-height: 25px;//行高
vertical-align:middle；//垂直居中
}
<style>
table tr {
text-align:center;//水平居中
line-height: 25px;//行高
vertical-align:middle；//垂直居中
}
</style>
</style>
<div class="table-responsive" id="index-form">
	<table class="table">
		<caption style="text-align: center;">图书编目</caption>
		<thead >
			<tr >
				<th style="text-align: center;">书名</th>
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
				<tr>
					<td><?php echo $row['ISBN'];?></td>
					<td><?php echo $row['book_name'];?></td>
					<td><?php echo $row['ISBN'];?></td>
				</tr>
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
<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
	新增图书
</button>
<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" style="text-align: center;">
		<div class="modal-content" >
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title" id="myModalLabel">
					大大图书馆
				</h4>
			</div>
			<div class="modal-body">
				<form action="tushubianmu_insert.php" method="post" >
ISBN: <input type="text"  name="ISBN"><br><br>
图书名: <input type="text" name="book_name"><br><br>
作者: <input type="text"  name="author"><br><br>
<input type="submit" >
</form>

			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal -->
</div> 
<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal3">
	删除图书
</button>
<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" style="text-align: center;">
		<div class="modal-content" >
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title" id="myModalLabel">
					大大图书馆
				</h4>
			</div>
			<div class="modal-body">
				<form action="tushubianmu_delete.php" method="post" >
请输入ISBN号: <input type="text"  name="ISBN"><br><br>
<input type="submit" >
</form>

			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal -->
</div> 

 
