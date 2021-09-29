<?PHP 
$alert=null;
include'menu.php';
$a=mysqli_connect('localhost','root','','bank');
if(isset($_POST['submit']))
{
	$b=mysqli_query($a,"insert into abc(`username`,`password`,`re password`,`amount`,`address`,`phone`) values('".$_POST['email']."','".$_POST['password']."','".$_POST['repassword']."','".$_POST['amount']."','".$_POST['address']."','".$_POST['phone']."')");
	
	if($b)
	{
		$alert='Your Accout is Created';
		header('Location: '.$_SERVER['PHP_SELF']);
	}
	else
	{
		$alert='Your Accout is Created';
	}
}

?>
<head>
	<link rel="stylesheet"href="../bootstrap.min.css" type="text/css">
</head>
<!--<body style="background-image:url('1.jpg'); background-size:cover;">
</body>	-->


<br>
<center><h1 style="color:black;font-family:Adobe Garamond Pro Bold;">OPEN ACCOUNT FORM</h1><h5 style="color:red;"><?php echo $alert;?></h5></center>
<div class="card"style="background:;width:78%;margin-left:150px;">
<br><form action="" method="post" style="width:%;margin-left:30px;margin-right:30px;">
		<label style="color:black;">UserName</label>
		<input class="form-control"type="email" name="email" placeholder="Enter UserName" required>
		<br><label style="color:black;">Password</label>
		<input class="form-control"type="password" name="password" placeholder="Enter Password" required>
		<br><label style="color:black;">Re.Password</label>
		<input class="form-control"type="password" name="repassword" placeholder="Enter RePassword" required>
		<br><label style="color:black;">Amount</label>
		<input class="form-control"type="number" name="amount" placeholder="Enter Amount" required>
		<br><label style="color:black;">Address</label>
		<textarea class="form-control"type="text" name="address" placeholder="Enter Address" required></textarea>
		<br><label style="color:black;">Phone No.</label>
		<input class="form-control"type="number" name="phone" placeholder="Enter PhoneNo." required>
		<br><input class="btn btn-primary btn-block"type="submit" name="submit" value="Add Account"style="color:white;">
</form>
</div>




