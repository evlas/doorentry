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

if ($conf_array['input']['keyboard'] == "buttons") {
?>

<h2 class="title">Buttons<br />
</h2>
<div style="text-align: center;" class="entry">
<center>
<form method="post" action="cgi-bin/buttons.php" name="buttons">
<table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">
<tr>
<th></th><th>Enable</th><th>Extension</th>
</tr>
<tbody>
<tr>
<td style="width: 30%;">Button 1: </td>
<td> <input name="en1" id="en1" type="checkbox" <?php if($conf_array['input']['en_1']) { echo 'checked'; }; ?> </td>
<td style="width: 60%;"> <input name="button1" id="but1" type="text" value="<?php echo $conf_array['input']['button_1']; ?>" /></td>
</tr>
<tr>
<td style="width: 30%;">Button 2: </td>
<td> <input name="en2" id="en2" type="checkbox" <?php if($conf_array['input']['en_2']) { echo 'checked'; }; ?> </td>
<td> <input name="button2" id="but2" type="text" value="<?php echo $conf_array['input']['button_2']; ?>" /></td>
</tr>
<tr>
<td style="width: 30%;">Button 3: </td>
<td> <input name="en3" id="en3" type="checkbox" <?php if($conf_array['input']['en_3']) { echo 'checked'; }; ?> </td>
<td> <input name="button3" id="but3" type="text" value="<?php echo $conf_array['input']['button_3']; ?>" /></td>
</tr>
<tr>
<td style="width: 30%;">Button 4: </td>
<td> <input name="en4" id="en4" type="checkbox" <?php if($conf_array['input']['en_4']) { echo 'checked'; }; ?> </td>
<td> <input name="button4" id="but4" type="text" value="<?php echo $conf_array['input']['button_4']; ?>" /></td>
</tr>
<tr>
<td style="width: 30%;">Button 5: </td>
<td> <input name="en5" id="en5" type="checkbox" <?php if($conf_array['input']['en_5']) { echo 'checked'; }; ?> </td>
<td> <input name="button5" id="but5" type="text" value="<?php echo $conf_array['input']['button_5']; ?>" /></td>
</tr>
<tr>
<td style="width: 30%;">Button 6: </td>
<td> <input name="en6" id="en6" type="checkbox" <?php if($conf_array['input']['en_6']) { echo 'checked'; }; ?> </td>
<td> <input name="button6" id="but6" type="text" value="<?php echo $conf_array['input']['button_6']; ?>" /></td>
</tr>
<tr>
<td style="width: 30%;">Button 7: </td>
<td> <input name="en7" id="en7" type="checkbox" <?php if($conf_array['input']['en_7']) { echo 'checked'; }; ?> </td>
<td> <input name="button7" id="but7" type="text" value="<?php echo $conf_array['input']['button_7']; ?>" /></td>
</tr>
<tr>
<td style="width: 30%;">Button 8: </td>
<td> <input name="en8" id="en8" type="checkbox" <?php if($conf_array['input']['en_8']) { echo 'checked'; }; ?> </td>
<td> <input name="button8" id="but8" type="text" value="<?php echo $conf_array['input']['button_8']; ?>" /></td>
</tr>
<tr>
<td style="text-align: right;"><input value="Submit" type="submit" /></td>
<td><input value="Cancel" type="submit" /></td>
<td><input name="apply" value="Apply" type="submit" /></td>
</tr>
</tbody>
</table>
<br />
</form>
</center>

<?php
} elseif ($conf_array['input']['keyboard'] == "keyboard") {
?>

<h2 class="title">Keyboard<br />
</h2>
<div style="text-align: center;" class="entry">
<center>
<form method="post" action="cgi-bin/keyboard.php" name="keyboard">
<table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">
<tr>
<th></th><th>Enable</th><th>Extension</th>
</tr>
<tbody>
<tr>
<td style="width: 30%;">DHCP : </td>
<td> <input name="dhcp" id="checkboxOne" type="checkbox" <?php if($conf_array['network']['dhcp']) { echo 'checked'; }; ?> /></td>
</tr>
<tr>
<td style="width: 30%;">IP :&nbsp; </td>
<td><input name="ip" id="ip" type="text" disable value="<?php echo $conf_array['network']['ip_address']; ?>" /></td>
</tr>
<tr>
<td>Netmask :&nbsp; </td>
<td><input name="netmask" id="netmask" type="text" disable value="<?php echo $conf_array['network']['netmask']; ?>" /></td>
</tr>
<tr>
<td>Gateway :&nbsp; </td>
<td><input name="gateway" id="gateway" type="text" disable value="<?php echo $conf_array['network']['gateway']; ?>" /></td>
</tr>
<tr>
<td style="text-align: left;"><br />
</td>
<td><br />
</td>
</tr>
<tr>
<td>DNS&nbsp;:</td>
<td><input name="dns1" id="dns1" type="text" disable value="<?php echo $conf_array['network']['dns1']; ?>" /></td>
</tr>
<tr>
<td></td>
<td><input name="dns2" id="dns2" type="text" disable value="<?php echo $conf_array['network']['dns2']; ?>" /></td>
</tr>
<tr>
<td style="text-align: right;"><input value="Submit" type="submit" /></td>
<td><input value="Cancel" type="submit" />&nbsp; <input name="apply" value="Apply" type="submit" /></td>
</tr>
</tbody>
</table>
<br />
</form>
</center>

<?php
}
?>


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
<h2></h2>
</li>
<li>
<ul>
<li></li>
<li></li>
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