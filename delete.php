<?php
session_start();
$_SESSION['up']="";
@$tag=$_GET['tag'];
function deldir($dir)
{
   $dh=opendir($dir);
   while ($file = readdir($dh))
   {
      if ($file != "." && $file != "..")
      {
         $fullpath = $dir . "/" . $file;
         if (!is_dir($fullpath))
         {
            unlink($fullpath);
         } else
         {
            deldir($fullpath);
         }
      }
   }
   closedir($dh);
   if (rmdir($dir))
   {
      return true;
   } else
   {
      return false;
   }
}
if(@$tag){
 $names=$_POST['ids'];
 $names=explode(',',$names);
 array_pop($names);
 for($i=0;$i<count($names);$i++){
   $names[$i]=mb_convert_encoding($names[$i],'gbk','utf-8');
   $names[$i]=trim($names[$i]," ");
  @deldir('load\\'.$names[$i]);
 }
}else{$filename=$_GET['filename'];
$filename=iconv('UTF-8','gbk',$filename);
echo $filename;
$path='load\\'.$filename;
deldir($path);
}
?>