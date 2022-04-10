<?php
	$mail = $_POST['email'];
	$pass = $_POST['password'];

	$con = mysqli_connect("localhost","root","","Wedding_DB");
	
	$result=mysqli_query($con,"select * from Admin where Email='$mail' ");
	
	while($row=mysqli_fetch_array($result))
	{
		$a=$row[2];
		$b=$row[3];
		setcookie("AdminName",$row[0], time() + (86400 * 30), "/");
		setcookie("AdminEmail",$row[2], time() + (86400 * 30), "/");
		setcookie("AdminMobNo",$row[1], time() + (86400 * 30), "/");
	}
		
	if($a==$mail)
	{
		if($b==$pass)
		{
			header("Location:Admin_Dashboard.php");
		}
		else{
			header("Location:Admin_login_Error.html");
		}
	}
	else{header("Location:Admin_login_Error.html");}
?>