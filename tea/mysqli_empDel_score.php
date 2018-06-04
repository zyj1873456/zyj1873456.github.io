<?php
header('content-type:text/html;carsetutf8');
require'./public_sqli_fun_score.php';
$sno = isset($_GET['sno']) ? intval($_GET['sno']) : 0;
  echo '课程编号:'.$sno;
  $sql= "delete from `emp_info` where `sno` = $sno";
  if($res = query($link,$sql)){
     header(' Location:./mysqli_showList_score.php');
     die;
  }else{die('删除失败!');
}
?>


