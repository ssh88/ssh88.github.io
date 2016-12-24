<!DOCTYPE HTML>
<html>
<head>
<meta name="description" content="Shabeer S Hussain, Freelance Flash/Website Developer" />
<meta name="keywords" content="HTML,CSS,PHP,Actionscript,as3,as2,flash,freelance,games" />
<meta name="author" content="Shabeer S Hussain" />
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />

<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">

<link rel="stylesheet" type="text/css" href="css/default.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/typography.css" media="screen">
<title>Contact</title>
</head>

<body>
<div id="container">
      <div id="nav">
            <?php include("navigation.php") ?>
        </div>
<div id="content">
<p>
<table width="400" border="0" align="center" cellpadding="3" cellspacing="1">
<tr>
<td><strong>Contact Form </strong></td>
</tr>
</table>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1">
<tr>
<td><form name="form1" method="post" action="index.php">
<table width="100%" border="0" cellspacing="1" cellpadding="3">
<tr>
<td width="16%">Subject</td>
<td width="2%">:</td>
<td width="82%"><input name="subject" type="text" id="subject" size="50"></td>
</tr>
<tr>
<td>Detail</td>
<td>:</td>
<td><textarea name="detail" cols="50" rows="4" id="detail"></textarea></td>
</tr>
<tr>
<td>Name</td>
<td>:</td>
<td><input name="name" type="text" id="name" size="50"></td>
</tr>
<tr>
<td>Email</td>
<td>:</td>
<td><input name="customer_mail" type="text" id="customer_mail" size="50"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Submit"> <input type="reset" name="Submit2" value="Reset"></td>
</tr>
</table>
</form>
</td>
</tr>
</table>
</p>
            <div id="footer">
                <?php include("footer.php") ?>
            </div>
</div>
</div>


<?php

// Contact subject
$subject ="$subject"; 

// Details
$message="$detail";

// Mail of sender
$mail_from="$customer_mail"; 

// From 
$header="from: $name <$mail_from>";

// Enter your email address
//$to ='shabeershussain@gmail.com';
$to ='big_sh@hotmail.com';
$send_contact=mail($to,$subject,$message,$header);

// Check, if message sent to your email 
// display message "We've recived your information"
if($send_contact){
echo "We've recived your contact information";
}
else {
echo "ERROR";
}
?>
</body>
</html>