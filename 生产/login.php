<!DOCTYPE html>
<html>
<head>
	<title>登陆界面</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
// function myFunction1()
// {
//     var x=document.getElementById("demo1").value;
//     if(x==""||isNaN(x))
//     {
//          document.getElementById("err1").innerHTML = "不可为空";

//     }
// }
// function myFunction2()
// {
//     var x=document.getElementById("demo2").value;
//     if(x=="男"||x=="女")
//     {
        
//     }
//     else{
//        document.getElementById("err2").innerHTML = "请填写正确的性别"; 
//     }
// }
</script>
</head>
<body>
     <div class="table-responsive">
<div class="container">
<div  style="text-align: center;margin-top: 260px; ">
        <!-- <h2>大大图书馆</h2> -->
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
        <form action="conn.php" method="post" name="myform"> 
 <h4 >
 学号:&nbsp;&nbsp;<input type="text" id="rcorners" name="uid"  placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;请输入用户名">
 </h4>
 <br>
<h4>密&#12288码:&nbsp;&nbsp;<input type="password" id="rcorners" name="pwd"  placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;请输入密码" ></h4>
</div>
<br><br>
 <center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='javascript:document.myform.submit();'  class="btn btn-info btn-lg" style="background: url(01289359d75b89a801204463ad6202.jfif);">
          <span  class="glyphicon glyphicon-ok"></span> 
        </a></center><br>
    </form>
<div style="text-align: center;">
 <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal1" style="background-color: #f8ebe6"><a href="#">注册</a></button>
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
 <button type="button" class="btn btn-default" style="background-color: #f8ebe6"><a href="yk.php">游客模式</a></button>
</div>
</div>
</div>
<style type="text/css">
	button {
		margin-left: 40px;
	}
	body{background-image: url("-14fd79ed0b49ed92.jpg");background-size:1800px 960px;
     background-repeat:no-repeat;
     padding-top:40px;}
     .container{
     width: 960px;
     height:800px;
     margin: 0 auto;/*margin-top: 240px;*/
     box-shadow: 0 0 20px #222;
     border-radius:30px;
     background-color: rgba(152, 242, 242, 0.23);
 }    
 #rcorners {
    border-radius: 25px;
    border: 2px solid #481e1c;   
}
</style>
</body>
</body>
</html>