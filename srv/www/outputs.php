<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta content="text/html; charset=utf-8" http-equiv="content-type" /><title>Entry Phone</title>

<meta content="" name="keywords" />
<meta content="" name="description" />
<link type="text/css" rel="stylesheet" href="default.css" />
<script type="text/javascript" src="jquery-1.11.1.min.js"></script>
<script type="text/javascript">//<![CDATA[ 
$(function() {
$('#checkboxOne').click(function() {
var cb1 = $('#checkboxOne').is(':checked');
$('#ip, #netmask, #gateway').prop('disabled', cb1);
$('#dns1, #dns2').prop('disabled', cb1); 
});
});
//]]> </script>
</head>
<body>
<div id="header">
<div id="logo">
<h1>Entry Phone</h1>
<h2>By vmh</h2>
<a href="cgi-bin/reboot.php"><img style="top: 8px; right: 78px; position: absolute;" src="images/reboot.png" height="50" width="50" /></a>
<a href="cgi-bin/poweroff.php"><img style="top: 8px; right: 28px; position: absolute;" src="images/exit.png" height="50" width="50" /></a></div>
</div>
<hr />
<div id="page">
<div id="bg">
<div id="content">
<div class="post" style="padding-top: 57px;">
<?php
// Parse with sections
$conf_array = parse_ini_file("/srv/config/board.conf", true);
?>

<h2 class="title">Relays<br />
</h2>
<div style="text-align: center;" class="entry">
<center>
<form method="post" action="cgi-bin/outputs.php" name="outputs">
<table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">
<tr>
<th></th><th>Enable</th><th>DTMF</th><th>Channel</th><th>Option</th>
</tr>
<tbody>
<tr>
<td style="width: 15%;">Relay 1: </td>
<td> <input name="en1" id="en1" type="checkbox" <?php if($conf_array['output']['en_1']) { echo 'checked'; }; ?> </td>
<td> <select name="dtmf1" id="dtmf1">
<?php 
  if ($conf_array['output']['dtmf_1'] == 0) 
    echo "<option value=\"0\" selected=\"true\">0</option>";
  else
    echo "<option value=\"0\">0</option>";

  if ($conf_array['output']['dtmf_1'] == 1) 
    echo "<option value=\"1\" selected=\"true\">1</option>";
  else
    echo "<option value=\"1\">1</option>";

  if ($conf_array['output']['dtmf_1'] == 2) 
    echo "<option value=\"2\" selected=\"true\">2</option>";
  else
    echo "<option value=\"2\">2</option>";

  if ($conf_array['output']['dtmf_1'] == 3) 
    echo "<option value=\"3\" selected=\"true\">3</option>";
  else
    echo "<option value=\"3\">3</option>";

  if ($conf_array['output']['dtmf_1'] == 4) 
    echo "<option value=\"4\" selected=\"true\">4</option>";
  else
    echo "<option value=\"4\">4</option>";

  if ($conf_array['output']['dtmf_1'] == 5) 
    echo "<option value=\"5\" selected=\"true\">5</option>";
  else
    echo "<option value=\"5\">5</option>";

  if ($conf_array['output']['dtmf_1'] == 6) 
    echo "<option value=\"6\" selected=\"true\">6</option>";
  else
    echo "<option value=\"6\">6</option>";

  if ($conf_array['output']['dtmf_1'] == 7) 
    echo "<option value=\"7\" selected=\"true\">7</option>";
  else
    echo "<option value=\"7\">7</option>";

  if ($conf_array['output']['dtmf_1'] == 8) 
    echo "<option value=\"8\" selected=\"true\">8</option>";
  else
    echo "<option value=\"8\">8</option>";

  if ($conf_array['output']['dtmf_1'] == 9) 
    echo "<option value=\"9\" selected=\"true\">9</option>";
  else
    echo "<option value=\"9\">9</option>";
?>
</select> </td>

<td> <select name="chn1" id="chn1">
<?php 
  if ($conf_array['output']['chn_1'] == "1") 
    echo "<option value=\"1\" selected=\"true\">1</option>";
  else
    echo "<option value=\"1\">1</option>";

  if ($conf_array['output']['chn_1'] == "2") 
    echo "<option value=\"2\" selected=\"true\">2</option>";
  else
    echo "<option value=\"2\">2</option>";

  if ($conf_array['output']['chn_1'] == "T") 
    echo "<option value=\"T\" selected=\"true\">T</option>";
  else
    echo "<option value=\"T\">T</option>";

  if ($conf_array['output']['chn_1'] == "U") 
    echo "<option value=\"U\" selected=\"true\">U</option>";
  else
    echo "<option value=\"U\">U</option>";
