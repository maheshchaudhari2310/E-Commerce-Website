<?php
 if((isset($_POST['submit']))&&($_POST['submit'] == "submit"))
 {
	$brand =$_POST['txtBrand'];
	$des = $_POST['txtDescription'];
	$price = $_POST['txtPrice'];
	
	echo "".$brand;
	echo "PHP Function Called";
 }
?>
<!DOCTYPE html>
<html lang="en">
 <head>

  <title>Add Products</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link href="Untitled2.css" rel="stylesheet">
	<link href="index.css" rel="stylesheet">
  <link rel="stylesheet" href="Style.css">
  <link href="Admin_Add_Products2.css" rel="stylesheet">
	<link href="Admin_Add_Products.css" rel="stylesheet">
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
	?>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="Admin_Dashboard.php">Dashboard<span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="Admin_Orders.php">Orders<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Admin_Clients.php">Clients</a>
      </li>
	  <li class="nav-item active">
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
<div id="wb_Form1"  style="position:absolute;left:500px;top:130px;width:557px;height:489px;z-index:8;">
<form name="Admin_Add Products" method="post" action="Admin_Add_Products.php">
<input type="text" id="Editbox1" style="position:absolute;left:159px;top:52px;width:229px;height:30px;z-index:0;" name="txtBrand" value="" spellcheck="false" placeholder="Brand ">
<input type="text" id="Editbox2" style="position:absolute;left:159px;top:90px;width:229px;height:78px;z-index:1;" name="txtDescription" value="" spellcheck="false" placeholder="Description">
<input type="text" id="Editbox3" style="position:absolute;left:159px;top:180px;width:229px;height:30px;z-index:2;" name="txtPrice" value="" spellcheck="false" placeholder="Price">
<div id="FileUpload1" class="input-group" style="position:absolute;left:159px;top:225px;width:230px;height:26px;z-index:3;">
<input class="form-control" type="text" readonly="">
<label class="input-group-btn">
<input type="file" name="uploadFile" id="FileUpload1-file" style="display:none;"><span class="btn">Browse...</span>
</label>
</div>
<select name="cmbCategory" size="1" id="Combobox1" style="position:absolute;left:159px;top:265px;width:230px;height:28px;z-index:4;">
<option>SELECT CATEGORY</option>
<option value="Engagement Outfit">Engagement Outfit</option>
<option value="Mehendi Outfit">Mehendi Outfit</option>
<option value="Haldi Outfit">Haldi Outfit</option>
<option value="Wedding Outfit">Wedding Outfit</option>
<option value="Reception Outfit">Reception Outfit</option>
</select>
<select name="cmbGender" size="1" id="Combobox2" style="position:absolute;left:159px;top:305px;width:230px;height:28px;z-index:5;">
<option>SELECT GENDER</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
<input type="submit" id="Button1" name="submit" value="Add Product" ">
</form>
</div>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> 
 </body>
</html>
<script src="jquery-1.12.4.min.js"></script>
<script>
function ValidateForm1()
{
   var regexp;
   var Editbox1 = document.getElementById('Editbox1');
   if (!(Editbox1.disabled || Editbox1.style.display === 'none' || Editbox1.style.visibility === 'hidden'))
   {
      if (Editbox1.value == "")
      {
         alert("Enter Brand");
         Editbox1.focus();
         return false;
      }
   }
   var Editbox2 = document.getElementById('Editbox2');
   if (!(Editbox2.disabled || Editbox2.style.display === 'none' || Editbox2.style.visibility === 'hidden'))
   {
      if (Editbox2.value == "")
      {
         alert("Enter Description");
         Editbox2.focus();
         return false;
      }
   }
   var Editbox3 = document.getElementById('Editbox3');
   if (!(Editbox3.disabled || Editbox3.style.display === 'none' || Editbox3.style.visibility === 'hidden'))
   {
      if (Editbox3.value == "")
      {
         alert("Enter Price");
         Editbox3.focus();
         return false;
      }
   }
   var FileUpload1 = document.getElementById('FileUpload1');
   var FileUpload1_file = document.getElementById('FileUpload1-file');
   if (!(FileUpload1.disabled ||
         FileUpload1.style.display === 'none' ||
         FileUpload1.style.visibility === 'hidden'))
   {
      if (FileUpload1_file.value == "")
      {
         alert("Please select Product Image");
         return false;
      }
   }
   var Combobox1 = document.getElementById('Combobox1');
   if (!(Combobox1.disabled ||
         Combobox1.style.display === 'none' ||
         Combobox1.style.visibility === 'hidden'))
   {
      if (Combobox1.selectedIndex < 0)
      {
         alert("Select Category");
         Combobox1.focus();
         return false;
      }
   }
   var Combobox2 = document.getElementById('Combobox2');
   if (!(Combobox2.disabled ||
         Combobox2.style.display === 'none' ||
         Combobox2.style.visibility === 'hidden'))
   {
      if (Combobox2.selectedIndex < 0)
      {
         alert("Select Gender");
         Combobox2.focus();
         return false;
      }
   }
   return true;
}
</script>
<script>
$(document).ready(function()
{
   $("#FileUpload1 :file").on('change', function()
   {
      var input = $(this).parents('.input-group').find(':text');
      input.val($(this).val());
   });
});
</script>
