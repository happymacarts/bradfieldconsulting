<div class="status" id="bc_status">
	@if (session('danger') || count($errors) > 0)
	<div class="alert alert-danger alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert"
			aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		{{ session('danger') }}
		@if(count($errors) > 0)
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{$error}}</li> @endforeach
		</ul>
		@endif	    	
    </div>

	</div>
	@endif 
	
	@if (session('warning'))
	<div class="alert alert-warning alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert"
			aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		{{ session('warning') }}
	</div>
	@endif 
	
	@if (session('info'))
	<div class="alert alert-info" alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert"
			aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		{{ session('info') }}
	</div>
	@endif 
	
	@if (session('success'))
	<div class="alert alert-success alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert"
			aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		{{ session('success') }}
	</div>
	@endif
</div>