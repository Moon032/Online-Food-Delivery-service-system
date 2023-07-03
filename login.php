<?php
session_start();
error_reporting(1);
$i=$_REQUEST['img'];
include("connection.php");
if(isset($_POST['log']))
{ if($_POST['id']=="" || $_POST['pwd']=="")
{ $err="fill your id and password first"; }
else 
{$d=mysql_query("select * from register where email='{$_POST['id']}' ");
$row=mysql_fetch_object($d);
$fid=$row->email;
$fpass=$row->password; 
if($fid==$_POST['id'] && $fpass==$_POST['pwd'])
{$_SESSION['sid']=$_POST['id'];
//echo"<script>location:href='order.php?img=$i'</script>";
header("location:order.php?img=$i"); 
}
else {$err=" your password is not"; }}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Food Delivery - login</title>
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
    	
       <div id="contact_form" class="col_2">
                <h1>User Log In</h1>
                <form method="post" name="contact" action="#">
                      <div class="col_4 no_margin_right">
                        <label for="phone">User Email:</label>
                        <input type="email" id="id" name="id" class="required input_field" />
                    </div>
                    <div class="col_4 no_margin_right">
                        <label for="email">Password:</label>
                        <input type="password" id="pwd" name="pwd" class="validate-email required input_field" />
                    </div>
              
                     
                    <div class="clear"></div>
                    
                     <input type="submit" name="log"  value="Log in" class="submit_button" />
                </form>
				<h2><?php echo $err;?></h2>
            </div>    	
       
        
        

        <div class="clear"></div>
    </div>
    <div style="display:none;" class="nav_up" id="nav_up"></div>
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