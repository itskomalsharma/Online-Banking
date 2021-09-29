<?php
	$alert=null;
	include 'menu.php';
	$a=mysqli_connect('localhost','root','','bank');
if(isset($_POST['submit']))
{
	//mysqli_query($a,"UPDATE usersignup SET amount=amount-'".$_POST['amount']."' WHERE ID='".$_SESSION['user_id']."'");
	//mysqli_query($a,"UPDATE usersignup SET amount=amount+'".$_POST['amount']."' WHERE email='".$_POST['email']."'");
	$b=mysqli_query($a,"UPDATE abc SET amount=amount-".$_POST['amount']." WHERE accountno='".$_POST['accountno']."'");
	mysqli_query($a,"UPDATE abc SET amount=amount+".$_POST['amount']." WHERE accountno='".$_POST['targetaccountno']."'");
	//mysqli_query($a,"INSERT INTO transaction (`to_user`,`from_user`,`amount`,`date`) VALUES ('".$_POST['email']."','".$_SESSION['user_id']."','".$_POST['amount']."','".date("y-m-d")."')");
	if($b)
	{
		$alert='transaction succesed';
	header('Location: '.$_SERVER['PHP_SELF']);
	}
	else
	{
		$alert='please check your username and password and target account no';
	}
}
?>
<head>
	<link rel="stylesheet"href="../bootstrap.min.css" type="text/css">
</head>
<br>
<center><h1 style="color:black;font-family:Adobe Garamond Pro Bold;">TRANSFER FORM</h1>
<br><p style="color:red;"><?php echo $alert;?></p></center>
<div class="card"style="background:;width:78%;height:90%;margin-left:150px;">
<br><form action="" method="post" style="width:%;margin-left:30px;margin-right:30px;">
		<label style="color:black;">Account No.</label>
		<input class="form-control"type="number" name="accountno" placeholder="Enter Accountno" required>
		<br><label style="color:black;">UserName</label>
		<input class="form-control"type="email" name="email" placeholder="Enter UserName" required>
		<br><label style="color:black;">Password</label>
		<input class="form-control"type="password" name="password" placeholder="Enter Password" required>
		<br><label style="color:black;">Target Account No.</label>
		<input class="form-control"type="number" name="targetaccountno" placeholder="Enter Target Accountno" required>
		<br><label style="color:black;">Amount</label>
		<input class="form-control"type="number" name="amount" placeholder="Enter Amount" required>
		<br><input class="btn btn-primary btn-block"type="submit" name="submit" value="Submit"style="color:white;">
</form>
</div>