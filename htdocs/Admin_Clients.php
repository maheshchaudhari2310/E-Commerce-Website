<!DOCTYPE html>
<html lang="en">
 <head>

  <title>Orders</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link href="Admin_Orders2.css" rel="stylesheet">
	<link href="Admin_Orders.css" rel="stylesheet">
  <link rel="stylesheet" href="Style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 </head>
 <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="logo">
  <span style='font-size:25px;'>&#128087;</span>
 </div>
  <a class="navbar-brand" href="Home.php"> &nbsp The WEDDING Wardrobe</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <?php
		if(isset($_COOKIE["AdminName"])) {
			echo "<center><label Style='color:white;margin-left:350px'><b>Hello Admin ".$_COOKIE["AdminName"]."</b></label></center>";
		}
		else
		{
			//header(location:);
		}
	?>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="Admin_Dashboard.php">Dashboard<span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="Admin_Orders.php">Orders<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="Admin_Clients.php">Clients</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="Admin_Add_Products.php">Add Products</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="Admin_View_Products.php">View Products</a>
      </li>
	  <?php
		if(!isset($_COOKIE["AdminName"])) {
			echo "<li class='nav-item dropdown'>";
			echo "<a class='nav-link dropdown-toggle' href='Login.php' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
			Login /Sign Up</a>";
			echo "<div class='dropdown-menu' aria-labelledby='navbarDropdown'>";
			echo "<a class='dropdown-item' href='Admin_login.html'>Login</a>";
			echo "<a class='dropdown-item' href='Admin_reg.php'>Sign Up</a>"; 
			echo "</li>";
		}
		?>
    </ul>
    
  </div>
</nav>
<br><br>

<h5 style='margin-left:220px'>Sr.No</h5>
<h5 style='margin-left:70px'>Name</h5>
<h5 style='margin-left:180px'>Email</h5>
<h5 style='margin-left:180px'>Mobile Number</h5>
<h5 style='margin-left:140px'>Password</h5>

<a href="http://www.wysiwygwebbuilder.com" target="_blank"><img src="images/builtwithwwb14.png" alt="WYSIWYG Web Builder" style="position:absolute;left:441px;top:967px;margin: 0;border-width:0;z-index:250"></a>
<?php
		
	$con = mysqli_connect("localhost","root","","Wedding_DB");
	$result=mysqli_query($con,"select * from User");
	$total=0;
	echo "<table style='position:absolute;left:200px;top:150px;width:1109px;height:66px;z-index:1;' id='Table1'>";
	while($row=mysqli_fetch_array($result))
	{
		$total++;
		echo "<tr>";
		echo "<td class='cell0'><label style='margin-left:30px;color:#000000;font-family:Arial;font-size:13px;line-height:16px;'>".$total."</label></td>";
		echo "<td class='cell1'><label style='margin-left:30px;color:#000000;font-family:Arial;font-size:13px;line-height:16px;'>".$row[0]."</label></td>";
		echo "<td class='cell1'><label style='margin-left:30px;color:#000000;font-family:Arial;font-size:13px;line-height:16px;'>".$row[2]."</label></td>";
		echo "<td class='cell2'>&nbsp;<label style='margin-left:30px'>".$row[1]."</label></td>";
		echo "<td class='cell3'><label style='margin-left:30px;color:#000000;font-family:Arial;font-size:13px;line-height:16px;'>".$row[3]."</label></td>";
		echo "</tr>";
	}
	echo "</table>";
?>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> 

 </body>
</html>
