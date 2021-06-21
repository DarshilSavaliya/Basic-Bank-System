<!DOCTYPE html>
<html>
<head>
<title>ABOUT US</title>
<link rel="icon" href="images/ic.png" type="image/icon type">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,700" rel="stylesheet">
</head>
<body>

<!-- HEADER =============================-->
<header class="item header margin-top-0">
<div class="wrapper">
	<nav role="navigation" class="navbar navbar-white navbar-embossed navbar-lg navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle" type="button">
			<i class="fa fa-bars"></i>
			<span class="sr-only">Toggle navigation</span>
			</button>
			<a href="index.html" class="navbar-brand brand"> TSF Bank </a>
		</div>
		<div id="navbar-collapse-02" class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="propClone"><a href="index.html">Home</a></li>
				<li class="propClone"><a href="customer.php">Customer details</a></li>
				<li class="propClone"><a href="transactionDetails.php">Transaction History</a></li>
				<li class="propClone"><a href="checkout.php">About</a></li>
			</ul>
		</div>
	</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="text-pageheader">
					<div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.0s">
						 ABOUT US
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</header>

<!-- CONTENT =============================-->
<section class="item content">
	<div class="container toparea">
	<div class="underlined-title">
		<div class="editContent">

			<p style="text-align:center;"><img src="images/darshil.png" alt="alternatetext" ></p>
			<h1 class="text-center latestitems">DARSHIL SAVALIYA</h1>
			<br>
			<h2 class="text-center latestitems">CEO</h2>
		</div>
		<div class="wow-hr type_short">
			<span class="wow-hr-h">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			</span>
		</div>
	</div>
<div class="row">
	<div class="col-lg-3 ">
		<img src="images/about1.png" alt="" style="margin-left:30px;">
		<h3 style="text-align:center;">Internet Banking</h3>
		<p  style="text-align:center;"> Explore the power of simpler and smarter banking. Bank online with over 300+ services</p>
	</div>
	<div class="col-lg-3 ">
		<img src="images/about2.png" alt="" style="margin-left:30px;" >
		<h3 style="text-align:center;">Mobile Banking</h3>
		<p style="text-align:center;"> Bank on the go with our Mobile Banking services. Download app or use SMS</p>
	</div>
	<div class="col-lg-3 ">
		<img src="images/about3.png" alt="" style="margin-left:30px;" >
		<h3 style="text-align:center;">Pockets by TSF Bank</h3>
		<p style="text-align:center;"> VISA powered Universal payment wallet. Download today</p>
	</div>
	<div class="col-lg-3 ">
		<img src="images/about4.png" alt="" style="margin-left:30px;" >
		<h3 style="text-align:center;">Find ATM/Branch </h3>
		<p style="text-align:center;"> Bank 24/7 through a widespread network of over 5,275 branches and 14,146 ATMs</p>
	</div>
</div>

</section>


<!-- FOOTER =============================-->
<div class="footer text-center">
	<div class="container">
		<div class="row">
			<p class="footernote">
				 THANK YOU FOR CHOOSING US
			</p>

			<p>
				 &copy; 2021 Darshil Savaliya<br/>

			</p>
		</div>
	</div>
</div>

<!-- SCRIPTS =============================-->
<script src="js/jquery-.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/anim.js"></script>
<script>
//----HOVER CAPTION---//
jQuery(document).ready(function ($) {
	$('.fadeshop').hover(
		function(){
			$(this).find('.captionshop').fadeIn(150);
		},
		function(){
			$(this).find('.captionshop').fadeOut(150);
		}
	);
});
</script>

</body>
</html>
