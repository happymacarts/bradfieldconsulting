@extends('layouts.app') 

@section('title', '| Contact Us')

@section('banner')
	<h1>Contact Us</h1>
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form action="{{ url('contact')}}" method="post">
			{{csrf_field()}}
			<input type='hidden' name='recaptcha_token' id='recaptcha_token'>
				<div class="form-group">
					<label name="email">Email:</label>
					<input id="email" name="email" type="email" class="form-control" value="{{old('email')}}">
				</div>
				
				<div class="form-group">
					<label name="email">Subject:</label>
					<input id="subject" name="subject" class="form-control" 
					value ="<?php if(isset($_GET['s'])){echo old('email') ?? 'Free Consult';	}?>">
				</div>
				<div>
					
					@if($errors->has('ecaptcha_token'))
					    {{$errors->first('recaptcha_token')}}
					@endif
				</div>
				
				<div class="form-group">
					<label name="email">Message:</label>
					<textarea id="message" name="message"  class="form-control" value ="{{old('message')}}"></textarea>  
				</div>
				
				<input type="submit" class="btn btn-default" value="Send Message"/>
			</form>			
		</div>
	</div>
	<div class="row">
		<div class="col-lg-3 col-md-6 contact">
			<h3>Contact Info</h3> 
			<ul class="list-unstyled">
				<li><a href="tel:# {{env("APP_PHONE")}}"><span class="fa fa-phone fa-fw text-info"></span>
						{{-- {{config('app.APP_PHONE', " (951) 291-8464")}} --}}
						{{env("APP_PHONE")}}
					</a></li>
				<li><a href="mailto:info@bradfieldconsulting.com"><span class="fa fa-envelope-o fa-fw text-info"></span>
						info@bradfieldconsulting.com</a></li>
				<li><a href="#">
						<span class="fa fa-clock-o fa-fw text-info"></span><span style="display:inline-block; vertical-align:top;margin-left:3px;">
						<span class="text-bold text-gray-base reveal-block">{{config('APP_HOURS', "Mon - Fri 9AM–6PM")}}</span>
						<span>{{config('APP_HOURS_CLOSED', "Saturday & Sunday CLOSED")}}</span></span>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<script src="https://www.google.com/recaptcha/api.js?render={{ env('GOOGLE_CAPTCHA_PUBLIC_KEY') }}"></script>
<script>
grecaptcha.ready(function() {
  grecaptcha.execute('{{ env('GOOGLE_CAPTCHA_PUBLIC_KEY') }}')    .then(function(token) {
   document.getElementById("recaptcha_token").value = token;
 }); });
</script>P
@endsection	