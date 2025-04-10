<?php
    $filename = "newfile.txt";
    $myfile = fopen($filename, "w") or die("Unable to open file!");
    $txt = "Prabhav Nasa<br>";
    fwrite($myfile, $txt);
    $txt = "pn<br>";
    fwrite($myfile, $txt);
    fclose($myfile);
    
    if(file_exists($filename))
    {
       $filesize = filesize($filename);
       $msg = "File  created with name $filename ";
       $msg .= "containing $filesize bytes";
       echo $msg;
    }
    else
    {
       echo "File $filename does not exit";
    }
    echo "<br>This program is written by Prabhav Nasa<br>ERPID-0221BCA011";
?>