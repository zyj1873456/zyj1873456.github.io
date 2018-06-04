<?php
session_start();
$_SESSION['up']='ok'; 
$t=$_SESSION['up'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>upload</title> 
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
.abc{
   margin-top: 80px;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="./css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/default.css">
<link href="css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
<script src="./js/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script>
<script src="js/fileinput.js" type="text/javascript"></script>
<script src="./static/layer/layer.js"></script>
<script src="./js/bootstrap.min.js"></script>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link href="css/font-awesome.css" rel="stylesheet">   
<link href="css/index.css" rel="stylesheet" type="text/css" media="all" /> 
<link rel="stylesheet" href="css/swipebox.css"> <!-- filter css --> 
<script src="js/jquery-2.2.3.min.js"></script>   
<link href="css/styl1.css" rel="stylesheet">
<link href="css/styl2.css" rel="stylesheet"> 
</head>
<body>
	<!-- //header -->
	<!-- banner -->
<div class="box3">
    <div>
    <p align="center">  <img src="..\img\head.png" align="center" width="100%" height=200px></img></p>
    </div>
    
		<div class="container" style="width:500px">

               <div> 
                <div class="abc">&nbsp;</div>
                <h3 class="agileits-title w3title1" style="color: black">上交作业</h3>
               </div>
			   <div id="tx" >
                    <form enctype="multipart/form-data" id="form1" name="form1" method="post" action="movefile.php">
                        <input id="file-0a" name="up_file" class="file" type="file"
                        style="width:200px;height: 200px" onchange="change(this);">
                    </form>
          </div>
		</div>
</div>



	<!-- //portfolio -->
	<!-- footer -->
	<!-- //footer -->    
<!-- Include jQuery & Filterizr -->
  <script src="js/jquery.filterizr.js"></script>
  <script src="js/controls.js"></script>
<!-- Kick off Filterizr -->
  <script type="text/javascript">
      $(function() {
        //Initialize filterizr with default options
        $('.filtr-container').filterizr();
      });
  </script>
<!--//gallery-->
<!-- swipe box js -->
	<script src="js/jquery.swipebox.min.js"></script> 
	<script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
	</script>
	<!-- //swipe box js -->
    <script src="js/bootstrap.js"></script>
  
</body>
</html>