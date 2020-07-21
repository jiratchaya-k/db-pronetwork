<!DOCTYPE html>
<html>
	<head>
		<title>Pro Network Solutions</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/style_login.css">
		<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" >
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	
		<script src="node_modules/jquery/dist/jquery.min.js"></script>
		<script src="node_modules/popper.js/dist/popper.min.js"></script>
		<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	</head>
<style type="text/css">
	html,body{
background-image: url('images/bg-login2.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
}
</style>
<body>
<header>
				<nav class="navbar navbar-expand-lg navbar-light ">
						<div class="container">
										<a class="navbar-brand" href="index.php">
										<img src="images/logo.jpg" width="120" class="d-inline-block align-top" alt="ProNetwork Solutions"></a>
										<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
												<span class="navbar-toggler-icon"></span>
										</button>

										<div class="collapse navbar-collapse" id="navbarSupportedContent">
												<ul class="navbar-nav ml-auto">
													<li class="nav-item" >
														<a class="nav-link" href="index.php"style="color: gray;">Home <span class="sr-only">(current)</span></a>
													</li>
													<li class="nav-item" >
														<a class="nav-link" href="product.php"style="color: gray">Product</a>
													</li>
													<li class="nav-item" >
													<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														Service
													</a>
													<div class="dropdown-menu nav-dropdown" aria-labelledby="navbarDropdown">
														<a class="dropdown-item" href="#">เสนอราคา</a>
														<a class="dropdown-item" href="#">ยืนยันการชำระเงิน</a>
													</div>
													</li>
													<li class="nav-item" >
														<a class="nav-link" href="about_us.php"style="color: gray;">About Us</a>
													</li>
													<li class="nav-item" >
													<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														Account
													</a>
													<div class="dropdown-menu nav-dropdown" aria-labelledby="navbarDropdown">
														<a class="dropdown-item active" href="login.php">Log In</a>
														<a class="dropdown-item" href="register.php">Register</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="#">Log Out</a>
													</div>
													</li>
												</ul>
										</div>
						</div><!-- container -->
				</nav>
		</header>

	<center>
		<section>
			<div class="container">
				<div class="d-flex justify-content-center h-100" style="margin-top: 100px;">
					<div class="card login-card">
						<div class="card-header">
							<h3>Log In</h3>
						</div>
						<div class="card-body">
							<form>
								<div class="input-group form-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-user"></i></span>
									</div>
									<input type="text" class="form-control" placeholder="username">
									
								</div>
								<div class="input-group form-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-key"></i></span>
									</div>
									<input type="password" class="form-control" placeholder="password">
								</div>
								<div class="row align-items-center remember">
									<input type="checkbox">Remember Me
								</div>
								<div class="form-group">
									<input type="submit" value="Login" class="btn login_btn">
								</div>
							</form>
						</div>
						<div class="card-footer">
							<div class="d-flex justify-content-center links">
								Don't have an account?<a href="#">Register</a>
							</div>
							<div class="d-flex justify-content-center" style="margin-bottom: 20px;">
								<a href="#">Forgot your password?</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</center>

</body>
</html>