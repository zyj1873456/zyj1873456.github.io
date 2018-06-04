<?php 
require_once('../conn/conn.php');
$username=$_POST['username'];
$password=$_POST['password'];
if($username==""||$password==""){
echo "<script>location.href='admin.php';</script>";
exit();
}
$sql="select * from user where username='$username'";
$result=mysql_query($sql);
$num=mysql_num_rows($result);
if($num==0){
echo "<script>alert('用户名不存在！');location.href='admin.php';</script>";
exit();
}else{
$sql="select * from user where username='$username' and password='$password'";
$result=mysql_query($sql);
$num=mysql_num_rows($result);
if($num==0){
echo "<script>alert('密码不正确！');location.href='admin.php';</script>";
exit();
}else{
@session_start();
$_SESSION['username']=$username;
echo "<script>location.href='../home.php';</script>";
}

mysql_close($con);

}
?>