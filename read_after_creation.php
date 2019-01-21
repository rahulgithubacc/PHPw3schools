<?php
$file=fopen("new.txt","w") or die("Unable to create a file");
$text="I am Rahul Deshmukh.M glad to be here in QED42.\n";
fwrite($file,$text);
fclose($file);
$file=fopen("new.txt","r") or die("Unable to create a file");
while(!feof($file))
{
 echo fgets($file);
}
fclose();
?>