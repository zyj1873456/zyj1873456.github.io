 <!DOCTYPE html>
<html>
<head>
    <title>movefile</title>
    <script type="text/javascript" src="./js/jquery-2.1.1.min.js"></script>
    <script src="./js/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script>
<script src="js/fileinput.js" type="text/javascript"></script>
<script src="./static/layer/layer.js"></script>
</head>
<body>
<div id="dir"></div>
<div id="filename"></div>
<?php
                 session_start();
                 @$t=$_SESSION['up'];
               if($t!=""){
                    if(!empty($_FILES)){
                        @$f=$_FILES['up_file'];
                        @$r=$f['name'];
                        @$r=iconv('utf-8','gbk',$r);
                        @$name=$f['name'];
                        @$name=iconv('utf-8','gbk',$name);
                        @$foldername=explode('.', $r);
                        @$foldername=$foldername[count($foldername)-2];
                        $rand=rand(1,50);
                        @$dest_dir='load'.'/'.$foldername.'-'.$rand;
                        is_dir($dest_dir) OR mkdir($dest_dir, 0777, true); 
                        $dest=$dest_dir.'/'.$name;
                        $temp=$f['tmp_name'];
                        $temp=iconv('utf-8','gbk',$temp);
                        $r=move_uploaded_file($temp,$dest);
                        $dest=$dest_dir.'/'.$name;
                        $temp=$f['tmp_name'];
                        $temp=iconv('utf-8','gbk',$temp);
                        $r=move_uploaded_file($temp,$dest);
                        @$dest=iconv('gbk','utf-8',$dest);
                        @$name=iconv('gbk','utf-8',$name);
                       // $oldfile = $dest;
                       // $newfile = $dest_dir.'/'.'(2)'.$f['name']; 
                       //if (file_exists($oldfile) == false)
                      //{
                      //die ('文件不在,无法复制');
                      //}
                     //$result = copy($oldfile, $newfile);
                    //if ($result == false)
                    //{
                     //echo '复制成功';
                    //}
                        echo "<script>
                        document.getElementById('dir').value='$dest';
                        document.getElementById('filename').value='$name';
                        </script>";
                        }else{
                           
                        } 
                    }else{
                        echo "<script>window.location.href='upload.php';</script>";
                    }
                    @$_SESSION['up']="";
                    ?>
</body>
<script>

    window.location.href='../stu/mysqli_showlist.php';

</script>
</html>
