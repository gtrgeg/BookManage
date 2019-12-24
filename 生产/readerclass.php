<div class="table-responsive" id="index-form">
	<table class="table">
		<caption style="text-align: center;">读者分类设置</caption>
		<thead>
			<tr >
				<th style="text-align: center;">读者分类号</th>
				<th style="text-align: center;">读者分类名</th>
				<th style="text-align: center;">可借图书书目</th>
				<th style="text-align: center;">还书时限（日）</th>
				<th style="text-align: center;">停用否</th>
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
				$sql="SELECT * FROM rclassfication";
				$result = mysqli_query($conn,$sql);
				while ($row = mysqli_fetch_array($result)) {
			?>
				<tr >
					<td style="text-align: center;"><input type="checkbox" name="<?php echo $row['rc_num'] ;?>" id="ai"><?php echo $row['rc_num'] ;?></td>
					<td style="text-align: center;"><?php echo $row['rc_name'] ;?></td>
					<td style="text-align: center;" ><?php echo $row['rc_bnum'];?></td>
					<td style="text-align: center;" ><?php echo $row['rc_dnum'];?></td>
					<td style="text-align: center;" ><?php  echo $row['stop'];?></td>
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
			<form action="readerclass_insert.php" method="post" >
读者分类编号: <input type="text"  name="rc_num"><br><br>
读者分类名: <input type="text" name="rc_name"><br><br>
可借图书数目: <input type="text" name="rc_bnum"><br><br>
还书时限（日）: <input type="text" name="rc_dnum"><br><br>
停用否: <input type="text" name="stop"><br><br>
<input type="submit" >
</form>

		</div><!-- /.modal-content -->
	</div><!-- /.modal -->
</div> 
<button  id="del" class="btn btn-primary btn-sm">
	删除
</button>
<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal3" id="edit">编辑</button>
<script type="text/javascript">
	var y="";
	$("#ai").click(function(){
		y=$(this).attr("name");
		

});
$("#del").click(function(){
    $.post("rc_delete.php",
    {
       rc_num:y
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
           <form action="readerclass_edit.php" method="post" style="text-align: center;" >
读者分类编号: <input type="text"  name="rclassfication"><br><br>
可借书本数目: <input type="text" name="rc_bnum"><br><br>
还书期限: <input type="text" name="rc_dnum"><br><br>
停用否: <input type="text" name="stop"><br><br>
<input type="submit" >
</form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>