<?php

$targetDir = getcwd() . '/upload/';
if (!file_exists($targetDir)) {
    mkdir($targetDir);
}
if (!empty($_FILES)) {
    $fileName = $_FILES['file']['name'];
    $targetFile = $targetDir . $fileName;
//    echo $targetFile;
//    echo json_encode($_FILES['file']);
    move_uploaded_file($_FILES['file']['tmp_name'], $targetFile);
} else if (isset($_REQUEST['fileName'])) {
    $fileName = $_REQUEST['fileName'];
    $targetFile = $targetDir . $fileName;
    unlink($targetFile);
}
echo $targetDir;
