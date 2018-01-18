@extends('layouts.app') 

@section('styles')
<style>
</style>
@endsection 

@section('slider')
<div class="sliderx">
	<div class="page-header hidden-xs">
		<h1 class="text-primary">
			<span class="welcome">Welcome to</span> {{config('app.name',
			'BradfieldConsulting.com')}} <small></small>
		</h1>
	</div>
	<img class="img-responsive" src="images/home-slide-1.jpg" />
	@section('status')
	@include('layouts.status')
	@endsection

</div>
@endsection 

@section('content')

<div class="container">
    <div class="row">
    	<div class="col-md-3">
    	
    	</div>
    
    </div>
</div>
@endsection

@section('foot_scripts')
<script>

</script>
@endsection

