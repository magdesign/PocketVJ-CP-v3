<?php
     $videosize = $_POST['sizeValue'];
    // $Xposition = $_POST['XpositionValue'];

   //  echo $videosize;

     shell_exec("sudo /var/www/sync/omxsizetocenter $videosize");
   // shell_exec("sudo /var/www/sync/omxXposition $Xposition");

   //How could I execute all received posts asynchronous within one php file?
?>