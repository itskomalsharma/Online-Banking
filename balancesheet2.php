<?php
session_start();
	include'menu.php';
	
	$a=mysqli_connect('localhost','root','','bank');
	$b=mysqli_query($a,"select * from abc WHERE accountno='".$_SESSION['user_id']."'");
	$c=mysqli_fetch_assoc($b);
?>
<table class="table">
	<th>ACCOUNT NO</th>
	<th>USERNAME</th>
	<th>AMOUNT</th>
	<th>ADDRESS</th>
	<th>PHONE</th>
	<tr>
		<td><?php echo $c['accountno'];?></td>
		<td><?php echo $c['username'];?></td>
		<td>Rs.<?php echo $c['amount'];?></td>
		<td><?php echo $c['address'];?></td>
		<td>+91-<?php echo $c['phone'];?></td>
	</tr>
</table>
