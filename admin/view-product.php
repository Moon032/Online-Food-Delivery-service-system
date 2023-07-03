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
	<h2 align="center"> View Product </h2>
    	
       
        <?php
					 error_reporting(1);
					 include("connection.php");
						$sel=mysql_query("select * from item ");
						echo"<form method='post'><table style='border-color:#000000;border-style: solid;' width='800px' align='left' ><tr><td>Image:</td><td>Product No:</td><td>Price:</td></tr>";
   $n=0;
    while($arr=mysql_fetch_array($sel))
   {
   $i=$arr['img'];
   
    if($n%1==0)
	{
	echo "<tr><tr>
	      ";
	}
   echo 
   "<td height='280' width='240' align='center'><img src='image/$i' height='200' width='200'></td>
 <b>
 <td>".$arr['prod_no'].
   "</td><td>".$arr['price'].
  "
   
   </td>";
  
  $n++;

   }
   	  echo "</tr></table>
       </form>";
	?>	
	

        

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