?>
</select> </td>

<td style="width: 60%;"><input name="relay1" id="rel1" type="text" size="40" value="<?php echo $conf_array['output']['relay_1']; ?>" /></td>
</tr>
<tr>
<td style="width: 15%;">Relay 2: </td>
<td> <input name="en2" id="en2" type="checkbox" <?php if($conf_array['output']['en_2']) { echo 'checked'; }; ?> </td>
<td> <select name="dtmf2" id="dtmf2" selectedvalue="<?php echo $conf_array['output']['dtmf_2']; ?>">
<?php 
  if ($conf_array['output']['dtmf_2'] == 0) 
    echo "<option value=\"0\" selected=\"true\">0</option>";
  else
    echo "<option value=\"0\">0</option>";

  if ($conf_array['output']['dtmf_2'] == 1) 
    echo "<option value=\"1\" selected=\"true\">1</option>";
  else
    echo "<option value=\"1\">1</option>";

  if ($conf_array['output']['dtmf_2'] == 2) 
    echo "<option value=\"2\" selected=\"true\">2</option>";
  else
    echo "<option value=\"2\">2</option>";

  if ($conf_array['output']['dtmf_2'] == 3) 
    echo "<option value=\"3\" selected=\"true\">3</option>";
  else
    echo "<option value=\"3\">3</option>";

  if ($conf_array['output']['dtmf_2'] == 4) 
    echo "<option value=\"4\" selected=\"true\">4</option>";
  else
    echo "<option value=\"4\">4</option>";

  if ($conf_array['output']['dtmf_2'] == 5) 
    echo "<option value=\"5\" selected=\"true\">5</option>";
  else
    echo "<option value=\"5\">5</option>";

  if ($conf_array['output']['dtmf_2'] == 6) 
    echo "<option value=\"6\" selected=\"true\">6</option>";
  else
    echo "<option value=\"6\">6</option>";

  if ($conf_array['output']['dtmf_2'] == 7) 
    echo "<option value=\"7\" selected=\"true\">7</option>";
  else
    echo "<option value=\"7\">7</option>";

  if ($conf_array['output']['dtmf_2'] == 8) 
    echo "<option value=\"8\" selected=\"true\">8</option>";
  else
    echo "<option value=\"8\">8</option>";

  if ($conf_array['output']['dtmf_2'] == 9) 
    echo "<option value=\"9\" selected=\"true\">9</option>";
  else
    echo "<option value=\"9\">9</option>";
?>
</select> </td>

<td> <select name="chn2" id="chn2">
<?php 
  if ($conf_array['output']['chn_2'] == "1") 
    echo "<option value=\"1\" selected=\"true\">1</option>";
  else
    echo "<option value=\"1\">1</option>";

  if ($conf_array['output']['chn_2'] == "2") 
    echo "<option value=\"2\" selected=\"true\">2</option>";
  else
    echo "<option value=\"2\">2</option>";

  if ($conf_array['output']['chn_2'] == "T") 
    echo "<option value=\"T\" selected=\"true\">T</option>";
  else
    echo "<option value=\"T\">T</option>";

  if ($conf_array['output']['chn_2'] == "U") 
    echo "<option value=\"U\" selected=\"true\">U</option>";
  else
    echo "<option value=\"U\">U</option>";
?>
</select> </td>

