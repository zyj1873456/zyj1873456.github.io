
<?php
require_once('do/checksession.php');
require_once('conn/conn.php');
?>
<table width="499" height="49" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="95">������</td>
    <td width="186">��������</td>
    <td width="119">����</td>
  </tr>
<?php 
$sql="select * from book order by id";
$result=mysql_query($sql);
$num=mysql_num_rows($result);//����������
$pagesize=5;//ÿҳ��ʾ����
$page=$_GET['page'];//��ǰҳ��
if (empty($page)) {
	$page=1;
}
$totalpage=ceil($num/$pagesize);//��ҳ��
$begin=($page-1)*$pagesize;
$sql=$sql." limit $begin,$pagesize";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result)){
?>

  <tr>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['content'];?></td>
    <td>
	<a href="home.php?do=up_liuyan&id=<?php echo $row['id'];?>">�޸�</a> | 
	<a href="do/do.php?do=del_liuyan&id=<?php echo $row['id'];?>&page=<?php echo $page;?>" onClick="return delcfm()">ɾ��</a></td>
	           
  </tr>

<?php }?>
</table>

<br /><br />
�ܹ���<?php echo $num;?>�����ݣ���<?php echo $totalpage;?>ҳ

<?php 
if ($page==1) {
?>

��ҳ | ��ҳ
<?php 
}else {
?>
<a href="home.php?do=listliuyan&pag=1">��ҳ</a> | <a href="home.php?do=listliuyan&page=<?php echo $page-1;?>">��ҳ</a>
<?php }?>

<?php 
if ($page==$totalpage) {
?>
��ҳ | βҳ
<?php 
}else {
?>
<a href="home.php?do=listliuyan&page=<?php echo $page+1?>">��ҳ</a> | <a href="home.php?do=listliuyan&page=<?php echo $totalpage;?>">βҳ</a>
<?php }?>




<?php mysql_close($con);?>
