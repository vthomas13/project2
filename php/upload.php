<?php

$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

echo "<pre>";
print_r($_FILES);

if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)){
    echo "The file " . basename($_FILES["fileToUpload"]["name"]) . "was uploaded";
} else {
    echo "There was an error uploading";
}

?>