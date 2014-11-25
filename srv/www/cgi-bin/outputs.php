<?php

include 'board.inc.php';

// Parse with sections
$conf_array = parse_ini_file("/srv/config/board.conf", true);

if ($_POST['en1'] == "on")
  $conf_array['output']['en_1']=1;
else
  $conf_array['output']['en_1']=0;
$conf_array['output']['dtmf_1']=$_POST['dtmf1'];
$conf_array['output']['chn_1']=$_POST['chn1'];
$conf_array['output']['relay_1']=$_POST['relay1'];

if ($_POST['en2'] == "on")
  $conf_array['output']['en_2']=1;
else
  $conf_array['output']['en_2']=0;
$conf_array['output']['dtmf_2']=$_POST['dtmf2'];
$conf_array['output']['chn_2']=$_POST['chn2'];
$conf_array['output']['relay_2']=$_POST['relay2'];

if ($_POST['en3'] == "on")
  $conf_array['output']['en_3']=1;
else
  $conf_array['output']['en_3']=0;
$conf_array['output']['dtmf_3']=$_POST['dtmf3'];
$conf_array['output']['chn_3']=$_POST['chn3'];
$conf_array['output']['relay_3']=$_POST['relay3'];

if ($_POST['en4'] == "on")
  $conf_array['output']['en_4']=1;
else
  $conf_array['output']['en_4']=0;
$conf_array['output']['dtmf_4']=$_POST['dtmf4'];
$conf_array['output']['chn_4']=$_POST['chn4'];
$conf_array['output']['relay_4']=$_POST['relay4'];

if ($_POST['en5'] == "on")
  $conf_array['output']['en_5']=1;
else
  $conf_array['output']['en_5']=0;
$conf_array['output']['dtmf_5']=$_POST['dtmf5'];
$conf_array['output']['chn_5']=$_POST['chn5'];
$conf_array['output']['relay_5']=$_POST['relay5'];

if ($_POST['en6'] == "on")
  $conf_array['output']['en_6']=1;
else
  $conf_array['output']['en_6']=0;
$conf_array['output']['dtmf_6']=$_POST['dtmf6'];
$conf_array['output']['chn_6']=$_POST['chn6'];
$conf_array['output']['relay_6']=$_POST['relay6'];

if ($_POST['en7'] == "on")
  $conf_array['output']['en_7']=1;
else
  $conf_array['output']['en_7']=0;
$conf_array['output']['dtmf_7']=$_POST['dtmf7'];
$conf_array['output']['chn_7']=$_POST['chn7'];
$conf_array['output']['relay_7']=$_POST['relay7'];

if ($_POST['en8'] == "on")
  $conf_array['output']['en_8']=1;
else
  $conf_array['output']['en_8']=0;
$conf_array['output']['dtmf_8']=$_POST['dtmf8'];
$conf_array['output']['chn_8']=$_POST['chn8'];
$conf_array['output']['relay_8']=$_POST['relay8'];

if ($_POST['en9'] == "on")
  $conf_array['output']['en_9']=1;
else
  $conf_array['output']['en_9']=0;
$conf_array['output']['dtmf_9']=$_POST['dtmf9'];
$conf_array['output']['chn_9']=$_POST['chn9'];
$conf_array['output']['relay_9']=$_POST['relay9'];

if ($_POST['en0'] == "on")
  $conf_array['output']['en_0']=1;
else
  $conf_array['output']['en_0']=0;
$conf_array['output']['dtmf_0']=$_POST['dtmf0'];
$conf_array['output']['chn_0']=$_POST['chn0'];
$conf_array['output']['relay_0']=$_POST['relay0'];

write_ini_file($conf_array, $path, $has_sections=TRUE);

if ($_POST['apply']) {
  header('Location: apply.php');
} else {
  header('Location: ../outputs.php');
}

?>
