<?php if(!defined('APP')) die('error!');?>
<!doctype html>
<html>
<head>
<meta charset="utf-8" >
<title>学生信息编辑</title>
<style>
body{background-color:#eee;margin:0;padding:0;}
.box{width:400px;margin:15px auto;padding:20px;border:1px solid #ccc;background-color:;}
.box h1{font-size:20px;text-align:center;}
.profile-table{margin:0 auto;}
.profile-table th{font-weight:normal;text-align:right;}
.profile-table input[type="text"]{width:180px;border:1px solid #ccc;height:22px;padding-left:4px;}
.profile-table .td-btn{text-align:center;padding-top:10px;}
.profile-table td{font-size:14px;}#66B3ff
.profile-table .txttop{vertical-align:top;}
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
       <li class="zi"><a href="./mysqli_showlist.php" STYLE='text-decoration:none;COLOR:black'>学生信息管理</a></li>
    </ul>&nbsp;&nbsp;教师管理
    <ul type="disc">
       <li><a href="./tesqli_empAdd.php" STYLE='text-decoration:none;COLOR:black'>教师信息登记</a></li>
       <li><a href="./tesqli_showlist.php" STYLE='text-decoration:none;COLOR:black'>教师信息管理</a></li>
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
      <tr><th><h2>学生信息管理</h2></th></tr>
    </table>
    <div class="box3" style="overflow:scroll; height:325px; width: 780px;">


<div class="box">
  <h1>修改学生信息</h1>
  <form method="post">
  <table class-"profile-table">
    <tr><th>学号: </th>
    <td><input type-"text" name="sno" value="<?php echo $emp_info['sno']; ?>"/></td></tr>
    <tr><th>密码: </th>
    <td><input type-"text" name="password" value="<?php echo $emp_info['password']; ?>"/></td></tr>
    <tr><th>姓名: </th>
    <td><input type-"text" name="name" value="<?php echo $emp_info['name']; ?>"/></td></tr>
    <tr><th>性别: </th>
    <td><input type="text" name="gander" value="<?php echo $emp_info['gander']; ?>"/></td></tr>
    <tr><th>班级:</th>
    <td><input type= "text" name= "class" value="<?php echo $emp_info['class']; ?>"></td></tr>
     <tr><th>政治面貌:</th>
    <td><input type= "text" name= "policy" value="<?php echo $emp_info['policy']; ?>"></td></tr>
    <tr><td colspan="2" class="td-btn">
    <input type="submit" value="保存资料" class="button" />
    <input type="reset" value="重新填写" class="button" />
    </td></tr>
  </table>
  </form>
</div>
</body>
</html>




