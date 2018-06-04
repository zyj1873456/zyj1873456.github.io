<?php
require_once('../conn/conn.php');

$do=@$_GET['do'];
switch($do){
case'logout':
     session_unset('username');
	 echo "<script>location.href='../admin.php';</script>";

     break;
	 
	 
	 case'del_liuyan';
	 $id=$_GET['id'];
	 $page=$_GET['page'];
     $sql="delete from book where id='$id'";
	 mysql_query($sql);
	 echo "<script>alert('删除成功');location.href='../home.php?do=listliuyan&page=$page';</script>";

     break;
	 
	 case'up_liuyan';
	 session_unset('username');
	 $id=$_GET['id'];
	 $name=$_POST['name'];
	 $content=$_POST['content'];
     $sql="update book set name='$name',content='$content' where id='$id'";
	 mysql_query($sql);
	 echo "<script>alert('修改成功');location.href='../home.php?do=up_liuyan&id=$id';</script>";

     break;
	 
	 case'tianjia_liuyan';
	 $id=@$_GET['id'];
	 $name=$_POST['name'];
	 $content=$_POST['content'];
	 $sql="insert into book(name,content) values('$name','$content')";
	 mysql_query($sql);
	 echo "<script>alert('发布成功');location.href='../upload.php';</script>";

	 case'tianjia_liuyan2';
	 $id=@$_GET['id'];
	 $name=$_POST['name'];
	 $content=$_POST['content'];
	 $sql="insert into book(name,content) values('$name','$content')";
	 mysql_query($sql);
	 echo "<script>alert('发布成功');location.href='../upload_te.php';</script>";

     break;
	 
	 
	 default:

}

?>