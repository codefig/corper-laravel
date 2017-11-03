<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>e-corper</title>

    <!-- Bootstrap -->

    <link href="{{ URL::to('css/bootstrap.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ URL::to('css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ URL::to('css/animate.css') }}">
	<link href="{{ URL::to('css/prettyPhoto.css') }}" rel="stylesheet">
	<link href="{{ URL::to('css/style.css') }}" rel="stylesheet" />
    <!-- =======================================================
        Theme Name: Company
        Theme URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>
  <body>
	<header>
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<a href="index.html"><h1><span>e-</span>corper</h1></a>
						</div>
					</div>

					<div class="navbar-collapse collapse">
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="index.html" class="active">Home</a></li>
								<li role="presentation"><a href="{{ route('agent.login') }}">Agents Login</a></li>
								<li role="presentation"><a href="" id="signUpBtn">Sign Up</a></li>
								<li role="presentation"><a href="{{ route('user.login') }}">Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>

	<section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <div class="carousel-inner">
                {{-- <div class="item active" style="background-image: url(images/slider/bg1.jpg)"> --}}
                <div class="item active" style="background-image: url(img/corper-show.jpeg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2 class="animation animated-item-1">E-<span>Corper</span></h2>
                                    <p class="animation animated-item-2">Enabling an efficient youth service corp experience...</p>
                                    <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    {{-- <img src="images/slider/corper-stand.jpg" class="img-responsive"> --}}
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
    </section><!--/#main-slider-->

	<div class="feature">
		<div class="container">
			<div class="text-center">
				<div class="col-md-3">
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" >
						<i class="fa fa-book"></i>
						<h2>Full Responsive</h2>
						<p>Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus.</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
						<i class="fa fa-laptop"></i>
						<h2>Retina Ready</h2>
						<p>Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus.</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" >
						<i class="fa fa-heart-o"></i>
						<h2>Full Responsive</h2>
						<p>Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus.</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" >
						<i class="fa fa-cloud"></i>
						<h2>Friendly Code</h2>
						<p>Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="about">
		<div class="container">
			<div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" >
				<h2>OUR MISSION</h2>
				<img src="img/corper-2.jpg" class="img-responsive"/>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat
				libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
				libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
				libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
				</p>
			</div>

			<div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
				<h2>PROMOTING A FRUITFUL YOUTH SERVICE EXPERIENCE </h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat
				libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
				libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
				libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat
				libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
				libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
				libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
				</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget.
				Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget.
				Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque </p>
			</div>
		</div>
	</div>

	<div class="lates">
		<div class="container">
			<div class="text-center">
				<h2>Lates News</h2>
			</div>
			<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
				<img src="img/service-5.png" class="img-responsive"/>
				<h3>LATEST BATCH ARRIVAL AT CAMP GROUND</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat
				libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
				libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
				libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
				</p>
			</div>

			<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
				<img src="img/corper-3.png" class="img-responsive"/>
				<h3>HOW TO GET THE BEST OF YOUR SERVICE</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat
				libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
				libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
				libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
				</p>
			</div>

			<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
				<img src="img/corper-2.jpg" class="img-responsive"/>
				<h3>GETTING USEFUL BEFORE VENTURING INTO LABOUR MARKET</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat
				libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
				libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
				libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
				</p>
			</div>
		</div>
	</div>

	<section id="partner">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Our Partners</h2>
                <p>We plan to make you have a fruitful youth service experience, by linking you up with professionals in your various areas of discipline. to groom you before entering the labour market</p>
            </div>

            <div class="partners">
                <ul>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="images/partners/partner1.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="images/partners/partner2.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="images/partners/partner3.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="images/partners/partner4.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="images/partners/partner5.png"></a></li>
                </ul>
            </div>
        </div><!--/.container-->
    </section><!--/#partner-->

	<footer>
		<div class="footer">
			<div class="container">
				<div class="social-icon">
					<div class="col-md-4">
						<ul class="social-network">
							<li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-4 col-md-offset-4">
					<div class="copyright">
						&copy; Company Theme. All Rights Reserved.
                        <div class="credits">
                            <!--
                                All the links in the footer should remain intact.
                                You can delete the links only if you purchased the pro version.
                                Licensing information: https://bootstrapmade.com/license/
                                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Company
                            -->

                        </div>
					</div>
				</div>
			</div>

			<div class="pull-right">
				<a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
			</div>
		</div>


		<div class="modal fade" id="signUpModal">
			<div class="modal-dialog">
				<div class="modal-content">

					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">SIGN UP</h4>
					</div>
					<div class="modal-body">

						<form method="post" action="{{ route('user.signup.submit') }}">

    					<div class="form-group">
    						<label style="color:#000 !important;"> First name </label>
    						<input type="text" class="form-control" id="firstname" name='firstname' />
    					</div>

    					<div class="form-group">
    						<label style="color:#000 !important;"> Lastname </label>
    						<input type="text" class="form-control" id="lastname" name="lastname" />
    					</div>

						<div class="form-group">
							<label style="color:#000 !important;"> Email </label>
							<input type="text" class="form-control" id="email" />
						</div>

						<div class="form-group">
							<label style="color:#000 !important;"> Password </label>
							<input type="password" class="form-control" id="password" style="background-color:#fff !important;" />
						</div>
					</div>

					<div class="alert alert-danger" id="errorOutput" style="margin:10px;">
					</div>

					<div class="modal-footer">
						<input type="hidden" value="{{ Session::token() }}" name="_token" id="token" />
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary" id="submitBtn">Submit</button>
					</div>

				</form>
				</div>
			</div>
		</div>



	</footer>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="{{ URL::to('js/jquery-2.1.1.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ URL::to('js/bootstrap.min.js') }}"></script>
	<script src="{{ URL::to('js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ URL::to('js/jquery.isotope.min.js') }}"></script>
	<script src="{{ URL::to('js/wow.min.js') }}"></script>
	<script src="{{ URL::to('js/functions.js') }}"></script>


	<script type="text/javascript">
		$('document').ready(function(){
			// alert("welcome to the webpage");
			$('#errorOutput').hide();
			var token = "{{ Session::token() }}";
			var route = "{{ route('user.signup.submit') }}";
			$('#signUpBtn').click(function(event){
				event.preventDefault();
				$('#signUpModal').modal();
			});


			$('#submitBtn').click(function(e){
				// console.log('that was function');
					$('#errorOutput').html("");
				$.post(route, {
					_token : token,
					firstname : $('#firstname').val(),
					lastname : $('#lastname').val(),
					email : $('#email').val(),
					password : $('#password').val(),
				}, function(result){
					console.log(result);
					if(result['success']){
						window.location = "{{ route('user.home') }}";
					}
					else{
							var errLength = result['errors'].length;
					        for (var i = 0; i < errLength; i++) {
					          $('#errorOutput').append('<li>' + result['errors'][i] + "</li>");
					        }
					        $('#errorOutput').show();
					}
				})
			})
		})
	</script>

</body>
</html>