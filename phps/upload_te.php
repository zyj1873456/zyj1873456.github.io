<?php
require_once('conn/conn.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>发布公告</title>
<style>
body{background-color:#eee;margin:0;padding:0;}
.box3{
  margin-left: 20px;
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
     height:445px;
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
    height:445px;
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
     <h2>&nbsp;&nbsp;&nbsp;教师菜单</h2>
    &nbsp;&nbsp;课程管理
    <ul type="disc">
       <li><a href="../tea/mysqli_empAdd.php" STYLE='text-decoration:none;COLOR:black'>添加课程</a></li>
       <li><a href="../tea/mysqli_showlist.php" STYLE='text-decoration:none;COLOR:black'>课程管理</a></li>
     </ul>
     &nbsp;&nbsp;作业管理
     <ul type="disc">
       <li class="zi1"><a href="../phps/upload_te.php" STYLE='text-decoration:none;COLOR:black'>布置作业</li>
       <li><a href="../upload/result.php" STYLE='text-decoration:none;COLOR:black'>作业管理</a></li>
       </ul>
       &nbsp;&nbsp;成绩管理
     <ul type="disc">
       <li><a href="../tea/mysqli_showList_score.php" STYLE='text-decoration:none;COLOR:black'>成绩信息查看</a></li>
       <li><a href="../tea/mysqli_empadd_score.php" STYLE='text-decoration:none;COLOR:black'>成绩管理</a></li>
       </ul>
     &nbsp;&nbsp;系统管理
     <ul type="disc">
       <li><a href="../upload/changepassword_te.php" STYLE='text-decoration:none;COLOR:black'>修改密码</a></li>
       </ul>
     <a href="../index.php" STYLE='text-decoration:none;COLOR:black'>&nbsp;&nbsp;退出系统</a>
    </div>
    <div class="box2" >
<table width=800px height=50px bgcolor="#0072E3">
      <tr><th><h2>发布作业</h2></th></tr>
    </table>
<div class="fabu2">
<form action="do/do.php?do=tianjia_liuyan" method="post">
<table width="483" height="176" border="0" cellpadding="0" cellspacing="0" align="center">
  <tr>
    <td height="40" align="right"></td>
  </tr>
  <tr>
    <td width="102" align="right">标题：</td>
    <td width="298"><input name="name" type="text" id="name" value=""></td>
  </tr>
  <tr>
    <td height="20" align="right"></td>
  </tr>
  <tr>
    <td align="right">内容：</div></td>
    <td><textarea name="content" cols="50" rows="10" id="content"></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="提交"></td>
  </tr>
</table>
</form>
</div>
</div>
</div>
</body>
</html>