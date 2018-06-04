<?php
$servername = "localhost";  
$username = "root";  
$password = "151217";  
$dbname = "teachers";  
$link = new mysqli($servername, $username, $password, $dbname);      
if ($link->connect_error){  
    die("连接失败: " . $link->connect_error);  
}    
mysqli_query($link,'set names utf8');
function query($link,$sql) {
    $res = mysqli_query($link,$sql);
	if ($result = $res) {
		return $result;
	}else{
		echo 'SQL执行失败:<br>';
		echo '错误的SQL为:', $sql, '<br>';
		echo '错误的代码为:', mysql_errno(), '<br>';
		echo '错误的信息为:', mysql_error(), '<br>';
		die;
	}
}
function fetchAll($link,$sql){
	if ($result = query($link,$sql)){
		$rows = array();
		while( $row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
			$rows[] = $row;
		}
		mysqli_free_result($result);
		return $rows;
	}else{return false;}
}
function fetchRow($link,$sql){
	if ($result = query($link,$sql)){
		$rows = array();
		$rows = mysqli_fetch_array($result, MYSQL_ASSOC);
		return $rows;
	}else{return false;}
}
function safeHandle($link,$data){
	$data = htmlspecialchars($data);
	$data = mysqli_real_escape_string($link,$data);
	return $data;
}
function makePageHtml($page,$max_page){
	$params = $_GET;
    unset($params['page']);
	$params = http_build_query($params);
	if($params){
		$params .= '&';
	}
	$next_page = $page +1;
    if($next_page > $max_page)  $next_page =  $max_page;
    $prev_page = $page - 1;
	if($prev_page < 1 ) $prev_page  = 1;
	$page_html = '<a href="?'.$params.'page=1">首页</a>&nbsp;';
	$page_html .= '<a href="?'.$params.'page='.$prev_page.'">上一页</a>&nbsp;';
	$page_html .= '<a href="?'.$params.'page='.$next_page.'">下一页</a>&nbsp;';
	$page_html .= '<a href="?'.$params.'page='.$max_page.'">尾页</a>&nbsp;';
	return $page_html;
}
?>