@extends('layouts.app') 

@section('title', "| $post->title")

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h1>{{$post->title}}</h1>
			<div class="image">
			<img src="{{ asset('images/uploads/'.$post->image) }}" class="img-responsive"/>
			</div>

			<p class="lead">{!! $post->body !!}</p>
			<hr />
			<div class="tags">
				@foreach($post->tags as $tag) <span class="label label-default">{{
					$tag->name }}</span> @endforeach
			</div>
			
			<div class="backend-comments">
				<h3>Comments</h3>
				<table class="table">
				<thead>
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Comment</th>
					<th></th>
				</tr>
				</thead>
				<tbody>
				@foreach($post->comments as $comment)
				<tr>
					<td>{{$comment->name}}</td>
					<td>{{$comment->email}}</td>
					<td>{{$comment->comment}}</td>
					<td>
						<a href="{{Route('comments.edit',$comment)}}" class="btn btn-primary btn-xs"><span class="fa fa-pencil"></span></a>
						<a href="{{Route('comments.delete',$comment->id)}}" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span></a>
					</td>
				</tr>
				@endforeach
				</tbody>
				</table>
			</div>

		</div>
		<div class="col-md-4 well">
			<dl class="">
				<dt>URL Slug</dt>
				<dd>
					<a href="{{ route('blog.single',$post->slug)}}">{{
						route('blog.single',$post->slug)}}</a>
				</dd>
				<dt>Category</dt>
				<dd>{{ $post->category->name}}
				
				
				<dt>Created At:</dt>
				<dd>{{date("M j, Y H:ia",strtotime($post->created_at))}}</dd>
				<dt>Last Updated:</dt>
				<dd>{{date("M j, Y H:ia",strtotime($post->updated_at))}}</dd>
			</dl>
			<hr />
			<div class="row">
				{!! Form::open([ 'route'=> ['posts.destroy',
				$post->id],'method'=>'DELETE', ])!!}
				<div class="btn-group btn-group-justified" role="group"
					aria-label="...">
					
					<div class="btn-group " role="group" aria-label="...">
						<a href="{{URL::previous()}}" class="btn btn-default"><span
							class='fa fa-angle-double-left'></span> Back</a>
					</div>
					
					<div class="btn-group " role="group" aria-label="...">
						{!!Html::linkRoute('posts.edit','Edit', [$post->id],['class'=>'btn
						btn-primary'] )!!}</div>
						
					<div class="btn-group " role="group" aria-label="...">
						{!!Form::submit('Delete', ['class'=>'btn btn-danger ']) !!}</div>

				</div>
			</div>
			{!! Form::close()!!}
		</div>
	</div>
</div>
</div>
@endsection
