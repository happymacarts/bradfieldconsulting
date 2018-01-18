@section('styles') {!! Html::style('/css/select2.min.css') !!} {!!
Html::style('/css/select2-bootstrap.min.css') !!} @endsection



@section('head_scripts')
<script src="/js/tinymce/tinymce.min.js"></script>
<script src="/js/bc-tinymce.js"></script>


@endsection

@extends('layouts.app') @section('title', '| View Post')

@section('content')


<div class="container">
	<div class="row">
		<div class="col-md-8">
			{!! Form::model($post, ['route' => ['posts.update',$post->id],
			'method'=>'PUT', 'data-parsley-validate'=>'','files'=>true] ) !!} 
			
				{{ Form::label('title','Title:') }} 
				{{ Form::text('title', null,[
					'class'=>'form-control input-lg text-bold',
					'required'=>'',
					'data-parsley-maxlength'=>'255'] ) }} 
				
				{{ Form::label('slug', 'Slug:')}} 
				{{ Form::text('slug', null,[
					'class'=>'form-control', 
					'required'=>'',
					'data-parsley-maxlength'=>'255', 
					'data-parsley-minlength'=>'5' ] )}}

				{{ Form::label('category','Category:')}} 
				{{ Form::select('category_id',$categories,null,['class'=>'form-control'])}} 
				
				{{ Form::label('tags[]','Tags:')}} 
				{{ Form::select('tags[]', $tags,null,[
					'class'=>'form-control select2-multi',
					'multiple'=>'multiple'])}}
				
				@if($post->image)
				<div class="image">
			<img src="{{ asset('images/uploads/'.$post->image) }}" class="img-responsive"/>
			</div>
				@endif	
					<!-- Feature Image -->
				{{ Form::label('featured_image','Update Featured Image:')}}
				{{ Form::file('featured_image',['class'=>'form-control']) }}
				
				
				{{ Form::label('body','Body:') }} 
				{{ Form::textarea('body', null, [
					'class'=>'form-control tinymce',
					'required'=>'']  ) }}
					
					

		</div>

		<div class="col-md-4 well">
			<dl class="dl-horizontal">
				<dt>Created At:</dt>
				<dd>{{date("M j, Y H:ia",strtotime($post->created_at))}}</dd>
				<dt>Last Updated:</dt>
				<dd>{{date("M j, Y H:ia",strtotime($post->updated_at))}}</dd>
			</dl>
			<hr />
			<div class="row">
				<div class="col-sm-6">{!!Html::linkRoute('posts.show','Cancel',
					array($post->id),array('class'=>'btn btn-danger btn-block'))!!}</div>

				<div class="col-sm-6">{{Form::submit('Save Changes', ['class'=>'btn
					btn-success btn-block'])}}</div>
			</div>
		</div>
	</div>
	{!! Form::close() !!}
</div>
@endsection @section('foot_scripts')
<script src="/js/select2.min.js"></script>
<script>
$('.select2-multi').select2({
	theme:"bootstrap"
})
$('.select2-multi').val({!! json_encode($post->tags()->pluck('tag_id') ) !!} ).trigger('change');

</script>
@endsection
