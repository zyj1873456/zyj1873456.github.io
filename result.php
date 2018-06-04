<!DOCTYPE html>
<html lang="en">
<head>
<title>下载作业</title>
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
.box2{
	margin-top: 30px;
	margin-bottom: 30px;
}
</style> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->

<link href="Public/css/admin-style.css?v=2.2.0" rel="stylesheet">
<link href="css/index.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" type="text/css" href="css/default.css">
<link href="css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
<link href="Public/css/module.css" rel="stylesheet"/>
<link href="Public/css/bootstrap.min.css?v=3.4.0" rel="stylesheet">
<link href="Public/font-awesome/css/font-awesome.css?v=4.3.0" rel="stylesheet">
<script src="./js/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script>
<script src="js/fileinput.js" type="text/javascript"></script>
<script src="./static/layer/layer.js"></script>
<script src="./js/bootstrap.min.js"></script>
<link href="css/font-awesome.css" rel="stylesheet">   
<link rel="stylesheet" href="css/swipebox.css"> <!-- filter css --> 
<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/admin.js"></script>    
<link href="css/styl1.css" rel="stylesheet">
<link href="css/styl2.css" rel="stylesheet"> 
<link href="Public/css/animate.css" rel="stylesheet">
<script src="Public/js/jquery-2.1.1.min.js"></script>
<script src="Public/js/bootstrap.min.js?v=3.4.0"></script>



<!--Layer-->
<script src="Public/static/layer/layer.js"></script>

<script type="text/javascript" src="Public/js/admin.js"></script>

<script src="Public/js/jquery.metisMenu.js"></script>


<!-- Custom and plugin javascript -->
<script src="Public/js/hplus.js?v=2.2.0"></script>
</head>
<body >
<div class="box3">
    <div>
	  <p align="center">  <img src="..\img\head.png" align="center" width="100%" height=200px></img></p>
    </div>
<!-- //typography -->
<div >
                        <div color:#D2E9FF>
                            <div  >
                                <div class="box2">
                                    <div class="input-button" style="position: relative;left: 395px;">
                                       
                                        <button  class="btn btn-default delete-all"style=";background-color:#54ccd2;" type="button" url="delete.php?tag=ok"><i class="fa fa-minus "></i>&nbsp;删除</button>
                                    </div>
                                </div>
                                
                                    
                                    </div>
                                    
                               
                            </div>

                            <!--表格开始    -->
                            <form action="" method="post" name="updateSort" id="updateSort" >
                                <div class="table-responsive" style="height: 617px">
                                    <table style="width:50%;position: relative;left: 400px;" class="table  table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th style="width: 35px;">
                                                <input type="checkbox" id="checkAll" class="check-all">
                                                <label for="checkAll"></label>
                                            </th>
                                            <th style="text-align: center;"><strong>名称</strong></th>
                                            <th style="width: 100px;"><span style="position: relative;left: 20px;"><strong>操作</strong></span></th>
                                        </tr>
                                        </thead>
                                        <tbody>
   <?php 
   $num=0; 
   $names=array();
   if($dir_handle = @opendir('load')){
            while($filename = readdir($dir_handle)){
                if($filename != "." && $filename != ".."){
                    @$subFile = $dir.DIRECTORY_SEPARATOR.$filename; 
                    if(is_dir($subFile)){ //若子文件是个目录
                        @traverseDir($subFile); //递归找出下级目录名称
                    }
                }
                $filename=iconv('GB2312','UTF-8',$filename);
                $names[$num]=$filename;
                $num++;
            }
            
        }                               
 @$page=$_GET['page']; 
 if(@$page==""){
  $page=1;
 }
    if(@$page!=""){
    $page_size=9;
    $page_count=ceil((count($names)/$page_size));
    $offset=($page-1)*$page_size; 
    $time=$page_size;
                        for($i=$offset+2,$time=0;($time<$page_size)&&($i<count($names));$i++,$time++)
                            {  
                                ?>

                                                <tr>
                                                <td>
                                                    <input class="ids regular-checkbox" type="checkbox" value="<?php 
                                                echo $names[$i];?>" name="ids" >
                                                </td>
                                                <td style="text-align: center;"> <?php 
                                                echo $names[$i];?></td>
                                               
                                                <td>
                                                    <a class="confirm" href="delete.php?filename=<?php echo $names[$i];?>">删除</a>&nbsp
                                                    <a id="finish" href="download.php?name=<?php echo $names[$i];?>" style="font-size: 14px">下载</a>
                                                </td>
                                            </tr> 
                                            <?php
                                        }
                                            }
                                            ?>                                      
                                     </tbody>
                                    </table>
                                    <!--分页开始--> 
                                    <label style="height: 10%;position: relative;left: 600px"><?php 
                                    echo "当前第:".$page."/".$page_count."页"; ?></label>                              
                                    <label style="padding-top:15px;position: relative;top:-16px;left:654px;">
                                        <div class="page"><?php         
      echo "<a href='result.php?page=1'>首页</a>&nbsp";     
      if($page!=1){
      $go=$page-1;
      echo "<a  href='result.php?page=$go'>上一页</a>&nbsp";
     }
     for($i=1;$i<=$page_count;$i++){
        echo "<a id='$i' href='result.php?page=$i' value='$i'>$i</a>&nbsp";
     }
      $focus=@$_GET['page'];
     if($page<$page_count){
       $back=$page+1;
      echo "<a href='result.php?page=$back'>下一页</a>&nbsp";
     }
     echo "<a href='result.php?page=$page_count'>尾页</a>&nbsp";
    ?></div>
                                    </label>
                                    <!--分页结束-->
                                    <div style="padding-top:15px;position: relative;top:-16px;left:654px;"><a href="../tea/mysqli_empAdd.php" STYLE='text-decoration:none;COLOR:black'>返回主页</a></div>
                                </div>
                            </form>
                            <!--表格结束-->
                       
                    </div>
</div>
 <script src="js/bootstrap.js"></script>
</body>
</html>