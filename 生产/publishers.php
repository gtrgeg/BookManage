<div class="table-responsive" id="index-form">
	<table class="table">
		<caption style="text-align: center;">出版社设置</caption>
		<thead>
			<tr >
				<th style="text-align: center;">出版社编号</th>
				<th style="text-align: center;">出版社名称</th>
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
				$sql="SELECT * FROM publishers";
				$result = mysqli_query($conn,$sql);
				while ($row = mysqli_fetch_array($result)) {
			?>
				<tr >
					<td style="text-align: center;" id="<?php echo $row['Publishers_number'];?>"><?php echo $row['Publishers_number'] ;?></td>
					<td style="text-align: center;" id="<?php echo $row['Publishers_number'];?>"><?php echo $row['Publishers_name'];?></td>
				</tr>
			<?php
				}
			;?>

		</tbody>
</table>
</div>
<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
	添加
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
					添加
				</h4>
			</div>
			<form action="publishers_insert.php" method="post" >
出版社编号: <input type="text"  name="Publishers_number"><br><br>
出版社名称: <input type="text" name="Publishers_name"><br><br>
<input type="submit" >
</form>

		</div><!-- /.modal-content -->
	</div><!-- /.modal -->
</div> 
<button  id="del" class="btn btn-primary btn-sm">
	删除
</button>
<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal3" id="edit">编辑图书</button>
<script type="text/javascript">
	var y="";
	$("td").click(function(){
		y=$(this).attr("id");
		

});
$("#del").click(function(){
    $.post("publishers_delete.php",
    {
       Publishers_number:y
    },
        function(data,status){
        alert(data);
    });
});
</script>
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">大大图书馆</h4>
            </div>
           <form action="publishers_edit.php" method="post" style="text-align: center;" >
出版社编号: <input type="text"  name="Publishers_number"><br><br>
出版社名称: <input type="text" name="Publishers_name"><br><br>
<input type="submit" >
</form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>