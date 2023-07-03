<?php
session_start();
if($_SESSION['sid']=="")
{
header('location:index.php');
}
else{
 ?>
<?php
error_reporting(1);
include("connection.php");
$img=$_FILES['img']['name'];
$prono=$_POST['t1'];
$price=$_POST['t2'];
if($_POST['sub'])
{$qry="INSERT INTO item(img,prod_no,price)VALUES('$img','$prono','$price')";
$result=mysql_query($qry) or die ("save items query fail.");
if($result)			
	   {mkdir("image/$i");
			move_uploaded_file($_FILES['img']['tmp_name'],"image/$i".$_FILES['img']['name']);	
  // move_uploaded_file($_FILES['file']['tmp_name'],"itempics/$itemno.jpg");
		
	    $err="<font size='+2'>item inserted successfully</font>";
	
		}
	else
	 {
	   echo "item is not inserted";
	   }
	}  
	mysql_close($con);
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
                <h2>Insert Image</h2>
                
				<form  name="testform" method="post" enctype="multipart/form-data" >
			<table style="border-color:#000000;border-style: solid;" width="600px" align="left">
				
						
				
				 <tr>
						<td height="20px"></td>
				</tr>	
				<tr>
				<td><span class="style3">Image:</span></td>
				<td>
					<input name="img" type="file">
				</td>
				</tr>
				 <tr>
						<td height="20px"></td>
				</tr>			
				
				<tr>
				  <td><span class="style3">product name: </span></td>
				  <td><label>
					<input name="t1" type="text" id="t1">
				  </label></td>
				</tr>
				 <tr>
						<td height="20px"></td>
				</tr>			
				
				<tr>
				  <td><span class="style3">Price:</span></td>
				  <td><label>
					<input name="t2" type="text" id="t2">
				  </label></td>
				</tr>
				 <tr>
						<td height="20px"></td>
				</tr>			
				
				
				
				
				<tr>
				<td  colspan="2" align="center">
					<input name="sub" type="submit" value="Submit">
					
				</td>
				</tr>
				
			</table>
			</form>
				<h2><?php echo $err;?></h2>
    </div>
    <div style="display:none;" class="nav_up" id="nav_up"></div>
</div>
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