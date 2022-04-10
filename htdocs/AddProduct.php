<?php
	$brand =isset($_POST['txtBrand']) ? $_POST['txtBrand'] : "";
	$des = isset($_POST['txtPrice']) ? $_POST['txtPrice'] : "";
	$price = isset($_POST['txtDescription']) ? $_POST['txtDescription'] : "";
	
	echo "".$brand;
	
	//$img = $_POST['adpass'];
	//$category = $_POST['adpass'];
	//$gender = $_POST['adpass'];
	/*$con = mysqli_connect("localhost","root","","Wedding_DB");
	$result=mysqli_query($con,"select Email from User where Email='$mail' ");
	
	while($row=mysqli_fetch_array($result))
	{
		$a=$row[0];
	}
		
	if($a==$mail)
	{
		echo "<br><center><label><b>User already registered</b></label></center>";
	}
	else{
		setcookie("UserName",$name, time() + (86400 * 30), "/");
		setcookie("UserEmail",$mail, time() + (86400 * 30), "/");
		setcookie("UserMobNo",$mob, time() + (86400 * 30), "/");
		mysqli_query($con,"insert into User values ('$name','$mob','$mail','$pass')");
		header("Location:User_login.php");
	}*/
?>