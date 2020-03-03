<?php

if(!file_exists("../dateien/savedPictures.txt")){
    die("File not found");
}else{
    $file = fopen("../dateien/savedPictures.txt", "r") or die("Unable to open file!");
    $content = [];

    while (!feof($file)) {
        $content[] = fgets($file);
    }

    echo json_encode($content);
}


?>