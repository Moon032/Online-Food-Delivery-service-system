<?php
error_reporting(1);
session_start();
$i=$_REQUEST['img'];
$_SESSION['sid']=$_POST['id'];
include("connection.php");
$i=$_REQUEST['img'];
if($_POST['ord'])
{ 
$prodno=$_POST['prodno'];
$price=$_POST['price'];
$name=$_POST['nam'];
$phone=$_POST['pho'];
$add=$_POST['add'];
$ordno=ord.rand(100,500);
if(mysql_query("insert into orders(productno,price,name,address,order_no) values('$prodno','$price','$name','$add','$ordno')"))
{
//echo "<script>location.href='ordersent.php?prod'</script>";
header("location:ordersent.php?order_no=$ordno");  }
else {$error= "user already exists";}}

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Food Delivery Service - Order</title>
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
	
    	<div id="tooplate_content" class="left">
            <div id="comment_form">
            <h3>Order form</h3>
        <?php
			include("connection.php");
			$sel=mysql_query("select * from item  where img='$i' ");
			$mat=mysql_fetch_array($sel);
			
			
			?>
            <form  method="post">
				
                Product No<input type="text" name="prodno" id="prodno" value="<?php echo $mat['prod_no'];?>" /><br><br>
                price<input type="text" name="price" id="price" value="<?php echo $mat['price'];?>" /><br><br>
				Name<input type="text" name="nam" id="nam" /><br><br>
				Phone<input type="text" name="pho" id="php" /><br><br>
				Address<textarea id="add" name="add" rows="0" cols="0" class="required"></textarea><br><br>
                <input type="submit" name="ord" id="ord" value="sent order" class="submit_button" />
				 <input type="submit" name="Cancel" value="Cancel" class="submit_button" />
				
            </form>
            
        
            </div>
        </div> <!-- END of content -->
    </div>
        
        <div class="clear"></div>
		
    </div>
</div>

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
</html>

