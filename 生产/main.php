<head>
	<title>导航界面</title>
	<?php

header("content-type:text/html;charset=utf-8");         //设置编码

 

?>
<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript">
$(document).ready(function(){
	$("#div1").click(function(){
		$("#index-form").load("tushufenlei.php");
	});
});
$(document).ready(function(){
	$("#div2").click(function(){
		$("#index-form").load("tushubianmu.php");
	});
});
$(document).ready(function(){
	$("#div3").click(function(){
		$("#index-form").load("readerinfo.php");
	});
});
$(document).ready(function(){
	$("#div4").click(function(){
		$("#index-form").load("readerclass.php");
	});
});
$(document).ready(function(){
	$("#div5").click(function(){
		$("#index-form").load("publishers.php");
	});
});
$(document).ready(function(){
	$("#contact").click(function(){
		alert('Tel.18772865129 ')
	});
});

$(document).ready(function(){
	$("#div6").click(function(){
		$("#index-form").load('rcenter.php')
	});
});

</script>	
</head>
<body>
<script src="01.js" count="200" zindex="-2" opacity="0.5" color="47,135,193" type="text/javascript">
    </script>
    <nav class="navbar navbar-inverse" role="navigation">
	<div class="container-fluid">
	<div class="navbar-header">
		<a class="navbar-brand" href="main.php">大大图书馆</a>


	</div>
	<div text-align:center>
		<ul class="nav navbar-nav">
			<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">图书管理
				<b class="caret"></b>
			</a>
			<ul class="dropdown-menu ">
					<li id="div2"><a href="#">图书编目</a></li>
					<li class="divider"></li>
					<li id="div1"><a href="#">图书分类</a></li>
					<li class="divider"></li>
					<li id="div5"><a href="#">出版社设置</a></li>
					<li class="divider"></li>
					<li ><a href="ck.php">图书词库</a></li>
				</ul>
			<li class="dropdown ">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">读者管理
			<b class="caret"></b>
			</a>
			<ul class="dropdown-menu">
				<li><a id="div6" href="#">个人中心</a></li>
				<li class="divider"></li>
				<li><a id="div3" href="#">读者设置</a></li>
				<li class="divider"></li>
				<li><a id="div4" href="#">读者类别设置</a></li>
			</ul>
			<li class="dropdown ">
			<a href="brmanage.php" >借还管理
			</a>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					系统帮助
					<b class="caret"></b>
				</a>
				<ul class="dropdown-menu">
					<li><a href="#" id="contact">联系作者</a></li>
				</ul>
			</li>
		</ul>

			<form class="navbar-form navbar-left" role="search">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Search">
		</div>
		<button type="submit" class="btn btn-default" >提交</button>
	</form>
	  <ul class="nav navbar-nav navbar-right">
      <li><a href="#" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-user" ></span> 注册</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-out"></span> 登出</a></li>
    </ul>
	</div>
	</div>
	</nav>
<div class="panel panel-default" style="background-color: #ed5a65;margin-left: 150px;margin-right: 150px;height: 45px" >
    <div class="panel-body">

         <Strong> <?php
         session_start();
          echo $_SESSION['uid'];
          ?></strong> &nbsp; ,欢迎您！
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
        <div class="table-responsive" id="index-form" >
        	<h3 style="text-align: center;">今日推荐</h3>
	<table class="table" style="text-align: center;">
		<thead>
			<tr>
				<th style="text-align: center;">书名</th>
				<th style="text-align: center;">图书简介</th>
				<th style="text-align: center;">作者</th>
			</tr>
		</thead>
		<tbody style="text-align: center;">
			<tr>
				<td>Java程序员修炼之道</td>
				<td>人民邮电出版社</td>
				<td>[英] Benjamin J. Evans / [荷兰] Martijn Verburg</td>
			</tr>
			<tr>
				<td>编程珠玑</td>
				<td>人民邮电出版社</td>
				<td>Jon Bentley</td>
			</tr>
			<tr>
				<td>计算机程序设计艺术</td>
				<td>国防工业出版社</td>
				<td>Donald E. Knuth</td>
			</tr>
			<tr>
				<td>颈椎病康复指南</td>
				<td>湖北科学技术出版社</td>
				<td>董晓俊</td>
			</tr>
			<tr>
				<td>头发养护与脱发防治150问</td>
				<td>人民军医出版社</td>
				<td>张君坦</td>
			</tr>
		</tbody>
</table>
</div>  
<br><br>  
<ul class="pager">
	<li><a href="#">&laquo;</a></li>
	<li><a href="#">1</a></li>
	<li><a href="#">2</a></li>
	<li><a href="#">3</a></li>
	<li><a href="#">4</a></li>
	<li><a href="#">5</a></li>
	<li><a href="#">&raquo;</a></li>
</ul>
<br><br><br><br><br><br>
<center><div class="well well-lg" style="background: transparent;width: 280px;">© 2019–2020 KaYuen___Tsim   HBMU License
</div></center>
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
</div> 

    