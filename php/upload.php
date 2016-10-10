<?php

session_start();

$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

echo "<pre>";
print_r($_FILES);

if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)){
    $_SESSION["profPic"] = basename($_FILES["fileToUpload"]["name"]);
    echo "The file " . basename($_FILES["fileToUpload"]["name"]) . "was uploaded";
} else {
    echo "There was an error uploading";
}

header("Location: http://codd.cs.gsu.edu/~rpetersen1/php/profile.php"); /* Redirect browser */


?>