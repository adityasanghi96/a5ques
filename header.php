<?php
	include_once'function.php';
	if(isset($_REQUEST['log'])){
		
		login($_REQUEST);
	}

?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs -->
	
	<meta charset="utf-8">
	<title>A5 Questionnaire – Responsive Questions and Answers</title>
	<meta name="description" content="Ask me Responsive Questions and Answers Template">
	<meta name="author" content="a5ques">
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Main Style -->
	<link rel="stylesheet" href="style.css">
	
	<!-- Skins -->
	<link rel="stylesheet" href="css/skins/skins.css">
	
	<!-- Responsive Style -->
	<link rel="stylesheet" href="css/responsive.css">
	
	<!-- Favicons -->
	<link rel="shortcut icon" href="images/favicon.png">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  	<script>
  	    function getValue(id){
  	        var a="ansP_"+id
  	        document.getElementById(a).style.display="block"
  	    }
  	   

  	</script>
  	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-6435807265546649",
        enable_page_level_ads: true
      });
    </script>
</head>
<body>

<div class="loader"><div class="loader_html"></div></div>

<div id="wrap" class="grid_1200">
	<?php
		if($_SESSION['id']==""){
	?>
	<div class="login-panel">
		<section class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="page-content">
						<h2>Login</h2>
						<div class="form-style form-style-3">
							<form method="post">
								<div class="form-inputs clearfix">
									<p class="login-text">
										<input type="text" placeholder="Username" name="uname" required="true">
										<i class="icon-user"></i>
									</p>
									<p class="login-password">
										<input type="password" placeholder="Password" name="pass" required="true">
										<i class="icon-lock"></i>
										
									</p>
								</div>
								<p class="form-submit login-submit">
									<input type="submit" name="log" value="Log in" class="button color small login-submit submit">
								</p>

							</form>
						</div>
					</div><!-- End page-content -->
				</div><!-- End col-md-6 -->
				<div class="col-md-6">
					<div class="page-content Register">
						<h2>Register Now</h2>
						<p>Ask Any question you want to ask</p>
						<a class="button color small signup">Create an account</a>
					</div><!-- End page-content -->
				</div><!-- End col-md-6 -->
			</div>
		</section>
	</div><!-- End login-panel -->
	
	
	<div class="panel-pop" id="signup">
		<h2>Register Now<i class="icon-remove"></i></h2>
		<div class="form-style form-style-3">
			<?php
				if(isset($_REQUEST['signup'])){
					include_once'function.php';
					register($_REQUEST);
				}
			?>
			
			<form method="post">
				<div class="form-inputs clearfix">
					<p>
						<label class="required">Name<span>*</span></label>
						<input type="text" name="name" required>
					</p>
					<p>
						<label class="required">Username<span>*</span></label>
						<input type="text" name="uname" required>
					</p>
					<p>
						<label class="required">Mobile number<span>*</span></label>
						<input type="text" name="mob" pattern="[0-9]{10}" required>
					</p>
					<p>
						<label class="required">E-Mail<span>*</span></label>
						<input type="email" name="email" required>
					</p>
					<p>
						<label class="required">Password<span>*</span></label>
						<input type="password" name="pass" required value="">
					</p>
					<p>
						<label class="required">Confirm Password<span>*</span></label>
						<input type="password" value="" name="cpass" required>
					</p>
				</div>
				<p class="form-submit">
					<input type="submit" value="Signup" name="signup" class="button color small submit">
				</p>
			</form>
		</div>
	</div><!-- End signup -->
	
	<?php } ?>
	<div id="header-top">
		<section class="container clearfix">
			<nav class="header-top-nav">
				<ul>
					<li><a href="contact_us.php"><i class="icon-envelope"></i>Contact</a></li>
					<li><a href="contact_us.php"><i class="icon-headphones"></i>Support</a></li>
					<?php
						if($_SESSION['id']==""){
					?>
					
					<li><a href="login.php" id="login-panel"><i class="icon-user"></i>Login Area</a></li>
					<?php }else{ ?>
					<li><a href="logout.php" id=""><i class="icon-user"></i>Logout</a></li>
					<?php } ?>
				</ul>
			</nav>
	
		</section><!-- End container -->
	</div><!-- End header-top -->
	<header id="header">
		<section class="container clearfix">
			<div class="logo"><a href="index.php"><img alt="" src="images/logo1.png"></a></div>
			<nav class="navigation">
				<ul>
					<li class="current_page_item"><a href="index.php">Home</a>
						
					</li>
					<li class="ask_question"><a href="ask_question.php">Ask Question</a></li>
					
					
					<li><a href="contact_us.php">Contact Us</a></li>
				</ul>
			</nav>
		</section><!-- End container -->
	</header><!-- End header -->
	