<td style="width: 60%;"><input name="relay2" id="rel2" type="text" size="40" value="<?php echo $conf_array['output']['relay_2']; ?>" /></td>
</tr>
<tr>
<td style="width: 15%;">Relay 3: </td>
<td> <input name="en3" id="en3" type="checkbox" <?php if($conf_array['output']['en_3']) { echo 'checked'; }; ?> </td>
<td> <select name="dtmf3" id="dtmf3" selectedvalue="<?php echo $conf_array['output']['dtmf_3']; ?>">
<?php 
  if ($conf_array['output']['dtmf_3'] == 0) 
    echo "<option value=\"0\" selected=\"true\">0</option>";
  else
    echo "<option value=\"0\">0</option>";

  if ($conf_array['output']['dtmf_3'] == 1) 
    echo "<option value=\"1\" selected=\"true\">1</option>";
  else
    echo "<option value=\"1\">1</option>";

  if ($conf_array['output']['dtmf_3'] == 2) 
    echo "<option value=\"2\" selected=\"true\">2</option>";
  else
    echo "<option value=\"2\">2</option>";

  if ($conf_array['output']['dtmf_3'] == 3) 
    echo "<option value=\"3\" selected=\"true\">3</option>";
  else
    echo "<option value=\"3\">3</option>";

  if ($conf_array['output']['dtmf_3'] == 4) 
    echo "<option value=\"4\" selected=\"true\">4</option>";
  else
    echo "<option value=\"4\">4</option>";

  if ($conf_array['output']['dtmf_3'] == 5) 
    echo "<option value=\"5\" selected=\"true\">5</option>";
  else
    echo "<option value=\"5\">5</option>";

  if ($conf_array['output']['dtmf_3'] == 6) 
    echo "<option value=\"6\" selected=\"true\">6</option>";
  else
    echo "<option value=\"6\">6</option>";

  if ($conf_array['output']['dtmf_3'] == 7) 
    echo "<option value=\"7\" selected=\"true\">7</option>";
  else
    echo "<option value=\"7\">7</option>";

  if ($conf_array['output']['dtmf_3'] == 8) 
    echo "<option value=\"8\" selected=\"true\">8</option>";
  else
    echo "<option value=\"8\">8</option>";

  if ($conf_array['output']['dtmf_3'] == 9) 
    echo "<option value=\"9\" selected=\"true\">9</option>";
  else
    echo "<option value=\"9\">9</option>";
?>
</select> </td>

<td> <select name="chn3" id="chn3">
<?php 
  if ($conf_array['output']['chn_3'] == "1") 
    echo "<option value=\"1\" selected=\"true\">1</option>";
  else
    echo "<option value=\"1\">1</option>";

  if ($conf_array['output']['chn_3'] == "2") 
    echo "<option value=\"2\" selected=\"true\">2</option>";
  else
    echo "<option value=\"2\">2</option>";

  if ($conf_array['output']['chn_3'] == "T") 
    echo "<option value=\"T\" selected=\"true\">T</option>";
  else
    echo "<option value=\"T\">T</option>";

  if ($conf_array['output']['chn_3'] == "U") 
    echo "<option value=\"U\" selected=\"true\">U</option>";
  else
    echo "<option value=\"U\">U</option>";
?>
</select> </td>

<td> <input name="relay3" id="rel3" type="text" size="40" value="<?php echo $conf_array['output']['relay_3']; ?>" /></td>
</tr>
<tr>
<td style="width: 15%;">Relay 4: </td>
<td> <input name="en4" id="en4" type="checkbox" <?php if($conf_array['output']['en_4']) { echo 'checked'; }; ?> </td>
<td> <select name="dtmf4" id="dtmf4" selectedvalue="<?php echo $conf_array['output']['dtmf_4']; ?>">
<?php 
  if ($conf_array['output']['dtmf_4'] == 0) 
    echo "<option value=\"0\" selected=\"true\">0</option>";
  else
    echo "<option value=\"0\">0</option>";

  if ($conf_array['output']['dtmf_4'] == 1) 
    echo "<option value=\"1\" selected=\"true\">1</option>";
  else
    echo "<option value=\"1\">1</option>";

  if ($conf_array['output']['dtmf_4'] == 2) 
    echo "<option value=\"2\" selected=\"true\">2</option>";
  else
    echo "<option value=\"2\">2</option>";

  if ($conf_array['output']['dtmf_4'] == 3) 
    echo "<option value=\"3\" selected=\"true\">3</option>";
  else
    echo "<option value=\"3\">3</option>";

  if ($conf_array['output']['dtmf_4'] == 4) 
    echo "<option value=\"4\" selected=\"true\">4</option>";
  else
    echo "<option value=\"4\">4</option>";

  if ($conf_array['output']['dtmf_4'] == 5) 
    echo "<option value=\"5\" selected=\"true\">5</option>";
  else
    echo "<option value=\"5\">5</option>";

  if ($conf_array['output']['dtmf_4'] == 6) 
    echo "<option value=\"6\" selected=\"true\">6</option>";
  else
    echo "<option value=\"6\">6</option>";

  if ($conf_array['output']['dtmf_4'] == 7) 
    echo "<option value=\"7\" selected=\"true\">7</option>";
  else
    echo "<option value=\"7\">7</option>";

  if ($conf_array['output']['dtmf_4'] == 8) 
    echo "<option value=\"8\" selected=\"true\">8</option>";
  else
    echo "<option value=\"8\">8</option>";

  if ($conf_array['output']['dtmf_4'] == 9) 
    echo "<option value=\"9\" selected=\"true\">9</option>";
  else
    echo "<option value=\"9\">9</option>";
