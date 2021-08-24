<?php
     $videosize = $_POST['sizeValue'];
    shell_exec("sudo /var/www/sync/omxsizetocenter $videosize");
?>