<?php
echo exec("sudo reboot");

echo "<h1><center>Reboot</center></h1>";
echo "<center><img src=\"../images/load.gif\"></center>";

echo "<meta http-equiv=\"refresh\" content=\"4; url=http://".$_SERVER['SERVER_NAME']."\">";
?>

