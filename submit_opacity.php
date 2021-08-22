<?php

// das grift dr input vom js script im CP ab:
    $usgab = $_POST['opacityValue'];
    echo $usgab;
    
    shell_exec("sudo /var/www/sync/dbuscontrol.sh setalpha $usgab");

?>