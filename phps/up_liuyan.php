
<?php
require_once('do/checksession.php');
require_once('conn/conn.php');
$id=$_GET['id'];
$sql="select * from book where id='$id'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
?>
<form action="do/do.php?do=up_liuyan&id=<?php echo $id; ?>" method="post">
<table width="483" height="176" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="102" align="right">�����ˣ�</div></td>
    <td width="298"><input name="name" type="text" id="name" value="<?php echo $row['name']; ?>"></td>
  </tr>
  <tr>
    <td align="right">���ݣ�</div></td>
    <td><textarea name="content" cols="50" rows="10" id="content"><?php echo $row['content']; ?></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="�ύ"></td>
  </tr>
</table>
</form>