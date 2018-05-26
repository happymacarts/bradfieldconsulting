<header class="navbar-wrap">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-targetx="#bs-example-navbar-collapse-1"
					data-target=".navbar-collapse"
					aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<i class="fa fa-bars" aria-hidden="true"></i>
				</button>
				<a class="navbar-brand" href="/"><img class="img-responsive"
					src="/images/bc_logo.png" alt="" width="158" height="37"></a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse"
				id="bs-example-navbar-collapse-1">
				
				<ul class="nav navbar-nav navbar-right hidden-sm hidden-xs site-info">
					<li>
						<div class="unit unit-horizontal unit-middleX unit-spacing-sm">
							<div class="unit-left">
								<img src="/images/icon-clock-32x33.png" alt="" width="33"
									height="32"><!-- <i class="fa fa-clock-o fa-3x text-primary"></i>
							 --></div>
							<div class="unit-body">
								<span class="text-bold text-gray-base reveal-block">Mon - Sat: 9AM - 6PM</span>
								<span>Sunday CLOSED</span>
							</div>
						</div>
					</li>
					
					<li>
						<div class="unit unit-horizontal unit-middleX unit-spacing-sm">
							<div class="unit-left">
								 <img src="/images/icon-location-32x33.png" alt="" width="33"
									height="33"> 
									<!--<i class="fa fa-map-marker fa-3x text-primary"></i>-->
							</div>
							<div class="unit-body">
								<address class="contact-info">
									<span class="text-bold text-gray-base reveal-block"> 39804 Oak Cliff Drive</span>
									<span>Temecula, CA 92591</span>
								</address>
							</div>
						</div>
					</li>
					
					<li>
						<div class="unit unit-horizontal unit-middleX unit-spacing-sm">
							<div class="unit-left">
								 <img src="/images/icon-phone-32x33.png" alt="" width="33"
									height="32"> 
									<!--<i class="fa fa-phone fa-3x text-primary"></i>-->
							</div>
							<div class="unit-body">
								<a class="text-gray-base text-bold reveal-block" href="callto:{{env('APP_PHONE', '#') }}">(951) 757-4814</a>
								<a
									href="mailto:{{ config('APP_EMAIL', 'info@bradfieldconsulting.com') }}"><span> {{ config('app.email', 'info@bradfieldconsulting.com') }}</span></a>
							</div>
						</div>
					</li>
					
					<li>
						<div class="header_socials unit unit-horizontal hidden-md">
							<a target="_blank" href="{{env('APP_FB','https://www.facebook.com/bradfieldconsulting/')}}"><i class="fa fa-facebook"></i></a> 
							<a target="_blank" href="#"><i class="fa fa-twitter"></i></a> 
							<!-- <a target="_blank" href="#"><i class="fa fa-instagram"></i></a>-->
						</div>
					</li>
				</ul>
</nav>

				<nav class="navbar navbar-inverse collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="{{Route::current()->getName()=='about'?'active':''}}"><a href="/about">About</a></li>
						<li class="{{Route::current()->getName()=='services'?'active':''}}"><a href="/services">Services</a></li>
						<li class="{{Route::current()->getName()=='partners'?'active':''}}"><a href="/partners">Partners</a></li>
						<li class="{{Route::current()->getName()=='contact'?'active':''}}"><a href="/contact">Contact Us</a></li>
						<li class="{{Route::current()->getName()=='calendar'?'active':''}}"><a href="/calendar">Calendar</a></li>
						
					
						<li class="{{Route::current()->getName()=='blog'?'active':''}}"><a href="/blog">Blog</a></li>
						
					</ul>
					
					<ul class="nav navbar-nav navbar-right">
						@if (Auth::guest())
						<li><a href="{{ route('login') }}">Login</a></li>
						<li><a href="{{ route('register') }}">Register</a></li> 
						
						@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle"
							data-toggle="dropdown" role="button" aria-expanded="false"> 
								{{Auth::user()->name }} <span class="caret"></span>
							</a>
							
							<ul class="dropdown-menu" role="menu">
								
								<li class="{{Route::current()->getName()=='posts'?'active':''}}"><a href="/posts">Posts</a></li>
								<li><a href="http://bradfieldconsulting.com/posts/create" > <span class="fa fa-plus-circle "></span> Create Post</a></li>
								<li class="{{Route::current()->getName()=='categories'?'active':''}}"><a href="/categories">Categories</a></li>
								<li class="{{Route::current()->getName()=='tags'?'active':''}}"><a href="/tags">Tags</a></li>
								
								<li role="separator" class="divider"></li>
								<li><a href="{{ route('logout') }}"
									onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><span class="fa fa-sign-out"></span> Logout
									</a></li>
								
								<li>
									<form id="logout-form" action="{{ route('logout') }}"
										method="POST" style="display: none;">{{ csrf_field() }}</form></li>
							</ul>
						</li> 
						@endif
					</ul>
				</nav>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->

</header>