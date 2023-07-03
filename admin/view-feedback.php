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
<title>Wood Stock - Gallery</title>
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
    	<h2 align="center"> View Feedback Message</h2>
       <table  style="border-color:#000000;border-style: solid;" width="1000px" align="left" >
					
					<tr><th width="100px" height="50px">ID:</th>					
						<th width="100px" height="50px">Name:</th>
						<th width="100px" height="50px">Email:</th>
						<th width="100px" height="50px">Phone:</th>	
						<th width="100px" height="50px">Message:</th>						
					 </tr>	
					 <?php
					 error_reporting(1);
					 include("connection.php");
						$sel=mysql_query("select * from content ");
						while($row=mysql_fetch_array($sel))
							{		
									$id=$row['con_id'];					
									$name=$row['name'];
									$email=$row['email'];
									$phone=$row['phone'];
									$mesg=$row['mesg'];
									
						?>
					 <tr>
						
						<td width="100px" height="50px"><?php echo $id; ?></td>
						<td width="100px" height="50px"><?php echo $name; ?></td>
						<td width="100px" height="50px"><?php echo $email; ?></td>
						<td width="100px" height="50px"><?php echo $phone; ?></td>
						<td width="100px" height="50px"><?php echo $mesg; ?></td>
						
						
												
					  </tr>			
					<?php				  
							}	
					?>
					</table>
        
        

        <div class="clear"></div>
    </div>
    <div style="display:none;" class="nav_up" id="nav_up"></div>
</div> <!-- END of tooplate_wrapper -->
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