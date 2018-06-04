<?php
$con=mysql_connect('localhost','root','151217');
if(!$con) {
	die('数据库连接失败：'.mysql_error());
}
mysql_select_db('phps_a',$con);
$sql="select * from book order by id";
$result=mysql_query($sql);
$num=mysql_num_rows($result); //数据总条数
$pagesize=2;//每页显示条数
if (empty($page)) {
	$page=1;
}
$page=$_GET['page'];//当前页数
$totalpage=ceil($num/$pagesize);//总页数
$begin=($page-1)*$pagesize;
$sql=$sql."limit $begin,$pagesize";
$result=mysql_query($sql);

echo "<table border=1><tr><td>name</td><td>content</td></tr>";
while($row=mysql_fetch_array($result)){
	echo "<tr><td>".$row['name']."</td><td>".$row['content']."</td></tr>";
}
echo "</table>";?>
总共有<?php echo $num;?>条数据，分<?php echo $totalpage;?>页

<?php 
if ($page==1) {
?>

首页 | 上页
<?php 
}else {
?>
<a href="index.php?pag=1">首页</a> | <a href="index.php?page=<?php echo $page-1;?>">上页</a>
<?php }?>

<?php 
if ($page==$totalpage) {
?>
下页 | 尾页
<?php 
}else {
?>
	<a href="index.php?pag=<?php echo $page+1?>">下页</a> | <a href="index.php?page=<?php echo $totalpage;?>">尾页</a>
<?php }?>




<?php mysql_close($con);?>