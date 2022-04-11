<!DOCTYPE html>
<html lang="en">
 <head>

  <title>About us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

   <link rel="stylesheet" href="Style.css">
  
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
		if(isset($_COOKIE["UserName"])) {
			echo "<center><label Style='color:white;margin-left:350px'><b>Hello ".$_COOKIE["UserName"]."</b></label></center>";
		} 
	?>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="Home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Bride.php">Bride</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="Groom.php">Groom</a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="About_Us.php">About Us</a>
      </li>
      <?php
		if(!isset($_COOKIE["UserName"])) {
			echo "<li class='nav-item dropdown'>";
			echo "<a class='nav-link dropdown-toggle' href='Login.php' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
			Login /Sign Up</a>";
			echo "<div class='dropdown-menu' aria-labelledby='navbarDropdown'>";
			echo "<a class='dropdown-item' href='User_login.html'>Login</a>";
			echo "<a class='dropdown-item' href='User_reg.php'>Sign Up</a>"; 
			echo "</li>";
		}
		?>
	   <li class="nav-item">
        <a href="Cart.php" span style='font-size:25px;'>&#128722;</span></a>
      </li>
    </ul>
    
  </div>
</nav>

<br>
 <!-- Site footer -->
    <footer class="site-footer" style="background-color:black">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">The WEDDING Wardrobe is an online shopping store that believes that every woman and man should be able to be their own kind of beauty since the word beauty varies from person to person. For some, it is being bold and confident while for some it is about being poised and gracious. We stand for a fact that every person should be able to stay in-vogue regardless of their race, color or size. We strive to provide everyone with a chance to be an EthnoVogue, a concept which we pioneered and stand by it proudly.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Categories</h6>
            <ul class="footer-links">
				<li><a href="http://scanfcode.com/category/c-language/">Engagement</a></li>
				<li><a href="http://scanfcode.com/category/java-programming-language/">Mehendi</a></li>     <li><a href="http://scanfcode.com/category/front-end-development/">Haldi</a></li>
				<li><a href="http://scanfcode.com/category/back-end-development/">Vedik</a></li>
				<li><a href="http://scanfcode.com/category/android/">Wedding</a></li>
				<li><a href="http://scanfcode.com/category/templates/">Reception</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="Home.php">Home</a></li>
              <li><a href="Bride.php">Bride</a></li>
              <li><a href="Groom.php">Groom</a></li>
              <li><a href="About_Us.php">About Us</a></li>
              <li><a href="Login.php">Login</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2022 All Rights Reserved by 
         <a href="#">Mahesh Chaudhari</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> 
 </body>
</html>