?>
</select> </td>

<td> <select name="chn4" id="chn4">
<?php 
  if ($conf_array['output']['chn_4'] == "1") 
    echo "<option value=\"1\" selected=\"true\">1</option>";
  else
    echo "<option value=\"1\">1</option>";

  if ($conf_array['output']['chn_4'] == "2") 
    echo "<option value=\"2\" selected=\"true\">2</option>";
  else
    echo "<option value=\"2\">2</option>";

  if ($conf_array['output']['chn_4'] == "T") 
    echo "<option value=\"T\" selected=\"true\">T</option>";
  else
    echo "<option value=\"T\">T</option>";

  if ($conf_array['output']['chn_4'] == "U") 
    echo "<option value=\"U\" selected=\"true\">U</option>";
  else
    echo "<option value=\"U\">U</option>";
?>
</select> </td>

<td> <input name="relay4" id="rel4" type="text" size="40" value="<?php echo $conf_array['output']['relay_4']; ?>" /></td>
</tr>
<tr>
<td style="width: 15%;">Relay 5: </td>
<td> <input name="en5" id="en5" type="checkbox" <?php if($conf_array['output']['en_5']) { echo 'checked'; }; ?> </td>
<td> <select name="dtmf5" id="dtmf5" selectedvalue="<?php echo $conf_array['output']['dtmf_5']; ?>">
<?php 
  if ($conf_array['output']['dtmf_5'] == 0) 
    echo "<option value=\"0\" selected=\"true\">0</option>";
  else
    echo "<option value=\"0\">0</option>";

  if ($conf_array['output']['dtmf_5'] == 1) 
    echo "<option value=\"1\" selected=\"true\">1</option>";
  else
    echo "<option value=\"1\">1</option>";

  if ($conf_array['output']['dtmf_5'] == 2) 
    echo "<option value=\"2\" selected=\"true\">2</option>";
  else
    echo "<option value=\"2\">2</option>";

  if ($conf_array['output']['dtmf_5'] == 3) 
    echo "<option value=\"3\" selected=\"true\">3</option>";
  else
    echo "<option value=\"3\">3</option>";

  if ($conf_array['output']['dtmf_5'] == 4) 
    echo "<option value=\"4\" selected=\"true\">4</option>";
  else
    echo "<option value=\"4\">4</option>";

  if ($conf_array['output']['dtmf_5'] == 5) 
    echo "<option value=\"5\" selected=\"true\">5</option>";
  else
    echo "<option value=\"5\">5</option>";

  if ($conf_array['output']['dtmf_5'] == 6) 
    echo "<option value=\"6\" selected=\"true\">6</option>";
  else
    echo "<option value=\"6\">6</option>";

  if ($conf_array['output']['dtmf_5'] == 7) 
    echo "<option value=\"7\" selected=\"true\">7</option>";
  else
    echo "<option value=\"7\">7</option>";

  if ($conf_array['output']['dtmf_5'] == 8) 
    echo "<option value=\"8\" selected=\"true\">8</option>";
  else
    echo "<option value=\"8\">8</option>";

  if ($conf_array['output']['dtmf_5'] == 9) 
    echo "<option value=\"9\" selected=\"true\">9</option>";
  else
    echo "<option value=\"9\">9</option>";
?>
</select> </td>

<td> <select name="chn5" id="chn5">
<?php 
  if ($conf_array['output']['chn_5'] == "1") 
    echo "<option value=\"1\" selected=\"true\">1</option>";
  else
    echo "<option value=\"1\">1</option>";

  if ($conf_array['output']['chn_5'] == "2") 
    echo "<option value=\"2\" selected=\"true\">2</option>";
  else
    echo "<option value=\"2\">2</option>";

  if ($conf_array['output']['chn_5'] == "T") 
    echo "<option value=\"T\" selected=\"true\">T</option>";
  else
    echo "<option value=\"T\">T</option>";

  if ($conf_array['output']['chn_5'] == "U") 
    echo "<option value=\"U\" selected=\"true\">U</option>";
  else
    echo "<option value=\"U\">U</option>";
?>
</select> </td>

