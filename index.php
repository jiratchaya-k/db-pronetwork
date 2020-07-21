<!DOCTYPE html>
<html>
<head>
	<title>Pro Network Solutions</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">

	<script src="node_modules/jquery/dist/jquery.min.js"></script>
	<script src="node_modules/popper.js/dist/popper.min.js"></script>
	<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</head>

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
														<a class="nav-link active" href="index.php"style="color: gray;">Home <span class="sr-only">(current)</span></a>
													</li>
													<li class="nav-item" >
														<a class="nav-link" href="product.php"style="color: gray">Product</a>
													</li>
													<li class="nav-item" >
														<a class="nav-link" href="#"style="color: gray">Service</a>
													</li>
													<li class="nav-item" >
														<a class="nav-link" href="about_us.php"style="color: gray;">About Us</a>
													</li>
													<li class="nav-item" >
													<a class="nav-link" href="" style="color: gray;" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Log In</a>
													</li>
												</ul>
										</div>
						</div><!-- container -->
				</nav>
		</header>

		<section>
			
		<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
		<div class="col-md-12 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          	<span aria-hidden="true" style="float:right; margin-top:-25px;">&times;</span>
    			</button>
						<div class="row">
							<div class="col-6 col-md-6">
								<a href="#" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-6 col-md-6">
								<a href="#" id="register-form-link">Register</a>
							</div>
						</div>
						<hr>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="https://phpoll.com/login/process" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-12 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="https://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
												</div>
											</div>
										</div>
									</div>
								</form>
								<form id="register-form" action="https://phpoll.com/register/process" method="post" role="form" style="display: none;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-12 col-sm-offset-3q">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
    </div>
  </div>
