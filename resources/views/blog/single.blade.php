@extends('layouts.app')
<?php $titleTag = htmlspecialchars($post->title);?>
@section('title', "| $titleTag")

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>{{$post->title}}</h1>
			
			<div class="image">
			<img src="{{ asset('images/uploads/'.$post->image) }}" class="img-responsive"/>
			</div>

			<p class="lead">{!!$post->body!!}</p>
			<hr />
			<p></p>
			
			
		</div>
		
		
		<div class="col-md-4 well">
			<dl class="">
				<dt>URL Slug</dt>
				<dd>
					<a href="{{ route('blog.single',$post->slug)}}">{{
						route('blog.single',$post->slug)}}</a>
				</dd>
				<dt>Created At:</dt>
				<dd>{{date("M j, Y H:ia",strtotime($post->created_at))}}</dd>
				<dt>Last Updated:</dt>
				<dd>{{date("M j, Y H:ia",strtotime($post->updated_at))}}</dd>
				<dt>Posted in:</dt>
				<dd>{{ $post->category->name }}</dd>
			</dl>
			<hr />
			
			@auth
			<div class="row">
				<div class="col-sm-6">{!!Html::linkRoute('posts.edit','Edit',
					array($post->id),array('class'=>'btn btn-primary btn-block'))!!}</div>

				<div class="col-sm-6">{!! Form::open([ 'route'=> ['posts.destroy',
					$post->id], 'method'=>'DELETE', ])!!} {!!Form::submit('Delete',
					['class'=>'btn btn-danger btn-block']) !!} {!! Form::close()!!}</div>
			</div>
			@endauth

		</div>
	</div>
	<hr/>
	<!--  View Comments -->
	
	<div class="row">
	<div class="col-md-8 col-md-offset-2"><h3><span class="fa fa-comment"></span> {{$post->comments->count()}} Comment{{ $post->comments->count()>1?"s":""}} </h3></div> 
		<div class="col-md-8 col-md-offset-2">
			@foreach($post->comments as $comment)

			<div class="comment">
				<div class="media">
					<div class="media-left">
						<!-- <a href="#"> --> 
						<img class="media-object" src="{{'https://www.gravatar.com/avatar/'.md5(strtolower(trim($comment->email))) .'?s=50&d=identicon' }}" alt="...">
						<!-- </a> -->
					</div>
					<div class="media-body">
						<h4 class="media-heading"><strong>{{$comment->name}}</strong></h4>
						<p class="text-muted"><em>{{date("M j, Y g:iA",strtotime($comment->created_at))}}</em>
						<p>{{$comment->comment}}</p>
					</div>
				</div><hr/>
			</div>

			@endforeach
		</div>
	</div>
	
	<!--  Add Comments -->
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			{{ Form::open([ 'route'=>['comments.store',$post->id],
			'method'=>'POST']) }}
			
			<div class="row">
			
				<div class="form-group col-md-6">{{ Form::label('name','Name:') }}
					{{ Form::text('name',null,['class'=>'form-control']) }}
				</div>

				<div class="form-group col-md-6">{{Form::label('email','Email:')}}
					{{Form::email('email',null,['class'=>'form-control','type'=>'email'])}}
				</div>
				
				<div class="form-group col-md-12">{{Form::label('comment','Comment:')}}
					{{Form::textarea('comment',null,['class'=>'form-control','rows'=>5])}}
				</div>

				<div class="form-group col-md-12">{{ Form::submit('Add
					Comment',['class'=>'btn btn-primary btn-block'])}}
				</div>
				
			</div>

			{{Form::close()}}
		</div>
	</div>
	
	
</div>
@endsection




