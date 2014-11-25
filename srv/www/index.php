<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" /><title>Entry Phone</title>

<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
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
<h2 class="title">Status<br />
</h2>
<div style="text-align: center;" class="entry">
<center><br />
<?php
echo "<h3><b>Registration:</b></h3>";
 system("linphonecsh status register");
echo "<br><br>";
echo "<h3><b>Auto Answer:</b></h3>";
 system("linphonecsh status autoanswer");
echo "<br><br>";
echo "<h3><b>Hook Status:</b></h3>";
 system("linphonecsh status hook");
?>
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