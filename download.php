<?php
$name=$_GET['name'];
$name=iconv('utf-8','gbk',$name);
$path='load\\'.$name;
$filename=$name.'.zip';
function modifiyFileName($path,&$relationArr){
    if(!is_dir($path) || !is_array($relationArr)){
        return false;
    }
    if($dh = opendir($path)){
        $count = 0;
        while (($file = readdir($dh)) !== false){
            if(in_array($file,['.','..',null])) continue; //无效文件，重来
            if(is_dir($path.'\\'.$file)){
                $relationArr['dir'.$count] = [
                    'originName' => iconv('GBK','UTF-8',$file),
                    'is_dir' => true,
                    'children' => []
                ];
                rename($path.'\\'.$file, $path.'\\'.'dir'.$count);
                modifiyFileName($path.'\\'.'dir'.$count,$relationArr['dir'.$count]['children']);
                $count++;
            }
            else{
                $extension = strchr($file,'.');
                $relationArr['file'.$count.$extension] = [
                    'originName' => iconv('GBK','UTF-8',$file),
                    'is_dir' => false,
                    'children' => []
                ];
                rename($path.'\\'.$file, $path.'\\'.'file'.$count.$extension);
                $count++;
            }
        }
    }
}
function restoreFileName($path,$relationArr){
    foreach($relationArr as $k=>$v){
        if(!empty($v['children'])){
            restoreFileName($path.'\\'.$k,$v['children']);
            rename($path.'\\'.$k,iconv('UTF-8','GBK',$path.'\\'.$v['originName']));
        }else{
            rename($path.'\\'.$k,iconv('UTF-8','GBK',$path.'\\'.$v['originName']));
        }
    }
}
function zip($dir_path,$zipName){

    $relationArr = [$dir_path=>[
        'originName'=>$dir_path,
        'is_dir' => true,
        'children'=>[]
    ]];
    modifiyFileName($dir_path,$relationArr[$dir_path]['children']);
    $zip = new ZipArchive();
    $zip->open($zipName,ZipArchive::CREATE);
    zipDir(array_keys($relationArr)[0],'',$zip,array_values($relationArr)[0]['children']);
    $zip->close();
    restoreFileName(array_keys($relationArr)[0],array_values($relationArr)[0]['children']);
}

function zipDir($real_path,$zip_path,&$zip,$relationArr){
    $sub_zip_path = empty($zip_path)?'':$zip_path.'\\';
    if (is_dir($real_path)){
        foreach($relationArr as $k=>$v){
            if($v['is_dir']){  //是文件夹
                $zip->addEmptyDir($sub_zip_path.$v['originName']);
                zipDir($real_path.'\\'.$k,$sub_zip_path.$v['originName'],$zip,$v['children']);
            }else{ //不是文件夹
                $zip->addFile($real_path.'\\'.$k,$sub_zip_path.$k);
                $zip->renameName($sub_zip_path.$k,$sub_zip_path.$v['originName']);
            }
        }
    }
}
$dir_path = $path; 
$zipName ='load\\'.$filename;  
zip($dir_path,$zipName);
header("Cache-Control: public"); 
header("Content-Description: File Transfer"); 
header('Content-disposition: attachment; filename='.basename($zipName)); //文件名  
header("Content-Type: application/zip"); //zip格式的  
header("Content-Transfer-Encoding: binary"); //告诉浏览器，这是二进制文件  
header('Content-Length: '. filesize($zipName)); //告诉浏览器，文件大小  
@readfile($zipName);
if (!unlink($zipName))
  {
  echo ("Error deleting $file");
  }
else
  {
  echo ("Deleted $file");
  }
?>