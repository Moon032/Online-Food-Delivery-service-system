<?php
	error_reporting(1);
	
	include("connection.php");
	
	if($_REQUEST['log']=='out')
	{
		session_destroy();
		header("location:index.php");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Food Delivery Service - Gallery</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
		<div id="header">
			<h1 class="cap">Online Food Delivery</h1>
			<ul class="menu1">
				<li class="sub"><a href="home.php">Home</a></li>
				<li class="sub"><a href="product.php">Product</a></li>
				<li class="sub"><a href="contact.php">Contact</a></li>
				<li class="sub"><a href="register.php">Register</a></li>
				<li class="sub"><a href="logout.php">Logout</a></li>
			</ul>
		</div><!-- header -->
    <div id="content">
    	
      <h2><span>Thank you for shopping with us</span></h2>
          <p><font color="blue"><i>Order sent successfully!</i></font></p>
		  <p>Your order no. is <?php echo "<font size='4' color='blue'>".$_REQUEST['order_no']."</font>";?></p>
		  <p>Thank you. Please come again.</p>
		  <br><br>
		  <p><a href="?log=out">Log out</a></p> 
        
        

        <div class="clear"></div>
    </div>
    <div style="display:none;" class="nav_up" id="nav_up"></div>
</div> <!-- END of tooplate_wrapper -->

<div id="footer">
				<div>
					<ul class="menu1">
						<li class="sub"><a href="index.php">Home</a></li>
						<li class="sub"><a href="product.php">Product</a></li>
						<li class="sub"><a href="contact.php">Contact</a></li>
						<li class="sub"><a href="register.php">Register</a></li><br>
						<li class="sub"><a href="logout.php">Logout</a></li>
					</ul>
				</div>
				<div>Copyright © 2048 La Min</div>
		</div>
</body>
</html>