
                   <!-- query_start -->

				   <?php
              include('connection.php') ;                
if (isset($_POST["btn"])) {
 
      $movies = $_POST["movie"];

      $sql = "Select * from reserve_data where movie = '$movies'";
      $cart = mysqli_query($con, $sql);
if(mysqli_num_rows($cart) > 0)
{
     echo "<script> alert('Movie Ticket Already Reserved')
	 window.location.href = 'offers.php';
	 </script>";

}
else{

               	   echo "<script>  
			 alert('Movie Ticket Reservation In Process')  
			   window.location.href = 'reserve.php';
			</script>" ;
		
			   
}
} 
 ?>
                   <!-- query_end -->
                   <!-- doc_start -->


<!DOCTYPE html>
<html lang="en">
<head>
<title>Offers</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="MovieLand Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--  Plugins_start -->

<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/offers_styles.css">
<link rel="stylesheet" type="text/css" href="styles/offers_responsive.css">
<link rel="stylesheet" href="styles/style.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700" rel="stylesheet" />
<link href="css/main.css" rel="stylesheet" />
<!--  Plugins_end -->

                   <!-- bootstrap_link -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body class="bg-dark text-light">

<div class="super_container">
	
	<!-- Header_start -->

	<header class="header">



		<!-- Main Navigation_start -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
						<div class="logo_container">
							<div class="logo"><a href="#"><img src="images/logo.png" alt="">MovieLand</a></div>
						</div>
						<div class="main_nav_container ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="index.php" class="">home</a></li>
								<li class="main_nav_item"><a href="about.php">about us</a></li>
								<li class="main_nav_item active"><a href="offers.php">offers</a></li>
								<li class="main_nav_item"><a href="contact.php">contact</a></li>
							</ul>
						</div>
						<div class="content_search ml-lg-0 ml-auto">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="17px" height="17px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
								<g>
									<g>
										<g>
											<path class="mag_glass" fill="#FFFFFF" d="M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
											s112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
											C407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
											M119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
											c0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z"/>
										</g>
									</g>
									<g>
										<g>
											<path class="mag_glass" fill="#FFFFFF" d="M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
											c8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
											C-2.019,484.77-2.019,497.865,6.057,505.942z"/>
										</g>
									</g>
								</g>
							</svg>
						</div>

						<div class="col-2">
						
<style>
	.tin{
		cursor: pointer;
	}



