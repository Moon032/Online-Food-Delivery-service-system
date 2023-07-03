<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Online Food Delivery Service - Contact</title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<meta name="description" content="" />
	</head>
	<body>
		<div id="header">
			<h1 class="cap">Online Food Delivery</h1>
			<ul class="menu1">
				<li class="sub"><a href="index.php">Home</a></li>
				<li class="sub"><a href="product.php">Product</a></li>
				<li class="sub"><a href="contact.php">Contact</a></li>
				<li class="sub"><a href="register.php">Register</a></li>
				<li class="sub"><a href="logout.php">Logout</a></li>
			</ul>
		</div><!-- header -->

		<div id="content">
		<?php
error_reporting(1);
include("connection.php");
if($_POST['sub'])
{ 
$name=$_POST['t1'];
$email=$_POST['t2'];
$phone=$_POST['t3'];
$mesg=$_POST['t4'];
if(mysql_query("insert into content(name,email,phone,mesg) values('$name','$email','$phone','$mesg')"))
{$er="<font color='red' size='+1'> Message sent successfully</font>"; }
}

?>
			<div id="left">
				<h2>Contant Information</h2>
				<form method="post" name="contact" action="#">
				<label for="phone">Name:</label><input type="text" id="t1" name="t1" class="required input_field" /><br><br>
				<label for="email">Email:</label><input type="email" id="t2" name="t2" class="validate-email required input_field" /><br><br>
				<label for="phone">Phone:</label><input type="text" id="t3" name="t3" class="required input_field" /><br><br>
				<label for="text">Massage:</label><textarea id="t4" name="t4" rows="0" cols="0" class="required"></textarea><br><br>
				<input type="submit" name="sub"  id="sub" value="SEND" class="submit_button" /><br><br>
				</form>
				<h2><?php echo $er;?></h2>
				</div><!-- left -->
			<div>
				<h2>Location</h2>
				<p>Galaxy</p>
				<p>NO(55) Moon Road</p>
				<p>Space Town</p>
				<p><a href="facebook.com">Facebook</a></p>
				<p><a href="youtube.com">Youtube</a></p>
				<p><a href="web.telegram.org">Telegram</a></p><br><br><br><br><br><br><br><br><br>
			</div><!-- right -->
		</div><!-- content -->

		<div id="footer">
				<div>

					<ul class="menu1">
						<li class="sub"><a href="index.php">Home</a></li>
						<li class="sub"><a href="product.php">Product</a></li>
						<li class="sub"><a href="contact.php">Contact</a></li>
						<li class="sub"><a href="register.php">Register</a></li>
						<li class="sub"><a href="logout.php">Logout</a></li>
					</ul>
				</div>

				<div>Copyright © 2048 La Min</div>
		</div>
	</body>
</body>
</html>