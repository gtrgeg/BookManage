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
	$("#div1").hover(function(){
		$("#index-form").load("bp.php");
	});
});
$(document).ready(function(){
	$("#div2").hover(function(){
		$("#index-form").load("bl.php");
	});
});
$(document).ready(function(){
	$("#div3").hover(function(){
		$("#index-form").load("pt.php");
	});
});
$(document).ready(function(){
	$("#div4").hover(function(){
		$("#index-form").load("bs.php");
	});
});
</script>	
</head>
<body>
<script src="01.js" count="200" zindex="-2" opacity="0.5" color="47,135,193" type="text/javascript">
    </script>
    <nav class="navbar navbar-inverse" role="navigation" class="fadein">
	<div class="container-fluid">
	<div class="navbar-header">
		<a class="navbar-brand" href="main.php">大大图书馆</a>


	</div>
	<div text-align:center>
		<ul class="nav navbar-nav">
			<li id="div1">
			<a >架位				
			</a>
			<li id="div2">
			<a >语系
			</a>			
			<li id="div3">
			<a >印刷
			</a>
			<li id="div4">
			<a >尺寸
			</a>
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
        <div class="table-responsive" id="index-form" ></div>  



    