<td> <input name="relay5" id="rel5" type="text" size="40" value="<?php echo $conf_array['output']['relay_5']; ?>" /></td>
</tr>
<tr>
<td style="width: 15%;">Relay 6: </td>
<td> <input name="en6" id="en6" type="checkbox" <?php if($conf_array['output']['en_6']) { echo 'checked'; }; ?> </td>
<td> <select name="dtmf6" id="dtmf6" selectedvalue="<?php echo $conf_array['output']['dtmf_6']; ?>">
<?php 
  if ($conf_array['output']['dtmf_6'] == 0) 
    echo "<option value=\"0\" selected=\"true\">0</option>";
  else
    echo "<option value=\"0\">0</option>";

  if ($conf_array['output']['dtmf_6'] == 1) 
    echo "<option value=\"1\" selected=\"true\">1</option>";
  else
    echo "<option value=\"1\">1</option>";

  if ($conf_array['output']['dtmf_6'] == 2) 
    echo "<option value=\"2\" selected=\"true\">2</option>";
  else
    echo "<option value=\"2\">2</option>";

  if ($conf_array['output']['dtmf_6'] == 3) 
    echo "<option value=\"3\" selected=\"true\">3</option>";
  else
    echo "<option value=\"3\">3</option>";

  if ($conf_array['output']['dtmf_6'] == 4) 
    echo "<option value=\"4\" selected=\"true\">4</option>";
  else
    echo "<option value=\"4\">4</option>";

  if ($conf_array['output']['dtmf_6'] == 5) 
    echo "<option value=\"5\" selected=\"true\">5</option>";
  else
    echo "<option value=\"5\">5</option>";

  if ($conf_array['output']['dtmf_6'] == 6) 
    echo "<option value=\"6\" selected=\"true\">6</option>";
  else
    echo "<option value=\"6\">6</option>";

  if ($conf_array['output']['dtmf_6'] == 7) 
    echo "<option value=\"7\" selected=\"true\">7</option>";
  else
    echo "<option value=\"7\">7</option>";

  if ($conf_array['output']['dtmf_6'] == 8) 
    echo "<option value=\"8\" selected=\"true\">8</option>";
  else
    echo "<option value=\"8\">8</option>";

  if ($conf_array['output']['dtmf_6'] == 9) 
    echo "<option value=\"9\" selected=\"true\">9</option>";
  else
    echo "<option value=\"9\">9</option>";
?>
</select> </td>

<td> <select name="chn6" id="chn6">
<?php 
  if ($conf_array['output']['chn_6'] == "1") 
    echo "<option value=\"1\" selected=\"true\">1</option>";
  else
    echo "<option value=\"1\">1</option>";

  if ($conf_array['output']['chn_6'] == "2") 
    echo "<option value=\"2\" selected=\"true\">2</option>";
  else
    echo "<option value=\"2\">2</option>";

  if ($conf_array['output']['chn_6'] == "T") 
    echo "<option value=\"T\" selected=\"true\">T</option>";
  else
    echo "<option value=\"T\">T</option>";

  if ($conf_array['output']['chn_6'] == "U") 
    echo "<option value=\"U\" selected=\"true\">U</option>";
  else
    echo "<option value=\"U\">U</option>";
?>
</select> </td>

