<?php
require_once('conn/conn.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;  charset=utf-8" />
<title>公告</title>
</head>

<body>

<?php
require_once('do/checksession.php');
require_once('conn/conn.php');
$id=$_GET['id'];
$sql="select * from book where id='$id'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
?>
<form action="do/do.php?do=tianjia_liuyan&id=<?php echo $id; ?>" method="post">
<table width="483" height="176" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="102" align="right">留言人：</div></td>
    <td width="298"><input name="name" type="text" id="name" value="<?php echo $row['name']; ?>"></td>
  </tr>
  <tr>
    <td align="right">内容：</div></td>
    <td><textarea name="content" cols="50" rows="10" id="content"><?php echo $row['content']; ?></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="提交"></td>
  </tr>
</table>
</form>

</body>
</html>
