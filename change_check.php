<?php 
  session_start();
  $id=@$_POST['id'];
  $_SESSION['change']=$id;
  $pwd=@$_POST['password'];
  $pwd2=@$_POST['password2'];
if($_SESSION['change']){
  include('ConnectDb.php');
  $conn=new ConnectDb();
  $sql="select * from emp_info where sno='$id'";
  $result=$conn->Connect($sql);
  $res=$result->fetch(PDO::FETCH_ASSOC);
  if($res['sno']){
      if($res['password']==$pwd){
      $conn2=new ConnectDb();
      $sql2="update emp_info set password='$pwd2' where sno='$id'";
      $result2=$conn2->Connect($sql2);
      if($result2){
      	  echo 12;//修改成功
          $_SESSION['change']="";
      }else{
        $_SESSION['change']="";
      	echo 13;//修改失败
        }
     }else{
      $_SESSION['change']="";
        echo 14;//旧密码输入错误
    }
  }else{
    $_SESSION['change']="";
  	  echo 11;//学生不存在
   }
}else{
          echo "<script>alert('请通过合法途径进行密码修改');window.location.href='changepassword.php';</script>";
  }

?>