@extends('layouts.app') @section('title', '| Calendar')

@section('banner')
	<h1>Calendar</h1>
@endsection

@section('content')
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%234285F4&amp;ctz=America%2FLos_Angeles&amp;src=YXFlbG03bTE1dWUxaWc3ZXNsNjNmdmhiamdAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=MGRwa25mZHZiY2xyZDB1YmMzMW5oZWg0dHMyNjRqaW9AaW1wb3J0LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%23DD4477&amp;color=%23871111" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>

	</div>
</div>
<div class="container">
	<div class="row">
		<a class="btn btn-primary btn-lg" href="/contact" role="button">Contact Us</a>
		<a class="btn btn-primary btn-lg" href="https://calendly.com/biztaxconsult" role="button" target="_blank">Schedule a Free Consultation</a>
	</div>
</div>
@endsection