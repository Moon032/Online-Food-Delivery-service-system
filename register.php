<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Food Delivery Service - News</title>
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
            <h3>Register form</h3>
            <?php
error_reporting(1);
include("connection.php");
if($_POST['sub'])
{ 
$name=$_POST['t1'];
$email=$_POST['t2'];
$password=$_POST['t3'];
$phone=$_POST['t4'];
$city=$_POST['t5'];
$town=$_POST['t6'];
if(mysql_query("insert into register(name,email,password,phone,city,township) values('$name','$email','$password','$phone','$city','$town')"))
{
//echo "<script>location.href='reg_success.php?email=$email'</script>"; 
header("location:reg_success.php?name=$name & email=$email");}
else {$error= "user already exists";}}

?>
            <form  method="post">
                Name<input type="text" name="t1" id="t1" class="input_field" /><br><br>
                Email<input type="email" name="t2" id="t2" class="input_field" /><br><br>
				Password<input type="password" name="t3" id="t3" class="input_field" /><br><br>
				Phone<input type="text" name="t4" id="t4" class="input_field" /><br><br>
				City<input type="text" name="t5" id="t5" class="input_field" /><br><br>
				Country<input type="text" name="t6" id="t6" class="input_field" /><br><br>
                <input type="submit" name="sub" id="sub" value="Register" class="submit_button" />
				 <input type="reset" name="Cancel" value="Cancel" class="submit_button" />
				<label><?php echo "<font color='red'>$error</font>";?></label>
            </form>
        </div>
        
        <div class="clear"></div>
		
    </div> <!-- END of tooplate_main -->
    <div style="display:none;" class="nav_up" id="nav_up"></div>
</div> <!-- END of tooplate_wrapper -->

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