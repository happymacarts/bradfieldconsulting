@extends('layouts.app') 

@section('title', "| Edit Comment")

@section('styles')
<!-- Page styles -->
<link href="/css/bootstrap-switch.min.css">
<style>
.bootstrap-switch input{
    display:none;
}

.bootstrap-switch.bootstrap-switch-wrapper.bootstrap-switch-animate.bootstrap-switch-off {
    color: #ccc;
}

.bootstrap-switch.bootstrap-switch-wrapper.bootstrap-switch-animate.bootstrap-switch-on {
    color: #000;
}
</style>
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h1>Edit Comment</h1>
			
			{{ Form::model($comment, ['route'=>['comments.update',$comment->id],'method'=>'PUT']) }}
			
			<div class="switch">
			<input type="checkbox" name="approved" data-off-text='' data-on-text='' data-label-text='<span class="fa fa-eye fa-2x"></span>' />

			</div>
		<div class="form-group">
			{{ Form::label('name','Name:')}} 
			{{ Form::text('name',null,['class'=>'form-control','disabled'=>'disabled']) }}
		</div>
	
		<div class="form-group">
			{{ Form::label('email','Email:')}} 
			{{ Form::text('email',null,['class'=>'form-control','disabled'=>'disabled']) }}
		</div>
		
		<div class="form-group">
			{{ Form::label('comment','Comment:')}} 
			{{ Form::textarea('comment',null,['class'=>'form-control']) }}
		</div>
		<a href="{{ url()->previous() }}" class="btn btn-default">Cancel</a>
		{{ Form::submit('Update Comment',['class'=>'btn btn-primary']) }}
	
			{{ Form::close() }}
		</div>
	</div>
</div>
@endsection
@section('foot_scripts')

<script src="/js/bootstrap-switch.min.js"></script>
<script>

$(document).ready(function(){
	console.log('ready');
	$("[name='approved']").bootstrapSwitch();
})
</script>

@endsection