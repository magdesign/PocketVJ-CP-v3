<?php

// das grift dr input vom js script im CP ab, speed cha vo 0.0 bis 4 ufe ga
    $usgab = $_POST['speedValue'];
    echo $usgab;
    
    shell_exec("sudo /var/www/sync/dbuscontrol.sh rate $usgab");

?>