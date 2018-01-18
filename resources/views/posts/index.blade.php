@extends('layouts.app') @section('title', '| All Posts')

@section('styles')
<style>
.image {
	display: inline;
}

img.img-responsive.img-thumbnail {
	max-height: 50px;
}
</style>
@endsection 

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>
				All Posts <a href="{{route('posts.create')}}"
					class="pull-right btn btn-lg  btn-primary">Create Post</a>
			</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<table class="table table-stripped">
				<thead>
					<tr>
						<th>#</th>
						<th>Title</th>
						<th>Body</th>
						<th>Created At</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach($posts as $post)
					<tr>
						<th>{{$post->id}}</th>
						<th>
						@if($post->image)
						
						<div class="image">
							<img src="{{ asset('images/uploads/'.$post->image) }}"
								class="img-responsive img-thumbnail" />
						</div>
						
						
						@endif
						{{$post->title}}</th>
						<th>{{substr(strip_tags($post->body),0,50)}}{{
							strlen(strip_tags($post->body))>50?"&hellip;":"" }}</th>
						<th>{{date('M j, Y', strtotime($post->created_at))}}</th>
						<th>{!!Html::linkRoute('posts.show','View',
							array($post->id),array('class'=>'btn btn-default '))!!}
							{!!Html::linkRoute('posts.edit','Edit',
							array($post->id),array('class'=>'btn btn-primary '))!!}</th>
					</tr>
					@endforeach
				</tbody>
			</table>
			<div class="text-center">
				{!! $posts->links();!!}
			</div>
		</div>
	</div>
</div>
@endsection
