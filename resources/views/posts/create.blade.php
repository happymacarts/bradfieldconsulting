@extends('layouts.app')
@section('title', '| Create New Post')

@section('styles')
{!! Html::style('/css/select2.min.css') !!}
{!! Html::style('/css/select2-bootstrap.min.css') !!}
{!! Html::style('/css/parsley.css') !!}

@endsection

@section('head_scripts')
<script src="/js/tinymce/tinymce.min.js"></script>
<script src="/js/bc-tinymce.js"></script>


@endsection
@section('content')

<div class="row">
	<div class="col-md-8 col-md-offset-2">
		{!! Form::open(['route' => 'posts.store','data-parsley-validate'=>'','files'=>true]) !!}
			{{ Form::label('title','Title:') }}
			{{ Form::text('title', null, array('id'=>'newPostTitle','class'=>'form-control','required'=>'','data-parsley-maxlength'=>'255') ) }}
			
			{{ Form::label('slug', 'Slug:')}}
			{{ Form::text('slug', null, [
				'id'=>'newPostSlug',
				'class'=>'form-control',
				'required'=>'',
				'data-parsley-maxlength'=>'255',
				'data-parsley-minlength'=>'5' 
				] )}}
			
			{{ Form::label('category_id','Category:')}}
			
			<!-- Categories -->
			<select class="form-control" name="category_id">
				@foreach($categories as $category)
					<option value="{{ $category->id }}"> {{ $category->name }} </option>
				@endforeach
				
			</select>
			
			<!--  Tags -->
			{{ Form::label('tags','Tags:')}}
			<select class="form-control select2-multi" name="tags[]" multiple="multiple">
				@foreach($tags as $tag)
					<option value="{{ $tag->id }}"> {{ $tag->name }} </option>
				@endforeach
				
			</select>
			<!-- Feature Image -->
			{{ Form::label('featured_image','Upload Featured Image:')}}
			{{ Form::file('featured_image',['class'=>'form-control']) }}
			
			<!--  Body  -->
    		{{ Form::label('body','Body:') }}
			{{ Form::textarea('body', null, array('class'=>'form-control tinymce') ) }}
			
			{{ Form::submit('Create New Post',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px;')) }}
   
		{!! Form::close() !!}
	</div>
</div>
@endsection

@section('foot_scripts')
<script src="/js/parsley.min.js"></script>
<script src="/js/select2.min.js"></script>
<script>
$('.select2-multi').select2({
	theme:"bootstrap"
});
$('#newPostTitle').on('input',function(e){
	var str =  $(this).val().toLowerCase().replace(/\s+/g,'-') ;

	$('#newPostSlug').val(encodeURI(str));
	
	
})

</script>
@endsection