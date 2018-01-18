@extends('layouts.app') @section('title', '| Calendar')

@section('banner')
	<h1>Calendar</h1>
@endsection

@section('content')
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<iframe src="https://calendar.google.com/calendar/embed?height=600&amp;showTitle=0&amp;showTabs=0&amp;showCalendars=0amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=aqelm7m15ue1ig7esl63fvhbjg%40group.calendar.google.com&amp;color=%231e3953&amp;ctz=America%2FLos_Angeles" style="border-width:0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
			
	</div>
</div>

@endsection