<div class="table-responsive" id="index-form">
	<table class="table">
		<caption style="text-align: center;">图书词库响应式表格布局</caption>
		<thead>
			<tr>
				<th>书名</th>
				<th>图书简介</th>
				<th>状态</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>产品1</td>
				<td>23/11/2013</td>
				<td>待发货</td>
			</tr>
			<tr>
				<td>产品2</td>
				<td>10/11/2013</td>
				<td>发货中</td>
			</tr>
			<tr>
				<td>产品3</td>
				<td>20/10/2013</td>
				<td>待确认</td>
			</tr>
			<tr>
				<td>产品4</td>
				<td>20/10/2013</td>
				<td>已退货</td>
			</tr>
		</tbody>
</table>
</div>  
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="saber";
$conn = mysqli_connect($servername, $username, $password,$dbname);
// 检测连接
if (!$conn) {
    die("连接失败: " . mysqli_connect_error());
}
$sql = "SELECT book_classification_name, book_classification_number FROM tushufenlei";
$result = mysqli_query($conn, $sql);
 
if (mysqli_num_rows($result) > 0) {
    // 输出数据
    while($row = mysqli_fetch_assoc($result)) {
        echo "图书分类名: " . $row["book_classification_name"]. " 图书分类号: " . $row["book_classification_number"];
    }
} else {
    echo "0 结果";
}
// $stmt->close();
mysqli_close($conn);
?>