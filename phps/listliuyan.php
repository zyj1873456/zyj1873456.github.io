
<?php
require_once('do/checksession.php');
require_once('conn/conn.php');
?>
<table width="499" height="49" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="95">留言人</td>
    <td width="186">留言内容</td>
    <td width="119">操作</td>
  </tr>
<?php 
$sql="select * from book order by id";
$result=mysql_query($sql);
$num=mysql_num_rows($result);//数据总条数
$pagesize=5;//每页显示条数
$page=$_GET['page'];//当前页数
if (empty($page)) {
	$page=1;
}
$totalpage=ceil($num/$pagesize);//总页数
$begin=($page-1)*$pagesize;
$sql=$sql." limit $begin,$pagesize";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result)){
?>

  <tr>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['content'];?></td>
    <td>
	<a href="home.php?do=up_liuyan&id=<?php echo $row['id'];?>">修改</a> | 
	<a href="do/do.php?do=del_liuyan&id=<?php echo $row['id'];?>&page=<?php echo $page;?>" onClick="return delcfm()">删除</a></td>
	           
  </tr>

<?php }?>
</table>

<br /><br />
总共有<?php echo $num;?>条数据，分<?php echo $totalpage;?>页

<?php 
if ($page==1) {
?>

首页 | 上页
<?php 
}else {
?>
<a href="home.php?do=listliuyan&pag=1">首页</a> | <a href="home.php?do=listliuyan&page=<?php echo $page-1;?>">上页</a>
<?php }?>

<?php 
if ($page==$totalpage) {
?>
下页 | 尾页
<?php 
}else {
?>
<a href="home.php?do=listliuyan&page=<?php echo $page+1?>">下页</a> | <a href="home.php?do=listliuyan&page=<?php echo $totalpage;?>">尾页</a>
<?php }?>




<?php mysql_close($con);?>
