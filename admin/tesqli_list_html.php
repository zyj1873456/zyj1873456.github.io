<?php if(!defined('APP')) die('error!');?>
<!doctype html>
<html>
 <head>
  <meta charset="utf-8">
  <title>教师信息管理</title>
  <style>
  body{background-color:#eee;margin:0;padding:0;}
	.box{margin:20px;}
	.box .title{font-size:22px;font-weight:bold;text-align:center;}
	.box table{width:100%;margin-top:10px;border-collapse:collapse;font-size:12px;border:1px solid #B5D6E6;min-width:460px;}
	.box table th,.box table td{height:20px;border:1px solid #B5D6E6;}
	.box table th{background-color:#E8F6FC;font-weight:normal;}
	.box table td{text-align:center;}
	.box a{color:#444;text-decoration:none;}
	.box a:hover{text-decoration:underline;}
	.search{padding:10px 0;float:right;font-size:12px;}
	.box3{
	margin-left: 10px;
	background-color: #D2E9FF;
	width:96%;
	height:700px;
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
     height:400px;
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
    height:400px;
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
 <SCRIPT LANGUAGE=javascript> 
 function edit(){ 
 var msg = "您真的确定要修改吗？\n\n请确认！"; 
 if (confirm(msg)==true){ 
  return true; 
 }else{return false;} 
}
function del(){ 
 var msg = "您真的确定要删除吗？\n\n请确认！"; 
 if(confirm(msg)==true){ 
  return true; 
 }else{return false; } 
}
</SCRIPT>
 </head>
 <body>
 <div class="box3">
    <div>
	  <p align="center">  <img src="..\img\head.png" align="center" width="100%" height=200px></img></p>
    </div>
    <div class="box1">
    <h2>&nbsp;&nbsp;&nbsp;管理员菜单</h2>
     &nbsp;&nbsp;学生管理
    <ul type="disc">
       <li><a href="./mysqli_empAdd.php" STYLE='text-decoration:none;COLOR:black'>学生信息登记</a></li>
       <li><a href="./mysqli_showlist.php" STYLE='text-decoration:none;COLOR:black'>学生信息管理</a></li>
    </ul>
    &nbsp;&nbsp;教师管理
    <ul type="disc">
       <li><a href="./tesqli_empAdd.php" STYLE='text-decoration:none;COLOR:black'>教师信息登记</a></li>
       <li class="zi"><a href="./tesqli_showlist.php" STYLE='text-decoration:none;COLOR:black'>教师信息管理</a></li>
     </ul>
     &nbsp;&nbsp;系统管理
     <ul type="disc">
       <li><a href="../upload/changepassword_ad.php" STYLE='text-decoration:none;COLOR:black'>修改密码</a></li>
       <li><a href="../phps/upload.php" STYLE='text-decoration:none;COLOR:black'>公告管理</a></li>
       </ul>
     <a href="../index.php" STYLE='text-decoration:none;COLOR:black'>&nbsp;&nbsp;退出系统</a>
    </div>
    <div class="box2" >
    <table width=800px height=50px bgcolor="#0072E3">
      <tr><th><h2>教师信息管理</h2></th></tr>
    </table>
    <div class="box3" style="overflow:scroll; height:325px; width: 780px;">
    <form action="./tesqli_showlist.php" method="GET">
	  <form action="./tesqli_showList.php" method="post">
		<div class="box">
		
		<div class="search">快速查询：<input type="text" name="keyword"/> <input type="submit" value="提交"/></div>
		<table border="1">
			<tr>
				<th width="15%">教师编号</th>
				<th width="15%">登录密码</th>
				<th>姓名</th>
				<th>性别</th>
				<th>职称</th>
				<th width="25%">相关操作</th>
			</tr>
<?php if(!empty($emp_info)) { ?>
   <?php foreach($emp_info as $row) { ?>
   <tr>
      <td><?php echo $row['id'];?></td>
      <td><?php echo $row['password'];?></td>
      <td><?php echo $row['name'];?></td>
      <td><?php echo $row['gander'];?></td>
      <td><?php echo $row['zhicheng'];?></td>
      <td>
		<div align="center">
			<span>
				<img src="images/edt.gif" width="16" height="16" />
				<a href="<?php echo './tesqli_empUpdate.php?id='.$row['id'] ?>" 
				onclick="javascript:return edit()">编辑</a>&nbsp; &nbsp;
				<a href="<?php echo './tesqli_empDel.php?id='.$row['id'] ?>" 
				onclick="javascript:return edit()"><img src="images/del.gif" width="16" height="16" />删除</a>
			</span>
		</div>
	  </td>
   </tr>
    <?php } ?>
   <?php }else{ ?>
          <tr><td colspan ="7">暂无员工数据！</td></tr>
   <?php  } ?>
    </table>  
    </div>
	</form>
	    <div align = 'right' class="page"><?php echo $page_html; ?></div>
		<div class="search"><a href="./tesqli_empAdd.php">添加教师</a></div>
</div>
 </body>
</html>