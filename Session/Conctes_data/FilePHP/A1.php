<?php
if (isset($_POST['sumbit'])){
    $newFileName = $_POST['filename'];
    if (empty($newFileName)){
        $newFileName = 'galler';
    } else{
        $newFileName = strtolower(str_replace(search: " ", replace:"-", $newFileName));
    }
    $imageTile = $_POST['filetitle'];
    $imageDecs = $_POST['filedesc'];

    $file = $_FILE['file'];
    $fileName = $file["name"];
    $fileType = $file["type"];
    $fileTempName = $file["temp_name"];
    $fileError = $file["error"];
    $fileSize = $file["size"];

    $fileExt = explode(delimiter: ".", $fileName);
    $fileActualExt = strolo
}
