<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="wide wow-animation" >
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-site-verification" content="Sp36SJxvRv6yE5zEgPOXnARg2mmNGyfg65Nj51SbU5U" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('partials._favicon')

    <title>{{ config('app.name', 'Laravel') }} @yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <link href="css/style.css" rel="stylesheet"> -->
    
    @yield('styles')
    
    @yield('head_scripts')
</head>
<body class="{{ camel_case(Route::current()->getName()) ?: 'home' }}">
    <div id="app">
<!-- Navigation -->
	     @include('partials._nav')	    
   
<!-- Slider -->
		<div class="container-fluid">
			<div class="row">
				@yield('slider')
			</div>
	    	
		</div>
<!-- Banner -->		
		<div class=" banner ">
		  <div class="container">
	    	@yield('banner')
	      </div>
		</div>	
			
<!-- Status -->		
		<div class="container mtop-20">
			@include('partials._status')
		</div>
		

		
<!--  Content -->
	    	@yield('content')
	    	@auth



			@endauth    
  
      </div> 
      
<!-- Modal -->
<div class="modal fade" id="bc-modal" tabindex="-1" role="dialog" aria-labelledby="bc-modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="bc-modalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    
<!-- Footer -->  
@include('partials._footer')


   
<!-- Scripts 
    
<script src="{{ asset('js/bootstrap-slider.min.js') }}"></script>-->

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
   
    @yield('foot_scripts') 
</body>
</html>
  