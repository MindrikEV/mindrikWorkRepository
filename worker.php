<?php
include_once "func.php";

pre($_FILES);


$types=["image/jpeg","image/png","image/jpg"];
$logs=[];

// Check of type
    if(in_array($_FILES['file']['type'],$types)){
        $logs[] = '1 Stage - Done';
    } else {
        $logs[] = '1 Stage - Failed';
    }
// Check of errors
    if($_FILES['file']['error'] == 0){
        $logs[] = '2 Stage - Done';
    } else {
        $logs[] = '2 Stage - Failed';
    }
// Check size
    if(($_FILES['file']['size']/1024/1024) < 2){
        $logs[] = '3 Stage - Done (Size is OK)';
    } else {
        $logs[] = '3 Stage - Failed (Size is big)';
    }
// Make and check new path
    $date = new \DateTime();
    $path = $_SERVER['CONTEXT_DOCUMENT_ROOT']."/uploads/".$date->format('Y/m/d/i/');
    //echo $path;
    if(file_exists($path)){
        $logs[] = '4 Stage - Done (Path exist)'.$path;
    } else {
        mkdir($path,777,true);
        $logs[] = '4 Stage - Folder was not exist, but now all OK!'.$path;
    }
// Copy file
    $name = $date->format('mdHis').substr($_FILES['file']['name'],strrpos($_FILES['file']['name'],'.'));
    if(file_exists($name)){
        echo $logs[] = 'Error! File exist.';
    } else {
        //echo $name;
        copy($_FILES['file']['tmp_name'],$path.$name);
    }
// Print log
    echo "<br>";
    echo "LOG:";
    echo "<br>";
    pre($logs);