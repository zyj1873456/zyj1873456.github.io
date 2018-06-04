<?php
header('content-type:text/html;charset=utf-8');
require'./public_sqli_fun.php';
$sno = isset($_GET['sno']) ? intval($_GET['sno']) : 0;
if (!empty($_POST)){
     $update= array();
     $fields= array('sno','password','name','class','policy');
     foreach($fields as $v){
        $data = isset($_POST[$v]) ? $_POST[$v] : '';
        if($data=='') die($v.'字段不能为空');
        $data = safeHandle($link,$data);
         $update[]="`$v`='$data'";
      }
      $update_str = implode(',',$update);
      $sql="update  `emp_info` set $update_str where `sno`= $sno";
      if($res = query($link,$sql)){
        header("Location:./mysqli_showlist.php");
          die;
      }else{die('学生信息修改失败');}
}else{
      $sql = "select * from `emp_info` where`sno`= $sno";
      $emp_info = fetchRow($link,$sql);
      define('APP','itcast');
      require'./mysqli_update_html.php';
}




