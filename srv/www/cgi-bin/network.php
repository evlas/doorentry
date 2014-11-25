<?php

include 'board.inc.php';

// Parse with sections
$conf_array = parse_ini_file("/srv/config/board.conf", true);

if ($_POST['dhcp'] == "on")
  $conf_array['network']['dhcp']=1;
else
  $conf_array['network']['dhcp']=0;
$conf_array['network']['ip_address']=$_POST['ip'];
$conf_array['network']['netmask']=$_POST['netmask'];
$conf_array['network']['gateway']=$_POST['gateway'];
$conf_array['network']['dns1']=$_POST['dns1'];
$conf_array['network']['dns2']=$_POST['dns2'];

write_ini_file($conf_array, $path, $has_sections=TRUE);

if ($_POST['apply']) {
  header('Location: ../cgi-bin/apply.php');
} else {
  header('Location: ../network.php');
}

?>
