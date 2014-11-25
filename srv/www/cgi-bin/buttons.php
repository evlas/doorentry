<?php

include 'board.inc.php';

// Parse with sections
$conf_array = parse_ini_file("/srv/config/board.conf", true);

if ($conf_array['input']['keyboard'] == "buttons") {

if ($_POST['en1'] == "on")
  $conf_array['input']['en_1']=1;
else
  $conf_array['input']['en_1']=0;
$conf_array['input']['button_1']=$_POST['button1'];

if ($_POST['en2'] == "on")
  $conf_array['input']['en_2']=1;
else
  $conf_array['input']['en_2']=0;
$conf_array['input']['button_2']=$_POST['button2'];

if ($_POST['en3'] == "on")
  $conf_array['input']['en_3']=1;
else
  $conf_array['input']['en_3']=0;
$conf_array['input']['button_3']=$_POST['button3'];

if ($_POST['en4'] == "on")
  $conf_array['input']['en_4']=1;
else
  $conf_array['input']['en_4']=0;
$conf_array['input']['button_4']=$_POST['button4'];

if ($_POST['en5'] == "on")
  $conf_array['input']['en_5']=1;
else
  $conf_array['input']['en_5']=0;
$conf_array['input']['button_5']=$_POST['button5'];

if ($_POST['en6'] == "on")
  $conf_array['input']['en_6']=1;
else
  $conf_array['input']['en_6']=0;
$conf_array['input']['button_6']=$_POST['button6'];

if ($_POST['en7'] == "on")
  $conf_array['input']['en_7']=1;
else
  $conf_array['input']['en_7']=0;
$conf_array['input']['button_7']=$_POST['button7'];

if ($_POST['en8'] == "on")
  $conf_array['input']['en_8']=1;
else
  $conf_array['input']['en_8']=0;
$conf_array['input']['button_8']=$_POST['button8'];

if ($_POST['en9'] == "on")
  $conf_array['input']['en_9']=1;
else
  $conf_array['input']['en_9']=0;
$conf_array['input']['button_9']=$_POST['button9'];

if ($_POST['en0'] == "on")
  $conf_array['input']['en_0']=1;
else
  $conf_array['input']['en_0']=0;
$conf_array['input']['button_0']=$_POST['button0'];

write_ini_file($conf_array, $path, $has_sections=TRUE);

if ($_POST['apply']) {
  header('Location: ../cgi-bin/apply.php');
} else {
  header('Location: ../inputs.php');
}

}

?>
