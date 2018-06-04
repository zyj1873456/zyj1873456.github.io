<?php
require_once('conn/conn.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;  charset=utf-8" />
<title>作业公告</title>
<style>
body{background-color:#eee;margin:0;padding:0;}
.box3{
  margin-left: 20px;
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
  font-size:22px;
}
.zi1{
  font-weight: bold;
  font-size:20px;
}
</style>
<link rel="stylesheet" href="css/css.css" type="text/css" />
</head>

<body>
<div class="box3">
    <div>
    <p align="center">  <img src="..\img\head.png" align="center" width="100%" height=200px></img></p>
    </div>
    <div class="box1" >
    <h2>&nbsp;&nbsp;&nbsp;学生菜单</h2>
     &nbsp;&nbsp;作业管理
     <ul type="disc">
       <li><a href="../filesuploaad/index.php" STYLE='text-decoration:none;COLOR:black'>上交作业</li>
       </ul>
       &nbsp;&nbsp;作业管理
     <ul type="disc">
       <li><a href="../stu/mysqli_showlist.php" STYLE='text-decoration:none;COLOR:black'>成绩查看</a></li>
       </ul>
       &nbsp;&nbsp;公告管理
     <ul type="disc">
       <li><a href="../phps/liuyan_detail.php" STYLE='text-decoration:none;COLOR:black'>作业公告查看</li>
       </ul>
     &nbsp;&nbsp;系统管理
     <ul type="disc">
       <li><a href="../upload/change_check.php" STYLE='text-decoration:none;COLOR:black'>修改密码</a></li>
       </ul>
     <a href="../index.php" STYLE='text-decoration:none;COLOR:black'>&nbsp;&nbsp;退出系统</a>
    </div>
    <div class="box2" >
<p>
  <?php 
$id=$_GET['id'];
$sql="select * from book where id='$id'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
?>
    <table width=800px height=50px bgcolor="#0072E3">
      <tr><th><h2>公告</h2></th></tr>
    </table>
    <p></p>
    <p></p>
   <table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="100" class="zi">标题：</td>
    <td width="340"><?php echo $row['name']; ?></td>
  </tr>
  <tr>
  </tr>
  <tr>
    <td width="100" class="zi">内容：</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><?php echo $row['content']; ?></td>
  </tr>
</table>
<p>&nbsp;</p>
</div>
</div>
</body>
</html>