</style>


						<div>
								
				<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-fill text-white tin" viewBox="0 0 16 16" onclick="log_out()" id="user" >
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                </svg>

				
						</div>
						</div>

						<form id="search_form" class="search_form bez_1">
							<input type="search" class="search_content_input bez_1">
						</form>
                   <!-- mainnavigation_end -->

                   <!-- hamburger_start -->
						
						<div class="hamburger">
							<i class="fa fa-bars trans_200"></i>
						</div>
					</div>
				</div>
			</div>	
		</nav>

	</header>

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<div class="logo menu_logo"><a href="#"><img src="images/logo.png" alt=""></a></div>
			<ul class="main_nav_list">
								<li class="main_nav_item"><a href="index.php" class="">home</a></li>
								<li class="main_nav_item"><a href="about.php">about us</a></li>
								<li class="main_nav_item active"><a href="offers.php">offers</a></li>
								<li class="main_nav_item"><a href="contact.php">contact</a></li>
							</ul>
		</div>
	</div>
                   <!-- hamburger_end -->

	<!-- Home_start -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/b7.jpg"></div>
		<div class="home_content">
			<div class="home_title text-light">our offers</div>
		</div>
	</div>
	<!-- Home_end-->
	
	<!-- Container_start -->

		<div class="container ">
			<div class="row">
				<div class="col-lg-1 temp_col"></div>
	<!-- Search_start-->
			
				<div class="s010 ">
      <form>
        <div class="inner-form">
          <div class="basic-search">
            <div class="input-field">
			
              <input id="myInput" type="text" placeholder="Search..." class="text-white"/>
              <div class="icon-wrap">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                </svg>
              </div>
            </div>
          </div>
		  </div>
		  </form>
		  </div>
	<!-- Search_end -->

                  
                   <!-- card_start -->

				<div class="col-lg-12" id="search">
	             <!-- Query_start -->

					<?php
					include('connection.php');
					$sql = "SELECT * from movie_data";
					$result = mysqli_query($con, $sql);
					if ($result->num_rows > 0) {
					
					
					  while($row = $result->fetch_assoc()) {
					?>
				
	           <!-- Query_end -->

					<div class="offers_grid" id="sear">
<form method="post" enctype="multipart/form-data" action="reserve.php ">
						<input type="hidden" name="movies" value="<?php echo $row['movie']?>">

             

						
				 <div class="offers_item rating_4">
					
							<div class="row" id="<?php echo $row['movie']?>">
							
								  
								<div class="col-lg-1 temp_col"></div>
								<div class="col-lg-3 col-1680-4">
									<div class="offers_image_container hovers">
										<!-- Image by https://unsplash.com/@kensuarez -->
				
										
									<div class="offers_image_background" style="background-image:url(<?php echo $row['image']?>)"></div>
						
										<div class="offer_name" ><a href=""><?php echo $row['movie']?></a></div>
									<!-- hover effect start -->
									<style>
.content 
{
    width: 100%;
    height: 100%;
    position: absolute;
    top: -100%;
    left: 0;
    background-color: rgba(0, 0, 0, 0.7);
    color: white;
    padding: 20px;
    box-sizing: border-box;
    transition: all 0.8s;
}

.hovers:hover .content
{
    top: 0;
}
.hovers{

	position: relative;
    overflow: hidden;
}

									</style> 
			<a href="<?php echo $row['trailer']?>"><div class="content">
            <h3 class="text-center text-light mt-5">Watch Your Movie Trailer</h3>
			
        
        </div></a>
									<!-- hover effect_end -->

									</div>
								</div>
								<div class="col-lg-8">
									<div class="offers_content">
										<div class="offers_price text-light" >$<?php echo $row['price']?></div>
										<div class="rating_r rating_r_<?php echo $row['stars']?> offers_rating" data-rating="">
											<i></i>
											<i></i>
											<i></i>
											<i></i>
											<i></i>
										</div>
										<br>
										<p class="text-white" >On <?php echo $row['date']?> at <?php echo $row['time']?> </p>
									
										<div class="offers_icons">
											<ul class="offers_icons_list">
											<p class="offers_text text-light" ><?php echo $row['description']?></p>
											</ul>
										</div>
<style>
	.hill{
		background: #fa9e1b;
	}
</style>

								<div ><input type="submit" value="Book" name="btn" class="button book_button text-light hill" style="width: 200px; outline: none; border: none;"><span></span><span></span><span></span></div>
									
										<style>
											.offer{
											
												margin-right: 430px;
											}
										</style>
										<div class="offer_reviews offer" >
											<div class="offer_reviews_content">
											
												<div class="offer_reviews_subtitle text-light"><?php echo $row['reviews']?> Reviews</div>
												<div class="offer_reviews_title text-light" >At <?php echo $row['cinema']?></div>
											</div>
											
											<div class="offer_reviews_rating text-center text-light"><?php echo $row['rating']?></div>
										</div>
									</div>
								</div>


							</div>
						</div>
</form>
					</div>
	<!-- Query_start -->
					
					<?php
					  }
					}
					?>
	<!-- Query_end -->

				</div>
	

<br><br><br>
			</div>
		</div>		
	</div>
		 <!-- card_end -->
