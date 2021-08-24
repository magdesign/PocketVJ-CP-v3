<?php
// ds grift dr input vom js script opacity alpha im CP ab:
    $alphavalue = $_POST['opacityValue'];
// u ds fuert naer us
    shell_exec("sudo /var/www/sync/dbuscontrol.sh setalpha $alphavalue");

?>