<td> <input name="relay6" id="rel6" type="text" size="40" value="<?php echo $conf_array['output']['relay_6']; ?>" /></td>
</tr>
<tr>
<td style="width: 15%;">Relay 7: </td>
<td> <input name="en7" id="en7" type="checkbox" <?php if($conf_array['output']['en_7']) { echo 'checked'; }; ?> </td>
<td> <select name="dtmf7" id="dtmf7" selectedvalue="<?php echo $conf_array['output']['dtmf_7']; ?>">
<?php 
  if ($conf_array['output']['dtmf_7'] == 0) 
    echo "<option value=\"0\" selected=\"true\">0</option>";
  else
    echo "<option value=\"0\">0</option>";

  if ($conf_array['output']['dtmf_7'] == 1) 
    echo "<option value=\"1\" selected=\"true\">1</option>";
  else
    echo "<option value=\"1\">1</option>";

  if ($conf_array['output']['dtmf_7'] == 2) 
    echo "<option value=\"2\" selected=\"true\">2</option>";
  else
    echo "<option value=\"2\">2</option>";

  if ($conf_array['output']['dtmf_7'] == 3) 
    echo "<option value=\"3\" selected=\"true\">3</option>";
  else
    echo "<option value=\"3\">3</option>";

  if ($conf_array['output']['dtmf_7'] == 4) 
    echo "<option value=\"4\" selected=\"true\">4</option>";
  else
    echo "<option value=\"4\">4</option>";

  if ($conf_array['output']['dtmf_7'] == 5) 
    echo "<option value=\"5\" selected=\"true\">5</option>";
  else
    echo "<option value=\"5\">5</option>";

  if ($conf_array['output']['dtmf_7'] == 6) 
    echo "<option value=\"6\" selected=\"true\">6</option>";
  else
    echo "<option value=\"6\">6</option>";

  if ($conf_array['output']['dtmf_7'] == 7) 
    echo "<option value=\"7\" selected=\"true\">7</option>";
  else
    echo "<option value=\"7\">7</option>";

  if ($conf_array['output']['dtmf_7'] == 8) 
    echo "<option value=\"8\" selected=\"true\">8</option>";
  else
    echo "<option value=\"8\">8</option>";

  if ($conf_array['output']['dtmf_7'] == 9) 
    echo "<option value=\"9\" selected=\"true\">9</option>";
  else
    echo "<option value=\"9\">9</option>";
?>
</select> </td>

<td> <select name="chn7" id="chn7">
<?php 
  if ($conf_array['output']['chn_7'] == "1") 
    echo "<option value=\"1\" selected=\"true\">1</option>";
  else
    echo "<option value=\"1\">1</option>";

  if ($conf_array['output']['chn_7'] == "2") 
    echo "<option value=\"2\" selected=\"true\">2</option>";
  else
    echo "<option value=\"2\">2</option>";

  if ($conf_array['output']['chn_7'] == "T") 
    echo "<option value=\"T\" selected=\"true\">T</option>";
  else
    echo "<option value=\"T\">T</option>";

  if ($conf_array['output']['chn_7'] == "U") 
    echo "<option value=\"U\" selected=\"true\">U</option>";
  else
    echo "<option value=\"U\">U</option>";
?>
</select> </td>

<td> <input name="relay7" id="rel7" type="text" size="40" value="<?php echo $conf_array['output']['relay_7']; ?>" /></td>
</tr>
<tr>
<td style="width: 15%;">Relay 8: </td>
<td> <input name="en8" id="en8" type="checkbox" <?php if($conf_array['output']['en_8']) { echo 'checked'; }; ?> </td>
<td> <select name="dtmf8" id="dtmf8" selectedvalue="<?php echo $conf_array['output']['dtmf_8']; ?>">
<?php 
  if ($conf_array['output']['dtmf_8'] == 0) 
    echo "<option value=\"0\" selected=\"true\">0</option>";
  else
    echo "<option value=\"0\">0</option>";

  if ($conf_array['output']['dtmf_8'] == 1) 
    echo "<option value=\"1\" selected=\"true\">1</option>";
  else
    echo "<option value=\"1\">1</option>";

  if ($conf_array['output']['dtmf_8'] == 2) 
    echo "<option value=\"2\" selected=\"true\">2</option>";
  else
    echo "<option value=\"2\">2</option>";

  if ($conf_array['output']['dtmf_8'] == 3) 
    echo "<option value=\"3\" selected=\"true\">3</option>";
  else
    echo "<option value=\"3\">3</option>";

  if ($conf_array['output']['dtmf_8'] == 4) 
    echo "<option value=\"4\" selected=\"true\">4</option>";
  else
    echo "<option value=\"4\">4</option>";

  if ($conf_array['output']['dtmf_8'] == 5) 
    echo "<option value=\"5\" selected=\"true\">5</option>";
  else
    echo "<option value=\"5\">5</option>";

  if ($conf_array['output']['dtmf_8'] == 6) 
    echo "<option value=\"6\" selected=\"true\">6</option>";
  else
    echo "<option value=\"6\">6</option>";

  if ($conf_array['output']['dtmf_8'] == 7) 
    echo "<option value=\"7\" selected=\"true\">7</option>";
  else
    echo "<option value=\"7\">7</option>";

  if ($conf_array['output']['dtmf_8'] == 8) 
    echo "<option value=\"8\" selected=\"true\">8</option>";
  else
    echo "<option value=\"8\">8</option>";

  if ($conf_array['output']['dtmf_8'] == 9) 
    echo "<option value=\"9\" selected=\"true\">9</option>";
  else
    echo "<option value=\"9\">9</option>";
