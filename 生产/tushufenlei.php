<div class="table-responsive" id="index-form">
	<table class="table">
		<caption style="text-align: center;">图书分类</caption>
		<thead>
			<tr >
				<th style="text-align: center;">图书分类号</th>
				<th style="text-align: center;">图书分类名</th>
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
				$sql="SELECT * FROM bclassfication";
				$result = mysqli_query($conn,$sql);
				while ($row = mysqli_fetch_array($result)) {
			?>
				<tr >
					<td style="text-align: center;" id="<?php echo $row['bclassfication_num'];?>"><?php echo $row['bclassfication_num'] ;?></td>
					<td style="text-align: center;" id="<?php echo $row['bclassfication_num'];?>"><?php echo $row['bclassfication_name'];?></td>
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
			<form action="tushufenlei_insert.php" method="post" >
图书分类号: <input type="text"  name="bclassfication_num"><br><br>
图书分类名: <input type="text" name="bclassfication_name"><br><br>
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
    $.post("tushufenlei_delete.php",
    {
       bclassfication_num:y
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
           <form action="tushufenlei_edit.php" method="post" style="text-align: center;" >
图书分类号: <input type="text"  name="bclassfication_num"><br><br>
图书分类名: <input type="text" name="bclassfication_name"><br><br>
<input type="submit" >
</form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>
