@extends('layouts.app')

@section('title', "| $tag->name Tag")

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>{{strtoupper($tag->name) 	}}
			<small class="badge"> {{ $tag->posts()->count()}} posts</small> 
			<a href="{{route('tags.edit',$tag->id)}}"
						class="pull-right btn   btn-primary">Edit Tag</a>
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
						<th>Tags</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
				@foreach($tag->posts as $post)
					<tr>
						<td>{{ $post->id}}</td>
						<td><a href="{{ route('posts.show', $post->id)}}" >{{ $post->title}}</a></td>
						<td>@foreach($post->tags as $tag)
							<span class="label label-default" >{{ $tag->name}}</span>
						@endforeach</td>
						<td> <a href="{{ route('posts.show', $post->id)}}" class="btn btn-default btn-xs">View</a></td>
					</tr>
				@endforeach
				</tbody>		
			</table>
		</div>
	</div>	
</div>
@endsection