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
						$sel=mysql_query("select * from item ");
						echo"<form method='post'><table border='0' align='center'><tr>";
   $n=0;
    while($arr=mysql_fetch_array($sel))
   {
   $i=$arr['img'];
   
    if($n%3==0)
	{
	echo "<tr>";
	}
   echo "
   <td height='280' width='240' align='center'><img src='admin/image/$i' height='200' width='200'><br/>
 
 <b>product name:</b>".$arr['prod_no'].
   "<br><b>Price:</b>&nbsp;".$arr['price'].
  "<br><a href='login.php?img=$i'><b>Buy</b></a>
   
   </td>";
  
  $n++;

   }
   	  echo "</tr></table>
       </form>";
	?>

			<div class="clear"></div>
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