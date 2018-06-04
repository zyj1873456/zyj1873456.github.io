<?php if(!defined('APP')) die('error!');?>
<!doctype html>
<html>
 <head>
  <meta charset="utf-8">
  <title>学生信息管理</title>
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
     <h2>&nbsp;&nbsp;&nbsp;学生菜单</h2>
     &nbsp;&nbsp;作业管理
     <ul type="disc">
       <li><a href="../upload/upload.php" STYLE='text-decoration:none;COLOR:black'>上交作业</a></li>
       </ul>
       &nbsp;&nbsp;作业管理
     <ul type="disc">
       <li class="zi"><a href="./mysqli_showlist.php" STYLE='text-decoration:none;COLOR:black'>成绩查看</a></li>
       </ul>
       &nbsp;&nbsp;公告管理
     <ul type="disc">
       <li><a href="../phps/index.php" STYLE='text-decoration:none;COLOR:black'>作业公告查看</a></li>
       </ul>
     &nbsp;&nbsp;系统管理
     <ul type="disc">
       <li><a href="../upload/changepassword.php" STYLE='text-decoration:none;COLOR:black'>修改密码</a></li>
       </ul>
    <a href="../index.php" STYLE='text-decoration:none;COLOR:black'>&nbsp;&nbsp;退出系统</a>
    </div>
    <div class="box2" >
    <table width=800px height=50px bgcolor="#0072E3">
      <tr><th><h2>成绩查看</h2></th></tr>
    </table>
    <div class="box3" style="overflow:scroll; height:315px; width: 780px;">
    <form action="./mysqli_showlist.php" method="GET">
	<form action="./mysqli_showList.php" method="post">
		<div class="box">
		
		<div class="search">快速查询：<input type="text" name="keyword"/> <input type="submit" value="提交"/></div>
		<table border="1">
			<tr>
				<th width="15%">学号</th>
				<th width="15%">姓名</th>
        <th >班级</th>
        <th >课程编号</th>
         <th >课程名称</th>
				<th>成绩</th>
			</tr>
<?php if(!empty($emp_info)) { ?>
   <?php foreach($emp_info as $row) { ?>
   <tr>
      <td><?php echo $row['sno'];?></td>
      <td><?php echo $row['name'];?></td>
      <td><?php echo $row['class'];?></td>
      <td><?php echo $row['id'];?></td>
      <td><?php echo $row['name1'];?></td>
      <td><?php echo $row['score'];?></td>
   </tr>
    <?php } ?>
   <?php }else{ ?>
          <tr><td colspan ="7">暂无课程数据！</td></tr>
   <?php  } ?>
    </table>  
    </div>
	</form>
	    <div align = 'right' class="page"><?php echo $page_html; ?></div>
</div>
 </body>
</html>