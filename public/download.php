<?php
if(!empty($_GET['file'])){
    $file = basename($_GET['file']);
    $filePath = "./images/pdf/".$file;

    if(!empty($file) && file_exists($filePath)){

        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$file");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");

        readfile($filePath);
        exit;
    }
    else{
        echo "file not found";
    }
}

?>