</div>


		</section>		

	<section id="slide">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="images/slide-1.jpg" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="images/slide-2.jpg" alt="Second slide">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</section>

	<section>
		<center>
			<h3 class="title" style="font-weight: bolder;">Pro Network Solutions</h3>
			<hr style="width:300px;">
			<div class="container">
				<div class="row">
					<div class="col col-12">
						<p>
							ผู้ให้บริการจำหน่าย ออกแบบ ติดตั้ง วางระบบเครือข่าย Network ในภายสำนักงาน บริษัท โรงงาน Hi-Speed Network,<br>
							ระบบ VPN เชื่อมโยงสาขา, ระบบเครือข่ายไร้สาย Wireless Network, ระบบ Internet และยังรับวางระบบ Server
							ภายในบริษัทเพื่องานต่างๆ <br> เช่น File Server, Web Server, Mail Server, Express Server ฯลฯ
							ทั้งบนระบบ Windows Server และ Linux Server <br>พร้อมระบบรักษาความปลอดภัยด้วยระบบ Firewall
							การเก็บ Log ตามพรบ.คอมฯด้วยทีมงานที่มีความรู้ความชำนาญ<br> และประสบการณ์ระดับมืออาชีพ <span style="color: #008fff; font-weight: bold;">ที่สามารถทำให้คุณได้มากกว่าคำว่า "โปร"</span>
						</p>
					</div>
			<div><!-- row -->
		</div><!-- container -->
		</center>
	</section>

	<section>
		<center>
			<h3 class="title" style="font-weight: bolder;">บริการของเรา</h3>
			<hr style="width:300px;">
			<div class="container">
				<div class="row">
					<div class="col col-lg-6 col-md-6 col-12">
						<div class="card service-box" style=" margin-top: 20px;">
						  <img class="card-img-top" src="images/pic-01.jpg" alt="Card image cap">
						  <h5 class="card-title" style="margin: 15px 0 0 0; font-weight: bolder;">บริการวางระบบ Network</h5>
						  <hr style="width:300px; margin-bottom: 0px;">
						  <div class="card-body">
						    <p class="card-text">รับวางระบบ Network, ออกแบบและติดตั้งระบบ Network,
							Router, Core Switch, L2-L3 Switch (PoE, nonPoE),
							IP VPN, Wireless Access Point , Wiress Controller,
							ระบบการจัดการ Bandwidth, ระบบ Fiber Optic Network
							การเชื่อมโยง Network ระหว่างสาขา ฯลฯ</p>
						  </div>
						</div>
					</div>
					<div class="col col-lg-6 col-md-6 col-12">
						<div class="card service-box" style=" margin-top: 20px;">
						  <img class="card-img-top" src="images/pic-02.jpg" alt="Card image cap">
						  <h5 class="card-title" style="margin: 15px 0 0 0; font-weight: bolder;">บริการวางระบบ Server</h5>
						  <hr style="width:300px; margin-bottom: 0px;">
						  <div class="card-body">
						    <p class="card-text">รับวางระบบ Server, ออกแบบและติดตั้งระบบ Server,Web Server, Mail Server, File Server ,
							Active Directory Server, Internet Server, Log Server,
							Database Server ทั้งระบบ Windows Server
							และ Linux Server , ระบบ Server ภายในองค์กร ฯลฯ</p>
						  </div>
						</div>						
					</div>
					<div class="col col-lg-6 col-md-6 col-12">
						<div class="card service-box" style=" margin-top: 20px;">
						  <img class="card-img-top" src="images/pic-03.jpg" alt="Card image cap">
						  <h5 class="card-title" style="margin: 15px 0 0 0; font-weight: bolder;">ติดตั้งตู้สาขาโทรศัพท์ PABX</h5>
						  <hr style="width:300px; margin-bottom: 0px;">
						  <div class="card-body">
						    <p class="card-text">บริการติดตั้งระบบตู้สาขาทั้งแบบ Analog PABX
							และระบบ IP ที่เรียกว่า IP-PBX หรือ IP-Phone
							ที่รองรับการโทรระหว่างสาขาแบบไม่มีค่าโทร
							</p>
						  </div>
						</div>						
					</div>
					<div class="col col-lg-6 col-md-6 col-12">
						<div class="card service-box" style=" margin-top: 20px;">
						  <img class="card-img-top" src="images/pic-04.jpg" alt="Card image cap">
						  <h5 class="card-title" style="margin: 15px 0 0 0; font-weight: bolder;">ติดตั้งกล้องวงจรปิด</h5>
						  <hr style="width:300px; margin-bottom: 0px;">
						  <div class="card-body">
						    <p class="card-text">บริการติดตั้งกล้องวงจรปิด ระบบความคมชัดสูง
							Hi-Definition ทั้งระบบ Analog และระบบ IP Camera
							สามารถดู Online ได้ทั้ง PC และ Smart Phone</p>
						  </div>
						</div>						
					</div>
				</div> <!-- row -->
			</div><!-- container -->
		</center>
	</section>

	<section>
		<center>
			
		</center>
	</section>

	<footer style="color:white;background-color: #008fff">
		<div class="container">
			<div class="row">
				<div class="col col-lg-7 col-12">
					<section>
						<ul class="nav ft-nav">
						  <li class="nav-item active">
							        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
							      </li>
							      <li class="nav-item">
							        <a class="nav-link" href="priduct.php">Product</a>
							      </li>
							      <li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Service
										</a>
											<div class="dropdown-menu" aria-labelledby="navbarDropdown">
												<a class="dropdown-item" href="#">ใบเสนอราคา</a>
												<a class="dropdown-item" href="#">Another action</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
							      </li>
							      <li class="nav-item">
							        <a class="nav-link" href="about_us.php">About Us</a>
							      </li>
						</ul>
					</section>
					<section class="link">
						<a href="#"><h4>PRONETWORK.CO.TH</h4></a>
						<h5>We can make better than ‘PRO’</h5>
					</section>
					<section class="credit">
						<span>© 2018  PRO Network Solutions Co.,Ltd. ,  All right reserved.</span>
					</section>
				</div>

				<div class="col col-lg-5 col-12" style="margin-top: 20px; padding-left: 16px;">
					<div class="info">
						<i class="fas fa-map-marker-alt detail-info"></i> 
						<h6>PRO Network Solutions Co.,Ltd.</h6>
						<span>117/77 Soi Ngamwongwan 47 (6-2-7),
							Thongsonghong, Laksi Bangkok  10210</span><br>

						<i class="fab fa-line detail-info"></i>
						<h6>pro.network</h6>

						<i class="fas fa-phone detail-info"></i>
						<h6>02-102-0501
							<br>091-489-9339</h6>

						<i class="fas fa-envelope detail-info"></i>
						<h6>sales@pronetwork.co.th</h6>
					</div>

				</div>

			</div>	
		</div>
		
	</footer>

</body>
<script>
$(function() {

$('#login-form-link').click(function(e) {
$("#login-form").delay(100).fadeIn(100);
 $("#register-form").fadeOut(100);
$('#register-form-link').removeClass('active');
$(this).addClass('active');
e.preventDefault();
});
$('#register-form-link').click(function(e) {
$("#register-form").delay(100).fadeIn(100);
 $("#login-form").fadeOut(100);
$('#login-form-link').removeClass('active');
$(this).addClass('active');
e.preventDefault();
});

});

</script>
</html>