?>
</select> </td>

<td> <select name="chn8" id="chn8">
<?php 
  if ($conf_array['output']['chn_8'] == "1") 
    echo "<option value=\"1\" selected=\"true\">1</option>";
  else
    echo "<option value=\"1\">1</option>";

  if ($conf_array['output']['chn_8'] == "2") 
    echo "<option value=\"2\" selected=\"true\">2</option>";
  else
    echo "<option value=\"2\">2</option>";

  if ($conf_array['output']['chn_8'] == "T") 
    echo "<option value=\"T\" selected=\"true\">T</option>";
  else
    echo "<option value=\"T\">T</option>";

  if ($conf_array['output']['chn_8'] == "U") 
    echo "<option value=\"U\" selected=\"true\">U</option>";
  else
    echo "<option value=\"U\">U</option>";
?>
</select> </td>

<td> <input name="relay8" id="rel8" type="text" size="40" value="<?php echo $conf_array['output']['relay_8']; ?>" /></td>
</tr>
<tr>
<td style="width: 15%;">Relay 9: </td>
<td> <input name="en9" id="en9" type="checkbox" <?php if($conf_array['output']['en_9']) { echo 'checked'; }; ?> </td>
<td> <select name="dtmf9" id="dtmf9" selectedvalue="<?php echo $conf_array['output']['dtmf_9']; ?>">
<?php 
  if ($conf_array['output']['dtmf_9'] == 0) 
    echo "<option value=\"0\" selected=\"true\">0</option>";
  else
    echo "<option value=\"0\">0</option>";

  if ($conf_array['output']['dtmf_9'] == 1) 
    echo "<option value=\"1\" selected=\"true\">1</option>";
  else
    echo "<option value=\"1\">1</option>";

  if ($conf_array['output']['dtmf_9'] == 2) 
    echo "<option value=\"2\" selected=\"true\">2</option>";
  else
    echo "<option value=\"2\">2</option>";

  if ($conf_array['output']['dtmf_9'] == 3) 
    echo "<option value=\"3\" selected=\"true\">3</option>";
  else
    echo "<option value=\"3\">3</option>";

  if ($conf_array['output']['dtmf_9'] == 4) 
    echo "<option value=\"4\" selected=\"true\">4</option>";
  else
    echo "<option value=\"4\">4</option>";

  if ($conf_array['output']['dtmf_9'] == 5) 
    echo "<option value=\"5\" selected=\"true\">5</option>";
  else
    echo "<option value=\"5\">5</option>";

  if ($conf_array['output']['dtmf_9'] == 6) 
    echo "<option value=\"6\" selected=\"true\">6</option>";
  else
    echo "<option value=\"6\">6</option>";

  if ($conf_array['output']['dtmf_9'] == 7) 
    echo "<option value=\"7\" selected=\"true\">7</option>";
  else
    echo "<option value=\"7\">7</option>";

  if ($conf_array['output']['dtmf_9'] == 8) 
    echo "<option value=\"8\" selected=\"true\">8</option>";
  else
    echo "<option value=\"8\">8</option>";

  if ($conf_array['output']['dtmf_9'] == 9) 
    echo "<option value=\"9\" selected=\"true\">9</option>";
  else
    echo "<option value=\"9\">9</option>";
?>
</select> </td>

<td> <select name="chn9" id="chn9">
<?php 
  if ($conf_array['output']['chn_9'] == "1") 
    echo "<option value=\"1\" selected=\"true\">1</option>";
  else
    echo "<option value=\"1\">1</option>";

  if ($conf_array['output']['chn_9'] == "2") 
    echo "<option value=\"2\" selected=\"true\">2</option>";
  else
    echo "<option value=\"2\">2</option>";

  if ($conf_array['output']['chn_9'] == "T") 
    echo "<option value=\"T\" selected=\"true\">T</option>";
  else
    echo "<option value=\"T\">T</option>";

  if ($conf_array['output']['chn_9'] == "U") 
    echo "<option value=\"U\" selected=\"true\">U</option>";
  else
    echo "<option value=\"U\">U</option>";
?>
</select> </td>

