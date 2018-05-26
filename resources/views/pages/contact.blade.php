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
			<div class="form-group">
				<label name="email">Email:</label>
				<input id="email" name="email" type="email" class="form-control">
			</div>
			
			<div class="form-group">
				<label name="email">Subject:</label>
				<input id="subject" name="subject" class="form-control">
			</div>
			
			<div class="form-group">
				<label name="email">Message:</label>
				<textarea id="message" name="message"  class="form-control"></textarea>  
			</div>
			
			<input type="submit" class="btn btn-default" value="Send Message"/>
		</form>
		
		</div>
	</div>
</div>
@endsection	