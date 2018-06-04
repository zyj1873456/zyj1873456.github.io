<?php
header('content-type:text/html;charset=utf-8');
include './public_sqli_fun_score.php';
$sql = 'select * from emp_info';
$where = '';
if(isset($_GET['keyword'])){
	$keyword =   $_GET['keyword'];
	$keyword = safeHandle($link,$keyword);
	$where = "where name like '%$keyword%' or sno like '%$keyword%' or class like '%$keyword%' or name1 like '%$keyword%'  ";
}
$sql = "select * from emp_info $where";
$page_size = 10;
$result = query($link,'select count(*) from emp_info');
if (mysqli_num_rows($result) > 0) 
{
$count = mysqli_fetch_row($result);
$count = $count[0];
$max_page = ceil($count/$page_size);
}
else 
  { echo "0 连接数据库失败!";exit;}
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$page = $page > $max_page ? $max_page : $page;
$page = $page < 1 ? 1 : $page;
$page_html = makePageHtml($page,$max_page);
$lim = ($page -1) * $page_size;
$sql = $sql." limit {$lim},{$page_size}";
$res = query($link,$sql);
if(!$res) die(mysqli_error());
while($row = mysqli_fetch_assoc($res)){
	$emp_info[] = $row;
}
define('APP', 'itcast');
require './mysqli_list_html_score.php';
mysqli_close($link);
?>