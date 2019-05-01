<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Tender Pro') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
	@include('inc.navbar')


	<div class="container">
		

		@include('inc.img_slider')
		

		@if(Request::is('/')) 
			@include('inc.showcase')
		@endif
	<div class="row">
		<div class="col-md-8 col-lg-8">
			@include('inc.messages')
			@yield('content')
		</div>
	</div>
</div>

<!-- footer -->
	<style type="text/css">
.payment_method_logo{
	text-align:left;
	margin-top: 2%;
}

</style>
<footer id="footer" class="clearfix">
		<!-- footer-top -->
		<section class="footer-top clearfix">
			<div class="container">
				<div class="row">
					<!-- footer-widget -->
					<div class="col-sm-7">
						<div class="footer-widget">
							<ul class="nav navbar-nav">
								<li class=""><a href="/about">About Us</a></li>
								<li class=""><a href="https://tenders.lk/site/pages/terms_and_conditions">Terms & Conditions</a></li>
								<li class=""><a href="https://tenders.lk/site/pages/general_info">General Information</a></li>
								<li class=""><a href="https://tenders.lk/site/pages/faqs">FAQs</a></li>
								<li class=""><a href="/contact">Contact Us</a></li>
							</ul>
						</div>
					</div><!-- footer-widget -->
					
					<!-- footer-widget -->
					<div class="col-sm-5">
					
						<div class="row">

							<div class="col-sm-2 footer-widget social-widget" style="margin-top: 2%;">
								<ul>
									<li><a href="https://www.facebook.com/Tenders.lk" target="_blank"><i class="fa fa-facebook-official"></i></a></li>
								</ul>		
							</div>
							
							<div class="col-sm-10">
							
								<div class="payment_method_logo">
									<img src="https://tenders.lk/site/images/pay_methods.png" alt="Merchant Equipment Store Credit Card Logos"/>
								</div>	
							
							</div>
							
						</div>
					
											
					</div><!-- footer-widget -->

					
									
				</div><!-- row -->
				
				
			</div><!-- container -->
		</section><!-- footer-top -->

		<div class="footer-bottom clearfix text-center">
			<div class="container">
				<p>Copyright &copy; <a href="http://www.tenderpro.lk">TenderPro.lk</a> 2019. Developed by <a href="https://gitlab.com/Barney96" target="_blank">Kanishka Perera</a></p>
			</div>
		</div><!-- footer-bottom -->
	</footer>
	
<!-- <script src="resources/js/snow_falling.js"></script> -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-37160246-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-37160246-1');
</script>	
<!-- footer -->

	<!--<footer id="footer" class="text-center">
		<p>Copyright 2019 &copy; Tender Pro</p>
	</footer>
</body>
</html>-->