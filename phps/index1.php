<?php
$con=mysql_connect('localhost','root','151217');
if(!$con) {
	die('���ݿ�����ʧ�ܣ�'.mysql_error());
}
mysql_select_db('phps_a',$con);
$sql="select * from book order by id";
$result=mysql_query($sql);
$num=mysql_num_rows($result); //����������
$pagesize=2;//ÿҳ��ʾ����
if (empty($page)) {
	$page=1;
}
$page=$_GET['page'];//��ǰҳ��
$totalpage=ceil($num/$pagesize);//��ҳ��
$begin=($page-1)*$pagesize;
$sql=$sql."limit $begin,$pagesize";
$result=mysql_query($sql);

echo "<table border=1><tr><td>name</td><td>content</td></tr>";
while($row=mysql_fetch_array($result)){
	echo "<tr><td>".$row['name']."</td><td>".$row['content']."</td></tr>";
}
echo "</table>";?>
�ܹ���<?php echo $num;?>�����ݣ���<?php echo $totalpage;?>ҳ

<?php 
if ($page==1) {
?>

��ҳ | ��ҳ
<?php 
}else {
?>
<a href="index.php?pag=1">��ҳ</a> | <a href="index.php?page=<?php echo $page-1;?>">��ҳ</a>
<?php }?>

<?php 
if ($page==$totalpage) {
?>
��ҳ | βҳ
<?php 
}else {
?>
	<a href="index.php?pag=<?php echo $page+1?>">��ҳ</a> | <a href="index.php?page=<?php echo $totalpage;?>">βҳ</a>
<?php }?>




<?php mysql_close($con);?>