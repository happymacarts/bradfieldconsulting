@extends('layouts.app') 

@section('styles')
<style>
</style>
@endsection 

@section('slider')
<div class="sliderx">
<!-- 	<div class="page-header hidden-xs">
		<h1 class="text-primary">
			<span class="welcome">Welcome to</span> {{config('app.name',
			'BradfieldConsulting.com')}} <small></small>
		</h1>
	</div> -->
	<img class="img-responsive" src="images/slider1.png" />
	@section('status')
	@include('layouts.status')
	@endsection

</div>
@endsection 

@section('content')


<div class="container">
	<div class="jumbotron">
		<img class="img-responsive mx-auto d-block" src="/images/bc_logo.png">
		<h1 class="display-1" style="font-size: 53px;">
			Welcome to Bradfield Consulting, Inc.
		</h1>
		<p class="lead">Bradfield Consulting, Inc. is dedicated to assisting and helping to develop new and established businesses that would like to get a grasp on their financial picture. Do you know what it costs to run your operations every day? By hour? Are you looking to expand but don't know how? Are you losing revenue and afraid you may have to close your doors? </p>
		<hr class="my-4">
		<p>Book a free consultation today so we can see how to improve your business financials and long term goals...</p>
		<p class="lead">
		<!-- <a class="btn btn-primary btn-lg" href="/contact?s=Free Consultation" role="button">Free Consultation</a> -->
		<a class="btn btn-primary btn-lg" href="https://calendly.com/biztaxconsult" target="_blank" role="button">Free Consultation</a>
		</p>
	</div>
	<div>
		<h2>CHECK OUT OUR LATEST PRESS RELEASE:</h2>
		<p>
			<a targrt="_blank" href="https://www.issuewire.com/local-business-owner-ana-bradfield-named-to-nsba-leadership-council-1738716902526802"> Press Release</a>
		</p>
	</div>
	<div class="powr-social-feed" id="45b7105a_1647967063"></div><script src="https://www.powr.io/powr.js?platform=html"></script>
</div>
@endsection

@section('foot_scripts')
<script>

</script>
@endsection

