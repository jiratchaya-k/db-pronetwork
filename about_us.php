<!DOCTYPE html>
<html>
  <head>
    <title>Pro Network Solutions</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style_about.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" >
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
														<a class="nav-link" href="index.php"style="color: gray;">Home <span class="sr-only">(current)</span></a>
													</li>
													<li class="nav-item" >
														<a class="nav-link" href="product.php"style="color: gray">Product</a>
													</li>
													<li class="nav-item" >
                            <a class="nav-link" href="#"style="color: gray">Service</a>
													</li>
													<li class="nav-item" >
														<a class="nav-link active" href="about_us.php"style="color: gray;">About Us</a>
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
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login btn-primary" value="Log In">
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
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register btn-success" value="Register Now">
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

	<section>
		
		<center>
			<img src="images/logo.jpg" class="d-inline-block align-top" alt="ProNetwork Solutions"></a>
		</center>
	</section>

	<div class="container">
		
			<br>
			<p style="margin-top: 10px; text-align: center; font-weight: bold;">บริษัท โปร เน็ทเวิร์ค โซลูชั่น จำกัด (Pro Network Solutions Co.,Ltd)</p>
			<h6 style="margin-top:10px;">   ก่อตั้งจากทีมวิศวกรมืออาชีพ ที่มีประสบการณ์การทำงานที่ยาวนานกว่า 10 ปี ทั้งในบริษัทเอกชน และหน่วยงานของรัฐ โดยมีความรู้ความสามารถที่หลากหลายในด้านต่างๆ ไม่ว่าจะเป็น ด้านคอมพิวเตร์ทั่วไป (Desktop PC) ด้านระบบคอมพิวเตอร์เซิร์ฟเวอร์ (Server System) ด้านการออกแบบวางระบบเครือข่ายคอมพิวเตร์ (Computer Network) ด้านซอฟต์แวร์คอมพิวเตอร์ (Software) ระบบโทรศัพท์ (PABX, IP-PBX, IP-Phone) ระบบกล้องวงจรปิด (CCTV System) และระบบ IT อื่นๆ</h6>
			
			<h6 style="margin-top:15px;">บริษัท โปร เน็ทเวิร์ค โซลูชั่น จำกัด จึงมีความมุ่งมั่นที่จะเป็นบริษัทชั้นนำ ที่ให้บริการ ออกแบบ ติดตั้ง วางระบบด้าน IT ครบวงจร ซึ่งสามารถตอบโจทย์ให้กับลูกค้าได้ตรงความต้องการมากที่สุด มี Solutions ที่หลากหลาย เพื่อให้ลูกค้าสามารถเลือก Solutions ที่ต้องการ ทั้งด้านคุณภาพหรือประสิทธิภทพของระบบ หรือ ด้านการประหยัดงบประมาณ แต่ระบบยังสามารถใช้งานได้อย่างดี และไม่เพียงแค่การทำงานที่มีคุณภาพสูงเท่านั้น เรายังสามารถให้บริการที่เหนือว่ามืออาชีพได้ ดั่งสโลแกนที่ว่า</h6>

			<h4 style="margin-top: 30px; text-align: center; font-weight: bold; color: #008fff;">" WE CAN MAKE BETTER THAN PRO "</h4>
			<h4 style="margin-top: 5px; text-align: center; font-weight: bold; color: #74bd16; font-size: 20px;">เราสามารถทำให้คุณได้มากกว่าคำว่า โปรฯ</h4>
			<br>
			<hr>

			<div class="row">

    <div class="col col-lg-6 col-md-6 col-12" style="margin-top: 30px;">
      <div class="eye" style="font-size: 50px; color: #008fff; text-align: center;">
          <i class="fas fa-eye"></i>
     </div><!-- eye -->
     
     <div class="txt" style="font-size: 50px; text-align: center;">
     	  <h4 style="font-size: 30px; text-align: center; color: #008fff; ">วิสัยทัศน์</h4>
     	  <h4>....................................</h4>
         <h6>มุ่งสู่บริษัทชั้นนำด้านเทคโนโลยีสารสนเทศที่ให้บริการด้วยคุณภาพแบบครบวงจร และสนับสนุนการก้าวไปสู่เศรษฐกิจดิจิตอลของประเทศไทย</h6>
     </div>
    
    </div><!-- col -->

    
    <div class="col col-lg-6 col-md-6 col-12" style="margin-top: 30px;">
    	<div class="flag" style="font-size: 50px; color: #008fff; text-align: center;">
            <i class="fas fa-flag"></i>
        </div>
        <div class="txt" style="font-size: 50px; text-align: center;">
     	  <h4 style="font-size: 30px; text-align: center; color: #008fff; ">วิสัยทัศน์</h4>
     	  <h4>....................................</h4>
         <h6>ให้บริการด้านเทคโนโลยีสารสนเทศครบวงจร ด้วยคุณภาพการให้บริการที่ดีที่สุด เพื่อประสิทธิภาพของระบบและสร้างความพึงพอใจสูงสุดของลูกค้า</h6>
     </div>
    
    </div>



  </div><br><br><br><br>
          <h4 style="font-size: 30px; text-align: center; color: #008fff; ">ข้อมูลบริษัท</h4>
          <h4 style="text-align: center; ">....................................</h4><br><br>
          
   <table class="table">
  
  <tbody>
    <tr>
      <td class="col-title">ชื่อบริษัท :</td>
      <td style="border: none;">บริษัท โปร เน็ทเวิร์ค โซลูชั่น จำกัด</td>
    </tr>
    
    <tr>
      <td class="col-title">Company Name :</td>
      <td style="border: none;">PRO NETWORK SOLUTIONS CO.,LTD.</td>
    </tr>

    <tr>
      <td class="col-title">ลักษณะธุรกิจ :</td>
      <td style="border: none;">ประกอบธุรกิจเกี่ยวกับการจัดจำหน่ายอุปกรณ์ Computer และอุปกรณ์ IT ทุกชนิด, ให้บริการออกแบบ ติดตั้งวางระบบ ตรวจแก้ไข และบำรุงรักษาระบบ Server, Network, Wi-Fi (Wireless) ระบบโทรศัพท์ทั้ง Analog และ IP-Phone ระบบกล้องวงจรปิด CCTV System และระบบอื่นๆ ที่เกียวข้อง</td>
    </tr>

    <tr>
      <td class="col-title">ที่ตั้งสำนักงานใหญ่ :</td>
      <td style="border: none;">เลขที่ 117/77 ซอยงามวงศ์วาน 47 แยก 6-2-7 แขวงทุ่งสองห้อง เขตหลักสี่ กรุงเทพมหานคร 10210</td>
    </tr>

    <tr>
      <td class="col-title">เลขทะเบียนบริษัท :</td>
      <td style="border: none;">0105559063192</td>
    </tr>

     <tr>
      <td class="col-title">เลขประจำตัวผู้เสียภาษี :</td>
      <td style="border: none;">0105559063192</td>
    </tr>

    <tr>
      <td class="col-title">โทรศัพท์ :</td>
      <td style="border: none;">02-102-0501 , 091-489-9339, 091-881-7399</td>
    </tr>

    <tr>
      <td class="col-title">โทรสาร :</td>
      <td style="border: none;">02-102-0502</td>
    </tr>

    <tr>
      <td class="col-title">Website :</td>
      <td style="border: none;">http://www.pronetwork.co.th</td>
    </tr>

    <tr>
      <td class="col-title">Email :</td>
      <td style="border: none;">sales@pronetwork.co.th</td>
    </tr>

</tbody>
</table>

	</div>

  <footer style="color:white;background-color: #008fff">
    <div class="container">
      <div class="row">
        <div class="col col-lg-7 col-12">
          <section>
            <ul class="nav ft-nav">
              <li class="nav-item active">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Product</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link" href="#">Sevice</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Contact</a>
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