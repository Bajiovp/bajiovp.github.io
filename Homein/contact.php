<?php
if(isset($_POST['Send']))
{
//echo "clicked";
  $Name = $_POST['Name'];
  $Email = $_POST['Email'];
 $Subject = $_POST['Subject'];
  $Message = $_POST['Message'];
  $to = 'vpbajio@gmail.com';
  $header = "from: $Name<$Email>";
  $message = "Name: $Name \n\n Email:$Email \n\n Subject:$Subject \n\n Message:$Message";
  if(mail($to,$Subject,$message,$header))
  {
  echo "mail sent successfully";
  }
  else
  {
  echo "Try again****";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Homein</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'><!--//fonts-->
<!-- start menu -->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="js/simpleCart.min.js"> </script>
</head>
<body>
<!--header-->
<div class="header">
	<div class="header-top">
		<div class="container">
			<div class="social">
				<ul>
					<li><a href="https://www.facebook.com"><i class="facebok"> </i></a></li>
					<li><a href="https://twitter.com/"><i class="twiter"> </i></a></li>
					<li><a href="https://www.instagram.com/"><i class="inst"> </i></a></li>
					<li><a href="https://plus.google.com/"><i class="goog"> </i></a></li>
						<div class="clearfix"></div>	
				</ul>
			</div>
			<div class="header-left">
			
				<div class="search-box">
					<div id="sb-search" class="sb-search">
						<form action="#" method="post">
							<input class="sb-search-input" placeholder="Enter your search term..." type="search"  id="search">
							<input class="sb-search-submit" type="submit" value="">
							<span class="sb-icon-search"> </span>
						</form>
					</div>
				</div>
			
<!-- search-scripts -->
					<script src="js/classie.js"></script>
					<script src="js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
					<!-- //search-scripts -->

				<div class="ca-r">
					<div class="cart box_1">
						<a href="checkout.html">
						<h3> <div class="total">
							<span class="simpleCart_total"></span> </div>
							<img src="images/cart.png" alt=""/></h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

					</div>
				</div>
					<div class="clearfix"> </div>
			</div>
				
		</div>
		</div>
		<div class="container">
			<div class="head-top">
				<div class="logo">
					<h1><a href="index.html">Homein</a></h1>
				</div>
		  <div class=" h_menu4">
				<ul class="memenu skyblue">
					  
				          <li><a class="color1" href="Furniture.html">Furniture</a>
				      	 <li><a class="color4" href="Electronics.html">Electronics</a></li>
                         <li><a class="color4" href="Clothes.html">Clothes</a></li>
				    <li><a class="color4" href="Grocery.html">Grocery</a></li>
                    <li><a class="color4" href="Crockery.html">Crockery</a></li>
				<li><a class="color4" href="login.html">Login</a></li>	
			</div>
				
				<div class="clearfix"> </div>
		</div>
		</div>
	</div>
	<!-- grow -->
	<div class="grow">
		<div class="container">
			<h2>Contact</h2>
		</div>
	</div>
	<!-- grow -->
<!--content-->
<div class="contact">
			
			<div class="container">
			<div class="contact-form">
				
				<div class="col-md-8 contact-grid">
					<form action="#" method="post">
						<input type="text" value="Name" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Name';}">
					
						<input type="text" value="Email" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Email';}">
						<input type="text" value="Subject" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Subject';}">
						
						<textarea cols="77" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
						<div class="send">
							<input type="submit" value="Send" name="Send">
						</div>
					</form>
				</div>
				<div class="col-md-4 contact-in">

						<div class="address-more">
						<h4>Address</h4>
							<p>Homein</p>
							<p>15/43, Bommanahaali, Bangalore</p>
							<p>563 256,  </p>
						</div>
						<div class="address-more">
						<h4>Address1</h4>
							<p>Tel:9031520486</p>
							<p>Fax:190-4509-494</p>
							<p>Email:<a href="mailto:vpbajio@gmail.com"> vpbajio@gmail.com</a></p>
						</div>
					
				</div>
				<div class="clearfix"> </div>
			
		</div>
		
	</div>
<!--//content-->
<div class="footer">
				<div class="container">
                <div class="zoo">
			<div class="footer-top-at w3">
		
			
				<div class="col-md-4 amet-sed w3ls">
					<h4>CATEGORIES</h4>
				<ul class="nav-bottom">
						<li><a href="Grocery.html">Grocery</a></li>
						<li><a href="Furniture.html">Furniture</a></li>
						<li><a href="Electronics.html">Electronics</a></li>
						<li><a href="Clothes.html">Clothes</a></li>
						<li><a href="Crockery.html">Crockery</a></li>	
					</ul>
					
				</div>
				
				<div class="col-md-3 amet-sed agileits-w3layouts">
				<h4>CONTACT US</h4>
					<p>Contact me here</p>
					<p>vpbajio@gmail.com</p>
					<p>office :  +91 9031520486</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-class w3-agile">
		<p>© 2016 Homein . All Rights Reserved | </p>
		</div>
        </div>
		</div>
</body>
</html>
			