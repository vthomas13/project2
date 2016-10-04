<!DOCTYPE html>
<html>
<body>

<?php

echo "Hello, file!";
//read a file
echo readfile("../data/sample.txt");

//opening to a file
echo "Opening to the sample file";
echo "<p>";
$myfile = fopen("../data/sample.txt", "r") or die("Unable to open!");
echo fread($myfile, filesize("../data/sample.txt"));
echo "</p>";
fclose($myfile);

//Create a file
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($txt);
fclose($myfile);
//Read from a file till you get to the end of line.
echo "<p>Reading from the old file</p>";
$myfile = fopen("../data/testfile.txt", "r")or die ("Unable to open file!");
while(!feof($myfile)) {
    echo fgets($myfile) ."<br>";
}
fclose($myfile);







?>

</body>
</html>