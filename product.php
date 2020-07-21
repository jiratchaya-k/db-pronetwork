<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/ui.css">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>Pro Network Solutions</title>
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
														<a class="nav-link active" href="product.php"style="color: gray">Product</a>
													</li>
													<li class="nav-item" >
                                                        <a class="nav-link" href="#"style="color: gray">Service</a>
													</li>
													<li class="nav-item" >
														<a class="nav-link" href="about_us.php"style="color: gray;">About Us</a>
													</li>
													<li class="nav-item" >
													    <a class="nav-link" href="login.php"style="color: gray;">Log In</a>
													</li>
												</ul>
										</div>
						</div><!-- container -->
				</nav>
		</header>

    <div class="container">
     <?php require_once('process.php'); ?>
    
    <?php $mysqli = new mysqli('localhost','root','','pro_network')or die(mysqli_error($mysqli)); 
        $result = $mysqli->query("SELECT * FROM `product_tb`")or die($mysqli->error);
    ?>

    <?php 
        if(isset($_SESSION['message'])):?>

    <div class="alert alert-<?=$_SESSION['msg_type']?>">
    
        <?php 
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        
        ?>
    </div>   
    <?php endif ?>
    <br><br>


    <center><h3>All Product</h3></center>
    
    <div class="row" style="margin-top:30px;">
        <?php  while($row = $result->fetch_assoc()): ?>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <figure class="card card-product">
                    <figcaption class="info-wrap">
                        <h4 class="title"><?php echo $row['Product_Name']; ?></h4>
                        <p class="desc"><?php echo $row['Product_Detail']; ?></p>                    
                    </figcaption>
                <div class="bottom-wrap">	
                    <div class="price-wrap h5">
                        <span class="price-new">ราคา <?php echo $row['Product_Price']; ?> บาท</span><br><br>
                        <a href="product.php?edit=<?php echo $row['Product_ID']; ?>"
                    class="btn btn-info">Edit</a>	
                        <a href="process.php?delete=<?php echo $row['Product_ID']; ?>"
                    class="btn btn-danger float-right">Delete</a>
                    </div> <!-- price-wrap.// -->
                </div> <!-- bottom-wrap.// -->
        </figure>
    </div> <!-- col // -->

        <?php endwhile ?>
    </div>

    <br><hr><br>

      <?php if ($update == true): ?>
            <center><h3>Edit Product</h3></center>
        <?php else: ?>
            <center><h3>Add Product</h3></center>
    <?php endif ?>
    
        <div class="row">
        <form class="col-md-12 col-lg-12 col-md-offset-3" action="process.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
    <br>
             <div class="form-group">
                <label>Product ID</label>
                <input type="text" name="Product_ID" class="form-control" value="<?php echo $Product_ID; ?>" placeholder="Enter product id">
            </div>

            <div class="form-group">
                <label>Product Name</label>
                <input type="text" name="Product_Name" class="form-control" value="<?php echo $Product_Name; ?>" placeholder="Enter product name">
            </div>
            
            <div class="form-group">
                <label>Product Detail</label>
                <input type="text" name="Product_Detail" class="form-control" value="<?php echo $Product_Detail; ?>" placeholder="Detail...">
            </div>

             <div class="form-group">
                <label>Product Price</label>
                <input type="text" name="Product_Price" class="form-control" value="<?php echo $Product_Price; ?>" placeholder="0">
            </div>
    <br>
            <center><div class="form-group ">
            <?php
                if($update ==true):
            ?>
                 <button type="submit" class="btn btn-info" name="update" style="width:200px;background: #556B2F;">UPDATE</button>
                <?php else: ?>
                <button type="submit" class="btn btn-primary" name="save" style="width:200px;">SAVE</button>
                <?php endif; ?>    
            </div>
            </div>
            </center>

    
        </form> 
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js" ></script>
        <script src="node_modules/jquery/dist/jquery.min.js" ></script>
        <script src="node_modules/popper.js/dist/umd/popper.min.js" ></script>
    </div> 
    
</body>

<footer style="color:white;background-color: #008fff; margin-top:30px;">
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



</html>