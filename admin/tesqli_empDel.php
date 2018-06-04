<?php
header('content-type:text/html;carsetutf8');
require'./public_sqli_fun_te.php';
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
  echo '教师编号:'.$id;
  $sql= "delete from `emp_info` where `id` = $id";
  if($res = query($link,$sql)){
     header(' Location:./tesqli_showList.php');
     die;
  }else{die('删除失败!');
}
?>


