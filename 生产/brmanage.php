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
	$("#borrow").click(function(){
		$("#index-form").load('borrow.php ')
	});
});
$(document).ready(function(){
	$("#return").click(function(){
		$("#index-form").load('return.php ')
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
				<li><a id="div3" href="#">读者信息</a></li>
				<li class="divider"></li>
				<li><a id="div4" href="#">读者类别设置</a></li>
			</ul>
			<li class="dropdown ">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">借还管理
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
	  <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> 注册</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> 登录</a></li>
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
        	<div style="margin-left: 150px">
<input type="checkbox" id="borrow">借书<br><br><br><br>
<input type="checkbox" id="return">还书
</div>
