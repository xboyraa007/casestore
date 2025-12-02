<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");  
error_reporting(0);  
session_start(); 

?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Home</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"> </head>

<body class="home">
<style> 
              @font-face {
                            font-family: myFirstFont;
                            src: url(fonts/KhRayuthHD20.ttf);
                        }

                      * {
                           font-family: myFirstFont;
                        }
</style>
    
        <header id="header" class="header-scroll top-header headrom">
            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                    <a class="navbar-brand" href="index.php"> <img class="img-rounded" src="images/sto.png"  alt=""> </a>
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"> <a class="nav-link active" href="index.php">👑 ទំព័រដើម <span class="sr-only">(current)</span></a> </li>
                            
                           
							<?php
						if(empty($_SESSION["user_id"])) // if user is not login
							{
								echo '<li class="nav-item"><a href="login.php" class="nav-link active">🔑 ចូលគណនី</a> </li>
							  <li class="nav-item"><a href="registration.php" class="nav-link active">📝 បង្កើតគណនី</a> </li>';
							}
						else
							{

									
									echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">🎟️ ការបញ្ជាទិញ</a> </li>';
									echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">🚀 ចាកចេញពីគណនី</a> </li>';
							}

						?>
							 
                        </ul>
						 
                    </div>
                </div>
            </nav>

        </header>

        <section class="hero bg-image" data-image-src="images/img/back.jpg">
            <div class="hero-inner">
                <div class="container text-center hero-text font-white">
                    <h1 style="font-family:myFirstFont" >✨ Pop-Up Store</h1>
                    
                    <div class="banner-form">
                        <form class="form-inline">
                          
                        </form>
                    </div>
             
                </div>
            </div>
      
        </section>
      
      
	  
	
     
        <section class="popular">
            <div class="container">
                <div class="title text-xs-center m-b-30">
                    <h2 style="font-family:myFirstFont">📦 ទំនិញពេញនិយមប្រចាំខែ</h2>
                    <p class="lead"> </p>
                </div>
                <div class="row">
						<?php 					
						$query_res= mysqli_query($db,"select * from dishes LIMIT 6"); 
                                while($r=mysqli_fetch_array($query_res))
                                {
                                        
                                    echo '  <div class="col-xs-12 col-sm-6 col-md-4 food-item">
                                            <div class="food-item-wrap">
                                                <div class="figure-wrap bg-image" data-image-src="admin/Res_img/dishes/'.$r['img'].'"></div>
                                                <div class="content">
                                                    <h5><a href="dishes.php?res_id='.$r['rs_id'].'">'.$r['title'].'</a></h5>
                                                    <div class="product-name">'.$r['slogan'].'</div>
                                                    <div class="price-btn-block"> <span class="price">$'.$r['price'].'</span> <a href="dishes.php?res_id='.$r['rs_id'].'" class="btn theme-btn-dash pull-right">🛍️ Order Now</a> </div>
                                                </div>
                                                
                                            </div>
                                    </div>';                                      
                                }		
						?>
                </div>
            </div>
        </section>
 
      
        <footer class="footer">
            <div class="container">
                <?php include('partials-front/footer.php'); ?>
                
          
                <div class="bottom-footer">
                    <div class="row">
                        <div class="col-xs-12 col-sm-3 payment-options color-gray">
                            <h5 style="font-family:myFirstFont">ជម្រើសបង់ប្រាក់</h5>
                            <ul>
                                <li>
                                    <a href="#"> <img src="images/khqr.png" alt="KH QR" width="45" height="25"> </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-4 address color-gray">
                                    <h5 style="font-family:myFirstFont">អាស័យដ្ឋាន</h5>
                                    <p style="font-family:myFirstFont">កម្ពុជា , ក្រុងប៉ោយប៉ែត</p>
                                    <h5 style="font-family:myFirstFont">លេខទរសព្វ: <a style="font-family:myFirstFont"> +855 713323326</a></h5> </div>
                                <div class="col-xs-12 col-sm-5 additional-info color-gray">
                                    <h5 style="font-family:myFirstFont">ពត៌មានបន្ថែម</h5> 
                                   <p style="font-family:myFirstFont">អរគុណសម្រាប់ការគាំទ្រហាងយើងខ្ញុំ។</p>
                                </div>
                    </div>
                </div>
          
            </div>
        </footer>
    

    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>

</html>
