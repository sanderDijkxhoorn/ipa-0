<?php

// var_dump($_FILES);

$directory = 'uploads';
$temp_name = $_FILES['file']['tmp_name'];

$cool_dir = $directory . '/' . $_FILES['file']['name'];

// echo $cool_dir;

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);

if(move_uploaded_file($temp_name, $cool_dir)) {
    echo 'File uploaded successfully';
} else {
    echo 'File upload failed';
}


?>

