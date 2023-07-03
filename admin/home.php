<?php
session_start();
if($_SESSION['sid']=="")
{
header('location:index.php');
}
else{
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
				<li class="sub"><a href="insert.php">Insert</a></li>
				<li class="sub"><a href="view-product.php">Product</a></li>
				<li class="sub"><a href="view-order.php">Order</a></li>
				<li class="sub"><a href="view-feedback.php">Feedback</a></li>
				<li class="sub"><a href="logout.php">Log out</a></li>
			</ul>
		</div><!-- header -->
		<div id="content">


		<h2><span>Hello ...Welcome  Admin</span></h2>


		</div><!-- content -->

		<div id="footer">
				<div>
					<ul class="menu1">
						<li class="sub"><a href="home.php">Home</a></li>
						<li class="sub"><a href="insert.php">Insert</a></li>
						<li class="sub"><a href="view-product.php">Product</a></li>
						<li class="sub"><a href="view-order.php">Order</a></li>
						<li class="sub"><a href="view-feedback.php">Feedback</a></li>
						<li class="sub"><a href="logout.php">Log Out</a></li>
					</ul>
				</div>

				<div>Copyright © 2048 La Min</div>
			</div>
	<?php }  ?>
</body>
</html>