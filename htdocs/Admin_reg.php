<?php
 if((isset($_POST['submit']))&&($_POST['submit'] == "submit"))
 {
	$name = $_POST['adname'];
	$mob = $_POST['admob'];
	$mail = $_POST['admail'];
	$pass = $_POST['adpass'];
	$con = mysqli_connect("localhost","root","","Wedding_DB");
	$result=mysqli_query($con,"select Email from Admin where Email='$mail' ");
	
	while($row=mysqli_fetch_array($result))
	{
		$a=$row[0];
	}
		
	if($a==$mail)
	{
		echo "<br><center><label><b>User already registered</b></label></center>";
	}
	else{
		mysqli_query($con,"insert into admin values ('$name','$mob','$mail','$pass')");
		header("Location:Admin_login.php");
	}
 }
?>
<!DOCTYPE html>
  <html>
  <head>
  <title>Welcome To Registration Form</title>
  <style>
  /* body css for whole page */
    body
    {
	    margin:0px;
	
	    background-color: #1d243d;
	    color:#f9fcf5;
	    font-family:Arial, Helvetica, sans-serif;
    }
    .image{
	/*background-image:url(http://localhost/The_WEDDING_Wardrobe/Images/blur.jpg);*/
	background-repeat:no-repeat;
	width:100%;
	background-size:cover;
	}
    #main{width:600px; height:auto; overflow:hidden; padding-bottom:20px; margin-left:auto; margin-right:auto; 
    border-radius:5px; padding-left:10px; margin-top:100px; border-top:3px double #f1f1f1; 
    border-bottom:3px double #f1f1f1; padding-top:20px;
    }
    
    #main table{font-family:"Comic Sans MS", cursive;}
    /* css code for textbox */
    #main .tb{height:28px; width:230px; border:1px solid #f26724; color:#fd7838; font-weight:bold; border-left:5px solid #f7f7f7; opacity:0.9;}
    
    #main .tb:focus{height:28px; border:1px solid #f26724; outline:none; border-left:5px solid #f7f7f7;}

    /* css code for button*/
    #main .btn{width:150px; height:32px; outline:none;  color:#f7f7f7; font-weight:bold; border:0px solid #f26724; 
    text-shadow: 0px 0.5px 0.5px #fff; border-radius: 2px; font-weight: 600; color: #f26724; letter-spacing: 1px; 
    font-size:14px; background-color:#f1f1f1; -webkit-transition: 1s; -moz-transition: 1s; transition: 1s;}
  
    #main .btn:hover{background-color:#f26724; outline:none;  border-radius: 2px; color:#f1f1f1; border:1px solid #f1f1f1;
    -webkit-transition: 1s; -moz-transition: 1s; transition: 1s; }
	</style>
	<script>
	function registration()
	{
		var name= document.getElementById("t1").value;
		var email= document.getElementById("t2").value;
		var uname= document.getElementById("t3").value;
		var pwd= document.getElementById("t4").value;			
		var cpwd= document.getElementById("t5").value;
		
        //email id expression code
		var pwd_expression = /^(?=.?[A-Z])(?=.?[a-z])(?=.?[0-9])(?=.?[#?!@$%^&*-])/;
		var letters = /^[A-Za-z]+$/;
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

		if(name=='')
		{
			alert('Please enter your name');
		}
		else if(!letters.test(name))
		{
			alert('Name field required only alphabet characters');
		}
		else if(email=='')
		{
			alert('Please enter your user email id');
		}
		else if (!filter.test(email))
		{
			alert('Invalid email');
		}
		else if(uname=='')
		{
			alert('Please enter the user name.');
		}
		else if(pwd=='')
		{
			alert('Please enter Password');
		}
		else if(cpwd=='')
		{
			alert('Enter Confirm Password');
		}
		else if(pwd != cpwd)
		{
			alert ('Password not Matched');
		}
		else if(document.getElementById("t5").value.length < 4)
		{
			alert ('Password length is 4');
		}
		else if(document.getElementById("t5").value.length > 4)
		{
			alert ('Password length is 4');
		}
		else if(document.getElementById("t3").value.length > 10)
		{
			alert('Mobile number length is 10');
		}
		else if(document.getElementById("t3").value.length < 10)
		{
			alert('Mobile number length is 10');
		}
		else
		{				                            
               //alert('Thank You for Login & You are Redirecting to Campuslife Website');
			   // Redirecting to other page or webste code. 
			   //window.location = "Admin_login.php"; 
		}
	}
	function clearFunc()
	{
		document.getElementById("t1").value="";
		document.getElementById("t2").value="";
		document.getElementById("t3").value="";
		document.getElementById("t4").value="";
		document.getElementById("t5").value="";
	}
	</script>
  </head>

	<body class="image">
	<form name="Admin_reg" method="post" action="Admin_reg.php">
	<!-- Main div code -->
	<div id="main">
	<div class="h-tag">
	<h2>Create Your Account</h2>
	</div>
	<!-- create account div -->
	<div class="login">
	<table cellspacing="2" align="center" cellpadding="8" border="0">
	<tr>
	<td align="right">Enter Name :</td>
	<td><input type="text" placeholder="Enter user here" id="t1" class="tb" name="adname"/></td>
	</tr>
	<tr>
	<td align="right">Enter Email ID :</td>
	<td><input type="text" placeholder="Enter Email ID here" id="t2" class="tb" name="admail"/></td>
	</tr>
	<tr>
	<td align="right">Enter Mobile Number :</td>
	<td><input type="text" placeholder="Enter Mobile Number here" id="t3" class="tb" name="admob"/></td>
	</tr>
	<tr>
	<td align="right">Enter Password :</td>
	<td><input type="password" placeholder="Enter Password here" id="t4" class="tb" name="adpass"/></td>
	</tr>
	<tr>
	<td align="right">Enter Confirm Password :</td>
	<td><input type="password" placeholder="Re-Enter Password here" id="t5" class="tb" /></td>
	</tr>
	<tr>
	<td></td>
	<td>
	<input type="reset" value="Clear Form" onclick="clearFunc()" id="res" class="btn" />
	<input type="submit" value="submit" class="btn" onclick="registration()" name="submit" /></td>
	</tr>
	</table>
	</div>
	<!-- create account box ending here.. -->
	</div>
	<!-- Main div ending here... -->
	</form>
	</body>
	</html>