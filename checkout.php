<!DOCTYPE>
<?php
//include("functions/functions.php");

session_start();

include_once "functions.php";


?>

<html>
 <head>
 	<meta charset="UTF-8">
	  <title>Sample document</title>
	  <link rel="stylesheet" href="css/style.css">
	  <link rel = "stylesheet" href = "css/bootstrap.min.css">
	  <link rel="stylesheet" href="css/brown.css">
	  <link rel="stylesheet" href="css/loginForm.css">
	  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </head>
  <body background = "image/bg3.jpg">
  	<div class = "container">
  		<div class = "row">
  			<div class = "col-md-5">

  			</div>
  			<div class = "col-md-7">
  				<img src = "image/heading2.png">
  			</div>
  		</div>
		<div class = "row">
			<div class = "col-lg-12">
				<hr>
			</div>
		</div>
  		<div class = "row" style "display:flex;">
  			<div class = "col-md-3">
  			</div>
  			<div class = "col-md-9">
	  			<div class = "button"><a href="index.php">Home</a></div>
	  			<div class = "button"><a href="SignIn.html">Sign In</div>
	  			<div class = "button"><a href="SignUp.html">Sign Up</div>
	  			<div class = "button"><a href="index.php">About Us</div>
	  			<div class = "button"><a href="index.php">Contact Us</div>
  			</div>
  		</div>

  		<div class = "row">
			<div class = "col-lg-12">
				<hr>
			</div>
		</div>

		<div class = "row">
			<div class = "col-md-12">
				<div id='brown'>
					<ul>

						 <?php
                        include_once "functions/functions.php";
                         $db->getCats(); ?>

					</ul>
				</div>
			</div>
		</div>

		<?php
           include_once "functions/functions.php";
           $db->cart();
        ?>

		<div class = "row">
			<div class = "col-md-12">
				<div id = "shopping_cart">
					<span style="float:right; font-size: 15px; line-height: 40px;padding: 5px;  ">
						Shopping Cart- Total Items: <?php
                       include_once "functions/functions.php";
                        $db->total_items(); ?> Total Price: <?php
                       include_once "functions/functions.php";
                        $db->total_price(); ?>
						<a href = "cart.php" style = "color: #ffcccc;font-family: Courier New;font-size: 18px;;"><b>Go to Cart</b></a>
					</span>
				</div>
			</div>
		</div>

        <div class = "content_wrapper">
			<div id = "content_area">
				<div id = "products_box">

					<form action = "" method = "post" enctype = "multipart/form-data">
						<table align = "center" width = "700" bgcolor="skyblue">


							<?php
                                session_start();
                                if(!isset($_SESSION['customer_email']))
                                {
                                    include("customer_login.php");
                                }
                                else {
                                    include("payment.php");
                                }
							?>
	            </div>
	        </div>
	    </div>


</body>
</html>
