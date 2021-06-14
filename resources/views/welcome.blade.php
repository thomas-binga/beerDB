@extends('layout')
<!DOCTYPE html>
<html lang="en">
  @section('titrePage') BeerDB - A complete Beer DataBase @endsection
  <body>
	  
@section('contenu')
    <section class="hero-wrap js-fullheight" style="background-image: url(images/bg-2.jpg);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
          <div class="col-lg-12 ftco-animate d-flex align-items-center">
          	<div class="text text-center">
          		<span class="subheading">Bienvenue sur BeerDB</span>
		  				<h1 class="mb-4">Pour vous aider à préparer vos meilleurs apéros !</h1>
							</div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section ftco-team">
    	<div class="container-fluid px-md-5">
    		<div class="row justify-content-center pb-3">
          <div class="col-md-10 heading-section text-center ftco-animate">
            <h2 class="mb-4">Bieres selectionnées</h2>
            <p>Testée et approuvées par NOUS !</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-12 ftco-animate">
        		<div class="carousel-team owl-carousel">
        			<div class="item">
		        		<a href="#" class="team text-center">
		        			<div class="img" style="background-image: url(images/stylist-1.jpg);"></div>
		        			<h2>Danica Lewis</h2>
		        			<span class="position">Hair Stylist</span>
		        		</a>
        			</div>
        			<div class="item">
	        			<a href="#" class="team text-center">
		        			<div class="img" style="background-image: url(images/stylist-2.jpg);"></div>
		        			<h2>Nicole Simon</h2>
		        			<span class="position">Nail Master</span>
		        		</a>
	        		</div>
	        		<div class="item">
	        			<a href="#" class="team text-center">
		        			<div class="img" style="background-image: url(images/stylist-3.jpg);"></div>
		        			<h2>Cloe Meyer</h2>
		        			<span class="position">Director</span>
		        		</a>
	        		</div>
	        		<div class="item">
	        			<a href="#" class="team text-center">
		        			<div class="img" style="background-image: url(images/stylist-4.jpg);"></div>
		        			<h2>Rachel Clinton</h2>
		        			<span class="position">Hair Stylist</span>
		        		</a>
	        		</div>
	        		<div class="item">
	        			<a href="#" class="team text-center">
		        			<div class="img" style="background-image: url(images/stylist-5.jpg);"></div>
		        			<h2>Dave Buff</h2>
		        			<span class="position">Barber</span>
		        		</a>
	        		</div>
        		</div>
        	</div>
        </div>
    	</div>
    </section>

    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    

@endsection
  </body>
</html>