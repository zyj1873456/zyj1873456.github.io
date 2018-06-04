<?php
header('content-type:text/html;charset=utf-8');
require './public_sqli_fun_te.php';
if(!empty($_POST)){
	$fields = array('id','password','name','gander','zhicheng');
	$values = array(); 
	foreach($fields as $k => $v){
		$data = isset($_POST[$v]) ? $_POST[$v] : '';
		if($data=='') die($v.'字段不能为空');
		$data = safeHandle($link,$data);
		$fields[$k] = "`$v`";
		$values[] = "'$data'";
	}
	$fields = implode(',', $fields);
	$values = implode(',', $values);
	$sql = "insert into `emp_info` ($fields) values ($values)";
	if($res = query($link,$sql)){
		header('Location: ./tesqli_showList.php');
		die;
	}else{die('学生添加失败！');
	}
}
define('APP', 'itcast');
require './tesqli_add_html.php';
