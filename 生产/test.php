<!doctype html>
<html lang="en">
<head>
<title>jquery实现点击表格后，当前行变色的在线实例演示-aijQuery.cn</title>
<script language="JavaScript" src="//cdn.bootcss.com/jquery/1.9.1/jquery.min.js"></script>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
</head>
<body style="text-align:center">
  <h3>表格点击后变色</h3>
<table id="aijquery" border="1" cellpadding="6" cellspacing="0" align="center">
	<thead>
		<tr>
          <th>ID</th>
          	<th>名字</th>
			<th class="num">数字</th>
			<th class="date">日期</th>
			<th>字母</th>
			<th>文字</th>
		</tr>
	</thead>
	<tbody>
		<tr>
          <td>1</td>
          	<td>张大峰</td>
			<td>9</td>
			<td>1985-10-24</td>
			<td>zhangdafeng</td>
			<td>中国人</td>
		</tr>
		<tr>
			<td>3</td>
          	<td>李小明</td>
			<td>11</td>
			<td>2018-12-21</td>
			<td>lixiaoming</td>
			<td>超人</td>
		</tr>
	</tbody>
</table>
<script language="javascript">
$("table#aijquery").on("click",function(e){
	$(e.target).parent("tr").addClass("bg-primary").siblings("tr.bg-primary").removeClass("bg-primary");
});
</script>
</body>
</html>
