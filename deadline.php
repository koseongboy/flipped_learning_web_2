<?php 

 $content = $_REQUEST["content"];
$num = $_REQUEST["num"];

 function dirZip($resource,$dir) { 
  if(filetype($dir) === 'dir') {
    clearstatcache(); 

    if($fp = @opendir($dir)) { 
      while(false !== ($ftmp = readdir($fp))){ 
        if(($ftmp !== ".") && ($ftmp !== "..") && ($ftmp !== ""))

        { 
          if(filetype($dir.'/'.$ftmp) === 'dir') { 
            clearstatcache();   

            // 디렉토리이면 생성하기 
            $resource->addEmptyDir($dir.'/'.$ftmp); 
            set_time_limit(0);   

            dirZip($resource,$dir.'/'.$ftmp); 
          } else { 

            // 파일이면 파일 압축하기 
            $resource->addFile($dir.'/'.$ftmp); 
          } 
        } 
               } 
        } 
        if(is_resource($fp)){ 
              closedir($fp);
        } 
      } else { 
         // 파일이면 파일 압축하기 
         $resource->addFile($dir); 
    } 
} // end func 
$content=str_replace(" ","_",$content);

echo $content;
// 압축할 디렉토리 
$dir = "$content"; 

// 압축파일 이름 
$zipfile = "$content.zip"; 

$zip = new ZipArchive; 
$res = $zip->open($zipfile, ZipArchive::CREATE); 
if ($res === TRUE) {        
   dirZip($zip,$dir); 
   $zip->close(); 
} else { 
   echo "에러 코드: ".$res; 
} 


require_once("MYDB.php");
$pdo = db_connect();


$sfsf='o';

$pdo->beginTransaction();
$sql="update submit set dead=? where num=?";
    $stmh=$pdo->prepare($sql);
    $stmh->bindValue(1,$sfsf,PDO::PARAM_STR);
    $stmh->bindValue(2,$num,PDO::PARAM_STR);
    $stmh->execute();
    $pdo->commit();

?>
