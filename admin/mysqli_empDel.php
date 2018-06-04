<?php
header('content-type:text/html;carsetutf8');
require'./public_sqli_fun.php';
$sno = isset($_GET['sno']) ? intval($_GET['sno']) : 0;
  echo 'sno:'.$sno;
  $sql= "delete from `emp_info` where `sno` = $sno";
  if($res = query($link,$sql)){
     header(' Location:./mysqli_showList.php');
     die;
  }else{die('删除失败!');
}
?>


