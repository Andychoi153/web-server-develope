<?php
$filelist = scandir('/up/');
$filename = array();
for ($i = 1 ; $i <= count($filelist) ; $i++){
    if (is_dir('/up/'.$filelist[$i])){
        array_push($filename,$filelist[$i]);
    
}
}
$download = $filename[1];
$filepath = '/up/'. $download.'.txt.fitted.txt';
$filesize = filesize($filepath);
$path_parts = pathinfo($filepath);
$filename = $path_parts['basename'];
$extension = $path_parts['extension'];
 
header("Pragma: public");
header("Expires: 0");
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Transfer-Encoding: binary");
header("Content-Length: $filesize");
 
ob_clean();
flush();
readfile($filepath);
system('rmdir /up/'.$download);
?>
