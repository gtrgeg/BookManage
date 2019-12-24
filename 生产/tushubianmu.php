<?php
header("content-type:text/html;charset=utf-8");         //设置编码
?>
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
<div class="table-responsive" id="index-form">
	<table class="table">
		<caption style="text-align: center;">图书编目</caption>
		<thead>
			<tr >
				<th style="text-align: center;">书名</th>
				<th style="text-align: center;">图书简介</th>
				<th style="text-align: center;">状态</th>
				<th style="text-align: center;">操作</th>
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
				<tr >
					<td ><input type="checkbox" name="<?php echo $row['ISBN'] ;?>" id="ai"><?php echo $row['ISBN'] ;?></td>
					<td ><?php echo $row['book_name'];?></td>
					<td ><?php echo $row['author'];?></td>
					<td ><a href="detail.php?ISBN=<?php echo $row['ISBN'];?>" type="button" class="btn btn-default">详情</a></td>
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
			<form action="tushubianmu_insert.php" method="post" >
ISBN: <input type="text"  name="ISBN"><br><br>
图书名: <input type="text" name="book_name"><br><br>
作者: <input type="text"  name="author"><br><br>
<input type="submit" >
</form>

		</div><!-- /.modal-content -->
	</div><!-- /.modal -->
</div> 
<button  id="del" class="btn btn-primary btn-sm">
	删除图书
</button>
<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal3" id="edit">编辑图书</button>
<script type="text/javascript">
	<script type="text/javascript">
	var y="";
	$("#ai").click(function(){
		y=$(this).attr("name");
		

});
$("#del").click(function(){
    $.post("tushubianmu_delete.php",
    {
      ISBN:y
    },
        function(data,status){
        alert(data);
    });
});

// $(document).ready(function(){
// 	$("#bi").dblclick(function(){
// 	// fun1();
// 	// fun2();
// 	window.location.href="detail.php?ISBN"+x;
// // 		function fun1(){
// // 	$.post("detail.php",
// //     {
// //        ISBN:x
// //     }
// // };
// function fun2(){
// 	window.location.href="detail.php";
// }
// 	});
// });
// $("#edit").click(function(){
// 	<?php

// 		$ISBN="<script type=text/javascript>document.write(x)；3.</script>";
// 	?>

// });


</script>
<!-- 按钮触发模态框 -->

<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">大大图书馆</h4>
            </div>
           <form action="edit_modal.php" method="post" style="text-align: center;" >
ISBN: <input type="text"  name="ISBN" ><br><br>
图书名: <input type="text" name="book_name"><br><br>
作者: <input type="text"  name="author"><br><br>
<input type="submit" >
</form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>
