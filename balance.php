<?php
session_start();
	include 'menu.php';
	
	$a=mysqli_connect('localhost','root','','bank');
	if(isset($_POST['submit']))
	{
		$users_check=mysqli_query($a,"select * from abc where accountno='".$_POST['accountno']."'and username='".$_POST['email']."' and password='".$_POST['password']."'");
		$users_count=mysqli_num_rows($users_check);
		if($users_count==1)
		{
			$users=mysqli_fetch_assoc(mysqli_query($a,"select * from abc where accountno='".$_POST['accountno']."' and username='".$_POST['email']."' and password='".$_POST['password']."'"));
			$_SESSION['user_id']=$users['accountno'];
			header('location:balancesheet2.php');
			
		}
		else
		{
			$alert='please check your username and password';
		}
	}
?>
<head>
	<link rel="stylesheet"href="../bootstrap.min.css" type="text/css">
</head>
<!--<body style="background-image:url('1.jpg'); background-size:cover;">
</body>	-->


<br>
<center><h1 style="color:black;font-family:Adobe Garamond Pro Bold;">BALANCE FORM</h1></center>
<div class="card"style="background:;width:78%;height:60%;margin-left:150px;">
<br><form action="" method="post" style="width:%;margin-left:30px;margin-right:30px;">
		<label style="color:black;">Account No.</label>
		<input class="form-control"type="number" name="accountno" placeholder="Enter Accountno" required>
		<br><label style="color:black;">UserName</label>
		<input class="form-control"type="email" name="email" placeholder="Enter UserName" required>
		<br><label style="color:black;">Password</label>
		<input class="form-control"type="password" name="password" placeholder="Enter Password" required>
		<br><input class="btn btn-primary btn-block"type="submit" name="submit" value="Submit"style="color:white;">
</form>
</div>
