
<?php
require_once('conn/conn.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
    <div class="box1">
     <h2>&nbsp;&nbsp;&nbsp;学生菜单</h2>
     &nbsp;&nbsp;作业管理
     <ul type="disc">
       <li><a href="../filesupload/index.php" STYLE='text-decoration:none;COLOR:black'>上交作业</a></li>
       </ul>
       &nbsp;&nbsp;作业管理
     <ul type="disc">
       <li><a href="../stu/mysqli_showlist.php" STYLE='text-decoration:none;COLOR:black'>成绩查看</a></li>
       </ul>
       &nbsp;&nbsp;公告管理
     <ul type="disc">
       <li class="zi1"><a href="./index.php" STYLE='text-decoration:none;COLOR:black'>作业公告查看</a></li>
       </ul>
     &nbsp;&nbsp;系统管理
     <ul type="disc">
       <li><a href="../upload/changepassword.php" STYLE='text-decoration:none;COLOR:black'>修改密码</a></li>
       </ul>
     <a href="../index.php" STYLE='text-decoration:none;COLOR:black'>&nbsp;&nbsp;退出系统</a>
    </div>
    <div class="box2" >
<table width=800px height=50px bgcolor="#0072E3">
      <tr><th><h2>公告</h2></th></tr>
    </table>

<table width="400" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC" align="center">
  <tr>
    <td class="zi">标题：</td>
  </tr>
<?php 
$sql="select * from book order by id";
$result=mysql_query($sql);
$num=mysql_num_rows($result);//数据总条数
$pagesize=10;//每页显示条数
$page=@$_GET['page'];//当前页数
if (empty($page)) {
    $page=1;
}
$totalpage=ceil($num/$pagesize);//总页数
$begin=($page-1)*$pagesize;
$sql=$sql." limit $begin,$pagesize";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result)){
?>

  <tr>
    <td><div class="liu"><a href="liuyan_detail.php?id=<?php echo $row['id'];?>"><?php echo $row['name'];?></a></div></td>
  </tr>

<?php }?>
</table>

<p>
<div class="xia">总共有<?php echo $num;?>条数据，分<?php echo $totalpage;?>页

<?php 
if ($page==1) {
?>

首页 | 上页
<?php 
}else {
?>
<a href="index.php?pag=1">首页</a> | <a href="index.php?page=<?php echo $page-1;?>">上页</a>
<?php }?>

<?php 
if ($page==$totalpage) {
?>
下页 | 尾页
<?php 
}else {
?>
<a href="index.php?page=<?php echo $page+1?>">下页</a> | <a href="index.php?page=<?php echo $totalpage;?>">尾页</a>
<?php }?>




<?php mysql_close($conn);?>
</div>
</div>
</body>
</html>
