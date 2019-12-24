<!DOCTYPE html>
<html>
<head>
	<title>详情</title>
</head>
<body>
<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- <script>
$(document).ready(function(){
  $("#up").click(function(){
    $("#upp").toggle();
  });
});
</script> -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "saber";
// $ISBN=$_GET['ISBN'];
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,'utf-8');
 $ISBN=$_GET['ISBN'];
// 检测连接
 $conn = new mysqli($servername, $username, $password, $dbname);
				$sql="SELECT * FROM tushubianmu WHERE ISBN='$ISBN'";
				$sql2="SELECT * FROM publishers";
				$sql3="SELECT * FROM blanguage";
				$sql4="SELECT * FROM bposition";
				$sql5="SELECT * FROM bsize";
				$sql6="SELECT * FROM bprint";
				$sql7="SELECT * FROM bclassfication";
				$result = mysqli_query($conn,$sql);
				$result2 = mysqli_query($conn,$sql2);
				$result3 = mysqli_query($conn,$sql3);
				$result4 = mysqli_query($conn,$sql4);
				$result5= mysqli_query($conn,$sql5);
				$result6 = mysqli_query($conn,$sql6);
				$result7 = mysqli_query($conn,$sql7);
				while ($row = mysqli_fetch_array($result)) {
			?>
			<div>

</head>
<body>
				<form method="post" action="up5.php?ISBN=<?php echo $row['ISBN'] ;?>" enctype="multipart/form-data" >
                <input type="file" name="upfile" value="">
                <input type="submit" name="submit" value="提交">                
                </form>
			<img src="<?php echo $row['img'] ;?>" style="width: 500px;height: 500px">
			</div>				
					<form action="edit_detail.php" method="post" class="bs-example bs-example-form" role="form" style="margin-top: -450px;margin-left: 850px;width: 200px;">
					<div class="input-group" >			
					<span class="input-group-addon">ISBN</span>
					<input class="form-control"  type="text" name="ISBN" value="<?php echo $row['ISBN'] ;?>" ></div><br>
					<div class="input-group" >
					<span class="input-group-addon"> 图书名:</span>
					<input class="form-control" type="text" name="book_name" value="<?php echo $row['book_name'];?>"></div><br>
					<div class="input-group" >
					<span class="input-group-addon">作者:</span>
					<input class="form-control" type="text" name="author" value="<?php echo $row['author'];?>"></div><br><br>
					出版社 <select name="chu">
						<?php while ($row2 = mysqli_fetch_array($result2)){
							?>
							<option value="<?php echo $row2['Publishers_name'] ?> "SELECTED>
							<?php echo $row2['Publishers_name'] ?> 
						</option>
						<?php
						} 
						?>						
					</select><br><br><br>
					语系 <select name="yu">
						<?php while ($row3 = mysqli_fetch_array($result3)){
							?>
							<option value="<?php echo $row3['t_language'] ?>"SELECTED>
							<?php echo $row3['t_language'] ?> 
						</option>
						<?php
						} 
						?>						
					</select><br><br><br>
					位置 <select name="wei">
						<?php while ($row4 = mysqli_fetch_array($result4)){
							?>
							<option value="<?php echo $row4['t_position'] ?> "SELECTED>
							<?php echo $row4['t_position'] ?> 
						</option>
						<?php
						} 
						?>						
					</select><br><br><br>					
					尺寸 <select name="chi">
						<?php while ($row5 = mysqli_fetch_array($result5)){
							?>
							<option value="<?php echo $row5['t_size'] ?> "SELECTED>
							<?php echo $row5['t_size'] ?> 
						</option>
						<?php
						} 
						?>				
					</select><br><br><br>
					印刷 <select name="yin">
						<?php while ($row6 = mysqli_fetch_array($result6)){
							?>
							<option value="<?php echo $row6['tprint_type'] ?>"SELECTED>
							<?php echo $row6['tprint_type'] ?> 
						</option>
						<?php
						} 
						?>						
					</select><br><br><br>
					<div style="margin-top: -500px;margin-left: 300px;width: 200px;">
					<div class="input-group" >
					<span class="input-group-addon">状态:</span>
					<input class="form-control" type="text" name="loan_status" value="<?php echo $row['loan_status'];?>"></div><br>
					<div class="input-group" >
					<span class="input-group-addon">价格:</span>
					<input class="form-control" type="text" name="price" value="<?php echo $row['price'];?>"></div><br>
					<div class="input-group" >
					<span class="input-group-addon">版次:</span>
					<input class="form-control" type="text" name="edition" value="<?php echo $row['edition'];?>"></div><br>
					<div class="input-group" >			
					<span class="input-group-addon">借书人ID</span>
					<input class="form-control" disabled="disabled" type="text"  value="<?php echo $row['borrower_id'] ?>" ></div>
					<br><br>
					图书分类 <select name="tu">
						<?php while ($row7 = mysqli_fetch_array($result7)){
							?>
							<option value="<?php echo $row7['bclassfication_name'] ?> "SELECTED>
							<?php echo $row7['bclassfication_name'] ?> 
						</option>
						<?php
						} 
						?>				
					</select><br><br><br>
				</div>
					</div>
			<div >
					<!-- 简介:<br> -->
					
					<div class="form-group" style="margin-top: 350px;margin-left: -400px;width: 500px;">
					<center><label for="name">简介</label></center>
						<textarea class="form-control" rows="5" name="summary" ><?php echo $row['summary'];?></textarea>
						</div>
					
					<!-- 简介：<input type="text" name="summary" value="<?php echo $row['summary'];?>" style="margin-top: 350px;margin-left: 500px;height: 400px;width: 600px;" >
			</div><br> --><input type="submit" class="btn btn-default"  style="background-color: #f8ebe6;margin-left: -200px; ">
			</form>
			<?php
				}
				 // var_dump($result);
				 // var_dump($row);
				 // var_dump($row['ISBN']);
				 // echo $row['ISBN'];
			?>
</style>
</body>
</html>