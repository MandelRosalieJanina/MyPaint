
<?php

if(!file_exists("../dateien/datei.txt")){
 die("File not found");
}else{
    $file = fopen("../dateien/datei.txt", "r") or die("Unable to open file!");
    $content = [];

    while (!feof($file)) {
        $content[] = fgets($file);
    }

    echo json_encode($content);
}


?>