<td> <input name="relay9" id="rel9" type="text" size="40" value="<?php echo $conf_array['output']['relay_9']; ?>" /></td>
</tr>
<tr>
<td style="width: 15%;">Relay 10: </td>
<td> <input name="en0" id="en0" type="checkbox" <?php if($conf_array['output']['en_0']) { echo 'checked'; }; ?> </td>
<td> <select name="dtmf0" id="dtmf0" selectedValue="<?php echo $conf_array['output']['dtmf_0']; ?>">
<?php 
  if ($conf_array['output']['dtmf_0'] == 0) 
    echo "<option value=\"0\" selected=\"true\">0</option>";
  else
    echo "<option value=\"0\">0</option>";

  if ($conf_array['output']['dtmf_0'] == 1) 
    echo "<option value=\"1\" selected=\"true\">1</option>";
  else
    echo "<option value=\"1\">1</option>";

  if ($conf_array['output']['dtmf_0'] == 2) 
    echo "<option value=\"2\" selected=\"true\">2</option>";
  else
    echo "<option value=\"2\">2</option>";

  if ($conf_array['output']['dtmf_0'] == 3) 
    echo "<option value=\"3\" selected=\"true\">3</option>";
  else
    echo "<option value=\"3\">3</option>";

  if ($conf_array['output']['dtmf_0'] == 4) 
    echo "<option value=\"4\" selected=\"true\">4</option>";
  else
    echo "<option value=\"4\">4</option>";

  if ($conf_array['output']['dtmf_0'] == 5) 
    echo "<option value=\"5\" selected=\"true\">5</option>";
  else
    echo "<option value=\"5\">5</option>";

  if ($conf_array['output']['dtmf_0'] == 6) 
    echo "<option value=\"6\" selected=\"true\">6</option>";
  else
    echo "<option value=\"6\">6</option>";

  if ($conf_array['output']['dtmf_0'] == 7) 
    echo "<option value=\"7\" selected=\"true\">7</option>";
  else
    echo "<option value=\"7\">7</option>";

  if ($conf_array['output']['dtmf_0'] == 8) 
    echo "<option value=\"8\" selected=\"true\">8</option>";
  else
    echo "<option value=\"8\">8</option>";

  if ($conf_array['output']['dtmf_0'] == 9) 
    echo "<option value=\"9\" selected=\"true\">9</option>";
  else
    echo "<option value=\"9\">9</option>";
?>
</select> </td>

<td> <select name="chn0" id="chn0">
<?php 
  if ($conf_array['output']['chn_0'] == "1") 
    echo "<option value=\"1\" selected=\"true\">1</option>";
  else
    echo "<option value=\"1\">1</option>";

  if ($conf_array['output']['chn_0'] == "2") 
    echo "<option value=\"2\" selected=\"true\">2</option>";
  else
    echo "<option value=\"2\">2</option>";

  if ($conf_array['output']['chn_0'] == "T") 
    echo "<option value=\"T\" selected=\"true\">T</option>";
  else
    echo "<option value=\"T\">T</option>";

  if ($conf_array['output']['chn_0'] == "U") 
    echo "<option value=\"U\" selected=\"true\">U</option>";
  else
    echo "<option value=\"U\">U</option>";
?>
</select> </td>

<td> <input name="relay0" id="rel0" type="text" size="40" value="<?php echo $conf_array['output']['relay_0']; ?>" /></td>
</tr>
<tr>
<td></td>
<td style="text-align: right;"><input value="Submit" type="submit" /></td>
<td><input value="Cancel" type="submit" /></td>
<td><input name="apply" value="Apply" type="submit" /></td>
</tr>
</tbody>
</table>
<br />
</form>
</center>

</div>
</div>
<br />
</div>
<!-- end contentn -->
<div id="sidebar">
<div id="about-box">
<h2>Menu</h2>
<ul>
<li><a href="network.php">Network</a></li>
<li><a href="sip.php">SIP</a></li>
<li><a href="audio.php">Audio</a></li>
<li><a href="video.php">Video</a></li>
<li><a href="inputs.php">Inputs</a></li>
<li><a href="outputs.php">Outputs</a></li>
<li><a href="index.php">Status</a></li>
</ul>
<p><br />
</p>
</div>
<ul>
<li>
<h2>Help</h2>
</li>
<li>
<ul>
<li>1 or 2 for local relays</li>
<li>time open is [ms]</li>
<li><b>T</b> for TCP</li>
<li><b>U</b> for UDP</li>
<li>syntax: IP|Relay|time[ms]</li> 
</ul>
</li>
</ul>
</div>
<!-- end sidebar -->
<div style="clear: both;">&nbsp;</div>
</div>
</div>
<!-- end page -->
<hr />
</body></html>