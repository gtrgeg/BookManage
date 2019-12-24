<div class="table-responsive" id="index-form">
	<table class="table">
		<tbody>
			<?php 
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "saber";
				 
				// 创建连接
				$conn = new mysqli($servername, $username, $password, $dbname);
				$sql="SELECT * FROM bposition";
				$result = mysqli_query($conn,$sql);
				while ($row = mysqli_fetch_array($result)) {
			?>
				<tr >
					<td ><input type="checkbox"  name="<?php echo $row['t_position'] ;?>" id="ai"><?php echo $row['t_position'] ;?></td>
					</td>
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
			<form action="bp_insert.php" method="post" >
位置: <input type="text"  name="t_position"><br><br>
<input type="submit" >
</form>

		</div><!-- /.modal-content -->
	</div><!-- /.modal -->
</div> 
<button  id="del" class="btn btn-primary btn-sm">
	删除
</button>
<script type="text/javascript">
	var a="";
	$("#ai").click(function(){
		a=$(this).attr("name");
		

});
$("#del").click(function(){
    $.post("bp_delete.php",
    {
       t_position:a
    },
        function(data,status){
        alert(data);
    });
});
</script>