@extends('layouts.app')

@section('title', "| Blog")

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Blog</h1>
			
		</div>
	</div>
@foreach($posts as $post)
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h2>{{$post->title}}</h2>
			<h5>Published at: {{date("M j, Y H:ia",strtotime($post->created_at))}}</h5>
			
			@if($post->image)
			<div class="row">
				<div class="col-md-6">
					<div class="image">
						<img src="{{ asset('images/uploads/'.$post->image) }}"
							class="img-responsive" />
					</div>
				</div>
			</div>
			
			@endif
			
			
			<p class="lead">{{ substr(strip_tags($post->body), 0,300) }}
				{{ strlen(strip_tags($post->body)) > 300 ? '&hellip;':''}}
				</p>
			<a class="btn btn-lg btn-primary" href="{{route('blog.single',$post->slug)}}">Read More</a>
			<hr/>
		</div>
		
	</div>
@endforeach
<div class="text-center">{{$posts->links()}}</div>
</div>	
@endsection