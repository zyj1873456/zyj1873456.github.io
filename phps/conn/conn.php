<?php
  $conn=@mysql_connect("localhost","root","151217") or die("连接失败!".mysql_error());
     @mysql_select_db("phps_a",$conn) or die("数据库获取失败!".mysql_error());
     @mysql_query("set names utf8");
?>
