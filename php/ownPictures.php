
<?php

if(!file_exists("../dateien/ownPictures.txt")){
    die("File not found");
}else{
    $file = fopen("../dateien/ownPictures.txt", "r") or die("Unable to open file!");
    $content = [];

    while (!feof($file)) {
        $content[] = fgets($file);
    }

    echo json_encode($content);
}


?>