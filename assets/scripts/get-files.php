<?php
header('Access-Control-Allow-Origin: *');
$fileNames = array();
function endsWith($haystack, $needle)
{
    $length = strlen($needle);
    return $length === 0 ||
        (substr($haystack, -$length) === $needle);
}
if ($handle = opendir('../../videos/')) {
    $i = 0;
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            if(endsWith($entry,'.mp4')||endsWith($entry,'.mkv')||endsWith($entry,'.flv')||endsWith($entry,'.vob')||endsWith($entry,'.avi')||endsWith($entry,'.wmv')||endsWith($entry,'.mpg')||endsWith($entry,'.mpeg')||endsWith($entry,'.m4v')||endsWith($entry,'.3gp')){
                $file = array('name'=>$entry);
                array_push($fileNames,$file);
            }
        }
    }
    closedir($handle);
}
echo json_encode($fileNames);
exit();