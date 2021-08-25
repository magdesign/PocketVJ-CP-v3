<?php
     $Xposition = $_POST['XpositionValue'];
   
     //$Yposition = $_POST['YpositionValue'];

    shell_exec("sudo /var/www/sync/omxXposition $Xposition");
    //shell_exec("sudo /var/www/sync/omxYposition $Yposition");


    //if someone can tell me how to map several $_POST value to several shell commands within on php file, please tell me,
    //otherwise I need to create hunderts of php files for each function, which is a bit silly 
?>