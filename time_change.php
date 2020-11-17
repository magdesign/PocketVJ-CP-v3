<script src="js/moment.js"></script>
<script type="text/javascript">

    actualtime = (moment().format("YYYY-MM-DD HH:mm:ss"));
    document.cookie = "usertime =" + actualtime ;

</script>

<?php
$usertime = htmlentities($_COOKIE['usertime'], 3, 'UTF-8');

shell_exec("sudo date -s '".$usertime."'");
shell_exec("sudo hwclock -w");

echo htmlentities($_COOKIE['usertime'], 3, 'UTF-8');
?>


<script type="text/javascript">

window.close();

</script>
