@extends('layouts.app') @section('title', '| Grades')

@section('content')

<style>
span.blue {
	color: #0000ff;
}

small.text-red {
	color: red;
}

.image-panels img {
	min-height: 207px;
}
</style>

<div class="container">
	<div class="col-md-10 col-md-offset-1">
		<img src="{{asset('images/pumas.jpg')}}" class="pull-left image"
			style="float: left; margin-right: 50px;">
		<h1>
			Chaparral High School <br />PSG Website Special <br /> <small
				class="text-red"><strong>Special Pricing only $125
			</strong></small>
		</h1>


		<h2>Use your PSG website to help communicate to your group.</h2>
		<h4>
			Setting up <b><span class="blue">Wordpress</span></b> sites can be an
			<u>intimidating</u> process. <strong>We can help!</strong>
		</h4>
		<p>
			Your group can utilize social media including Facebook, Instagram,
			Twitter and youTube with google calendars to get your important
			message out.<br> <br>
		</p>
		
			<br />
		<div class="row image-panels">
			<div class="col-md-3">
				<img src="{{asset('images/social_media.jpg')}}"
					class="img-responsive" />
				<p class="text-center">
					<strong>Link your Social Media</strong>
				</p>
			</div>

			<div class="col-md-3">
				<img src="{{asset('images/calendar.jpg')}}" class="img-responsive" />
				<p class="text-center">
					<strong class="text-center">Link your google Calendars</strong>
				</p>
			</div>

			<div class="col-md-3">
				<img src="{{asset('images/shopping_cart.png')}}"
					class="img-responsive" />
				<p class="text-center">
					<strong class="text-center">Add Shopping Cart</strong>
				</p>
			</div>

			<div class="col-md-3">
				<img src="{{asset('images/email.png')}}" class="img-responsive" />
				<p class="text-center">
					<strong class="text-center">Post by Email</strong>
				</p>
			</div>

		</div>
		<h1>Package #1 - <strong>$125</strong></h1>
		<h4><strong>What is included&nbsp;</strong></h4>
		<ul>
			<li style="color: rgb(32, 32, 32)">Set up <b>google calendars</b>
				for each of your teams and set up sharing for 2
				coaches/coordinators
			</li>
			<li style="color: rgb(32, 32, 32)">Include links to your existing <b>social
					media</b> accounts
			</li>
			<li style="color: rgb(32, 32, 32)">Set up the ability to <b>post by
					Email</b> from designated addresses
			</li>
			<li style="color: rgb(32, 32, 32)">Set up webstore and link to your
				existing <b>SQUARE account</b>
			</li>
			<li style="color: rgb(32, 32, 32)">Add <b>Donation</b> product to
				store
			</li>
			<li><b><font color="#ff0000">JUST ADDED </font>set up a spirit pack
			</b>(or other product)<b> in your web store</b></li>
		</ul>
		<h2>
			We are offering this $250 value at a Chaparral PSG Special Rate of
			only <b><span class="text-red">$125</span></b>
		</h2>
		<br/>
		<p class="text-center">
			To view a sample Visit&nbsp;<a 
				target="_blank" href="http://wrestling.chsef.org/">http://wrestling.chsef.org/</a>
		</p>
	
		
		<div class="row">
			
			<h1 class="text-center col-md-6 col-md-offset-3">
				<a target="_blank" class="btn btn-success btn-lg btn-block" href="https://goo.gl/forms/fGvLL0Qc3PnpcQHo2">Order Now</a>
					</h1>
			
		</div>
		
		<h1>Package #2 - <strong><span style="text-decoration:line-through;">$35</span> $25</strong></h1>
		<h4>Migration Only Package</h4>
		<h4><strong>What is included&nbsp;</strong></h4>
		<ul>
			<li>Migrate existing site to the [groupname].chsef.org </li>
			<li>Facilitate Domain Purchase - separate fee paid directly to Domain Registrar (GoDaddy)</li>
		</ul>
		
		<h1>Custom packages available</h1>
		<h4><strong>Whats available</strong></h4>
		<ul>
			<li>Image sliders</li>
			<li>Custom Pages</li>
			<li>Blog</li>
			<li>Sign up forms</li>
			<li>Email Newsletters</li>
			<li>Its up to you...</li>
		</ul>
		
		<div class="text-center">
				<h5></h5>
				<h2
					style="margin: 0px; padding: 0px; color: rgb(32, 32, 32); font-size: 22px; line-height: 27.5px">
					Contact Bradfield Consulting&nbsp;<br> <a
						href="mailto:info@bradfieldfieldconsulting.com" target="_blank">info@bradfieldfieldconsulting.<wbr>com
					</a><br>951-757-4813
				</h2>
				<br> <em><span style="color: rgb(169, 169, 169)">We are not endorsed
						nor sponsored by Temecula Valley Unified School District.&nbsp;</span></em>
			</div>
	
	</div>
	@endsection