
<?php
$handle = fopen("filehandle.txt", "r") or die("Unable to open the file");
if ($handle) {
    $i = 0;
    while (($line = fgets($handle)) !== false) {
        // process the line read.
        $i++;
        print $i;
    }

    fclose($handle);
} 
?>