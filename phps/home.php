<?php 
require_once('do/checksession.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
<!--
.STYLE1 {font-size: xx-large}
-->
</style>
</head>

<body>
 <script language="javascript">
    function delcfm() {
        if (!confirm("确认要删除？")) {
           return false;
        }
    }
</script>
<table width="858" height="432" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="97" colspan="2"><span class="STYLE1">网站后台管理系统</span></td>
  </tr>
  <tr>
    <td width="200" valign="top">
    <a href="home.php?do=listliuyan">信息列表</a><br /><br />
    <a href="do/do.php?do=logout">退出</a>
    
    
    </td>
    <td width="658" valign="top">
    <?php 
	$do=$_GET['do'];
	if($do=='listliuyan'){
	include_once('listliuyan.php');
	}else 
	if($do=="up_liuyan"){
	include_once('up_liuyan.php');
	}else{
	
	}
	
	?>
    
    
    
    
    </td>
  </tr>
</table>
</body>
</html>