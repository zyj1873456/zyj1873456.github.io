<?php if(!defined('APP')) die('error!');?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>学生信息登记</title>
<style>
body{background-color:#eee;margin:0;padding:0;}
.box{width:400px;margin:15px auto;padding:20px;border:1px solid #ccc;background-color:##66B3ff;}
.box h1{font-size:20px;text-align:center;}
.profile-table{margin:0 auto;}
.profile-table input[type="text"]{width:180px;border:1px solid #ccc;height:22px;padding-left:4px;}
.profile-table .td-btn{text-align:center;padding-top:10px;}
.profile-table td{font-size:14px;}
.profile-table .txttop{vertical-align:top;}
.box3{
	margin-left: 10px;
	background-color: #D2E9FF;
	width:96%;
	height:750px;
	border-bottom-width:1px;
    border-bottom-style: solid;
    border-bottom-color:#999;
    border-left-width: 1px;
    border-left-style: solid;
    border-left-color:#999;
    border-top-width:1px;
    border-top-style:solid;
    border-top-color:#999;
    border-right-width:1px;
    border-right-style: solid;
    border-right-color:#999;
}
.box4{
    margin-left: 10px;
    margin-top: 10px;
    background-color: #D2E9FF;
    width:96%;
    height:350px;
    border-bottom-width:1px;
    border-bottom-style: solid;
    border-bottom-color:#999;
    border-left-width: 1px;
    border-left-style: solid;
    border-left-color:#999;
    border-top-width:1px;
    border-top-style:solid;
    border-top-color:#999;
    border-right-width:1px;
    border-right-style: solid;
    border-right-color:#999;
}
.box1{
     margin-left: 80px;
     width:200px;
     height:390px;
     float: left;
     border-bottom-width:3px;
     border-bottom-style:solid;
     border-bottom-color:#FFF;
     border-left-width: 3px;
     border-left-style: solid;
     border-left-color:#FFF;
     border-top-width:3px;
     border-top-style: solid;
     border-top-color:#FFF;
     border-right-width:3px;
     border-right-style: solid;
     border-right-color:#FFF;
}
.box2{
	float:left;
	margin-left: 90px;
	width: 800px;
    height:390px;
    border-bottom-width:3px;
    border-bottom-style:solid;
    border-bottom-color:#0072E3;
    border-left-width:3px;
    border-left-style: solid;
    border-left-color:#0072E3;
    border-right-width:3px;
    border-right-style:solid;
    border-right-color:#0072E3;
}
.zi{
	font-weight: bold;

	font-size:20px;
}
</style>
</head>
<body>
<div class="box3">
    <div>
	  <p align="center">  <img src="..\img\head.png" align="center" width="100%" height=200px></img></p>
    </div>
    <div class="box1">
     <h2>&nbsp;&nbsp;&nbsp;学生菜单</h2>
     &nbsp;&nbsp;作业管理
     <ul type="disc">
       <li><a href="../upload/upload.php" STYLE='text-decoration:none;COLOR:black'>上交作业</a></li>
       </ul>
       &nbsp;&nbsp;作业管理
     <ul type="disc">
       <li><a href="./mysqli_showlist.php" STYLE='text-decoration:none;COLOR:black'>成绩查看</a></li>
       </ul>
       &nbsp;&nbsp;公告管理
     <ul type="disc">
        <li><a href="../phps/index.php" STYLE='text-decoration:none;COLOR:black'>作业公告查看</a></li>
       </ul>
    <a href="../index.php" STYLE='text-decoration:none;COLOR:black'>&nbsp;&nbsp;退出系统</a>
     <ul type="disc">
       <li><a href="../upload/changepassword.php" STYLE='text-decoration:none;COLOR:black'>修改密码</a></li>
       </ul>
     &nbsp;&nbsp;退出系统
    </div>
    <div class="box2" >
    <table width=800px height=50px bgcolor="#0072E3">
      <tr><th><h2>课程管理</h2></th></tr>
    </table>
    <div class="box4">


<div class="box">
	<h1>添加课程</h1>
	<form method="post" action="./mysqli_empAdd.php">
	<table class="profile-table">
	    <tr><th>课程编号：</th><td><input type="text" name="id" /></td></tr>
	    <tr><th>课程名称：</th><td><input type="text" name="name" /></td></tr>
		<tr><th>课程学时：</th><td><input type="text" name="xueshi" /></td></tr>
		<tr><th>课程学分</th><td><input type="text" name="xuefen" /></td></tr>
		<tr><td colspan="2" class="td-btn">
		<input type="submit" value="保存资料" class="button" />
		<input type="reset" value="重新填写" class="button" />
		</td></tr>
	</table>
	</form>
</div>
</div>
</body>
</html>