<br><br>
	<!-- Footer_start -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_content footer_about">
							<div class="logo_container footer_logo">
								<div class="logo"><a href=""><img src="images/logo.png" alt="">MovieLand</a></div>
							</div>
							<p class="footer_about_text">It Is A Website Where You Can buy Movie Ticket On One Click. We Also Provide You With  ovie Trailers And Other Stuffs And We Have A Special Section For Kids Where They Can Also Enjoy Animated Cartoon Movies</p>
							<ul class="footer_social_list">
								<li class="footer_social_item"><a href=""><i class="fa fa-pinterest"></i></a></li>
								<li class="footer_social_item"><a href=""><i class="fa fa-facebook-f"></i></a></li>
								<li class="footer_social_item"><a href=""><i class="fa fa-twitter"></i></a></li>
								<li class="footer_social_item"><a href=""><i class="fa fa-dribbble"></i></a></li>
								<li class="footer_social_item"><a href=""><i class="fa fa-behance"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_title">blog posts</div>
						<div class="footer_content footer_blog">
							
							<!-- Footer blog item -->
							<div class="footer_blog_item clearfix">
								<div class="footer_blog_image"><img src="images/footer_blog_1.jpg" alt="https://unsplash.com/@avidenov"></div>
								<div class="footer_blog_content">
									<div class="footer_blog_title"><a href="offers.php">Book Tickets From Here</a></div>
									<div class="footer_blog_date">June 02, 2024</div>
								</div>
							</div>
							
							<!-- Footer blog item -->
							<div class="footer_blog_item clearfix">
								<div class="footer_blog_image"><img src="images/footer_blog_2.jpg" alt="https://unsplash.com/@deannaritchie"></div>
								<div class="footer_blog_content">
									<div class="footer_blog_title"><a href="offers.php">New Cinemas for you</a></div>
									<div class="footer_blog_date">Jan 13, 2024</div>
								</div>
							</div>

							<!-- Footer blog item -->
							<div class="footer_blog_item clearfix">
								<div class="footer_blog_image"><img src="images/footer_blog_3.jpg" alt="https://unsplash.com/@bergeryap87"></div>
								<div class="footer_blog_content">
									<div class="footer_blog_title"><a href="offers.php">Trailers For You</a></div>
									<div class="footer_blog_date">July 29, 2024</div>
								</div>
							</div>

						</div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_title">tags</div>
						<div class="footer_content footer_tags">
							<ul class="tags_list clearfix">
								<li class="tag_item"><a href="">Trailers</a></li>
								<li class="tag_item"><a href="">Classes</a></li>
								<li class="tag_item"><a href="">Movies</a></li>
								<li class="tag_item"><a href="">Kids</a></li>
								<li class="tag_item"><a href="">Responsive</a></li>
								<li class="tag_item"><a href="">MovieLand</a></li>
								<li class="tag_item"><a href="">Adventure</a></li>
								<li class="tag_item"><a href="">Design</a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_title">contact info</div>
						<div class="footer_content footer_contact">
							<ul class="contact_info_list">
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/placeholder.svg" alt=""></div></div>
									<div class="contact_info_text">4127 Raoul Wallenber 45b-c</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/phone-call.svg" alt=""></div></div>
									<div class="contact_info_text">2556-808-8613</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/message.svg" alt=""></div></div>
									<div class="contact_info_text"><a href="" target="_top">contactme@gmail.com</a></div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/planet-earth.svg" alt=""></div></div>
									<div class="contact_info_text"><a href="">www.movieland.com</a></div>
								</li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</footer>

	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-lg-1 order-2  ">
					<div class="copyright_content d-flex flex-row align-items-center">
						<div>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">SSH LTD</a>
</div>
					</div>
				</div>
				<div class="col-lg-9 order-lg-2 order-1">
					<div class="footer_nav_container d-flex flex-row align-items-center justify-content-lg-end">
						<div class="footer_nav">
							<ul class="footer_nav_list">
								<li class="footer_nav_item"><a href="index.php">home</a></li>
								<li class="footer_nav_item"><a href="about.php">about us</a></li>
								<li class="footer_nav_item"><a href="offers.php">offers</a></li>
								<li class="footer_nav_item"><a href="contact.php">contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- footer_end -->
<!--  Searchfunction_start -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
	
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#search #sear").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<!--  Searchfunction_end -->
<!--  Plugins_start -->

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/offers_custom.js"></script>
<!--  Plugins_endstart -->
<!--  logoutfunction_start -->

<script>
	function log_out() {
		location. href = "log_out.php"; 
	}


	</script>
<!--  logoutfunction_end -->

</body>

</html>
                                                 <!-- doc_end -->
