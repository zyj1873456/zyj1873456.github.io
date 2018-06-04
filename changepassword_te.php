<?php
 session_start();
?>
<!DOCTYPE html> 
<html>
	<head>
		<title>修改密码</title>
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
	font-weight: bold;
	font-size:20px;
}
</style>
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		<script src="Public/js/jquery-2.1.1.min.js"></script>
    <script src="Public/static/layer/layer.js"></script>
		<link rel="stylesheet" href="Public/css/demo.css">
		<link rel="stylesheet" href="Public/css/sky-forms.css">
		<!--[if lt IE 9]>
			<link rel="stylesheet" href="css/sky-forms-ie8.css">
		<![endif]-->
		<script src="Public/js/jquery-1.9.1.min.js"></script>
		<script src="Public/js/jquery.validate.min.js"></script>
		<script src="Public/js/jquery-1.9.1.min.js"></script>
		<script src="Public/js/jquery.validate.min.js"></script>
	
	</head>
	
	<body class="bg-cyan" >
	<div class="box3">
    <div>
	  <p align="center">  <img src="..\img\head.png" align="center" width="100%" height=200px></img></p>
    </div>
    <div class="box1">
     <h2>&nbsp;&nbsp;&nbsp;教师菜单</h2>
    &nbsp;&nbsp;课程管理
    <ul type="disc">
       <li><a href="../tea/mysqli_empAdd.php" STYLE='text-decoration:none;COLOR:black'>添加课程</a></li>
       <li ><a href="../tea/mysqli_showlist.php" STYLE='text-decoration:none;COLOR:black'>课程管理</a></li>
     </ul>
     &nbsp;&nbsp;作业管理
     <ul type="disc">
       <li><a href="../phps/upload_te.php" STYLE='text-decoration:none;COLOR:black'>布置作业</a></li>
        <li><a href="../upload/result.php" STYLE='text-decoration:none;COLOR:black'>作业管理</a></li>
       </ul>
       &nbsp;&nbsp;成绩管理
     <ul type="disc">
        <li><a href="../tea/mysqli_showList_score.php" STYLE='text-decoration:none;COLOR:black'>成绩管理</a></li>
       <li><a href="../tea/mysqli_empadd_score.php" STYLE='text-decoration:none;COLOR:black'>添加成绩</a></li>
       </ul>
     &nbsp;&nbsp;系统管理
     <ul type="disc">
       <li  class="zi"><a href="../upload/changepassword_te.php" STYLE='text-decoration:none;COLOR:black'>修改密码</li>
       </ul>
     <a href="../index.php" STYLE='text-decoration:none;COLOR:black'>&nbsp;&nbsp;退出系统</a>
    </div>
    <div class="box2" >
    <table width=800px height=50px bgcolor="#0072E3">
      <tr><th><h2>系统管理</h2></th></tr>
    </table>
		<div class="body body-s" style="overflow:scroll; height:290px;">		
			<form action="upload.php" id="sky-form" class="sky-form" method="post">
				<header>修改密码</header>
				
					
				<fieldset>
			     <section>
						<label class="input">
							<i class="icon-append icon-user"></i>
							<input type="text" id="userid" name="userid" placeholder="教师编号">
						</label>
					</section>	
					
					
					
					<section>
						<label class="input">
							<i class="icon-append icon-user"></i>
							<input type="text" id="password" name="password" placeholder="旧密码">
						</label>
					</section>
						<section>
						<label class="select">
							<label class="input">
							<i class="icon-append icon-user"></i>
							<input type="text" id="password2" name="password2" placeholder="新密码">
						</label>
						</label>
					</section>
					<section>
					<div>

						<br>

						<br>

					</div>
						
					</section>
				</fieldset>
				<footer>
					<a href="#" style="text-decoration: none;">首页</a>
					<button type="button" class="button" id="btn">提交</button>
				</footer>
			</form>			
		</div>
		</div>
		</div>
		<script type="text/javascript">

		$("#btn").click(function(){
			var id=$("#userid").val();
			if(id==""){
               	   layer.msg('编号不能为空!',{time:2000});
               	  return false;
               }
             var password=$("#password").val(); 
               if(password==""){
                   layer.msg('请输入旧密码!',{time:2000});
                   return false;
               }
             var password2=$("#password2").val();
             if(password2==""){
                   layer.msg('请输入新密码!',{time:2000});
                   return false;
               }
              if(password==password2){
              	 layer.msg('旧密码与新密码不能相同!',{time:2000});
                   return false;
              }
             $.post("change_check_te.php",{id:id,password:password,password2:password2},function(data){
             	 
             	   if(data==11){
             	   	  layer.msg('该编号不存在!',{time:2000});
             	   	  setTimeout("window.location.href='changepassword_te.php'",2000);
             	   }else if(data==14){
                      layer.msg('旧密码输入错误!',{time:2000});
             	   	  setTimeout("window.location.href='changepassword_te.php'",2000);
             	   }else if(data==12){
                       layer.msg('修改成功!',{time:2000});
             	   }else if(data==13){
             	   	  layer.msg('修改失败!',{time:2000});
             	   	  setTimeout("window.location.href='changepassword_te.php'",2000);
             	   }
             });
          
		})
			
		</script>
	</body>
</html>