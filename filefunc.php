<?php
$fpointer=fopen("filehandle.txt","r") or die("Unable to open the specified file");
echo fread($fpointer,filesize("filehandle.txt"));
echo"This is not the end";
rewind($fpointer);//Brings back the file pointer to its initial position
echo fgets($fpointer);//Reads first line from the file

fclose($fpointer);
?>