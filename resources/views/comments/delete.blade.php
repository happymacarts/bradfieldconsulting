@extends('layouts.app') 

@section('title', '| ')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1> Delete this comment?</h1>
			
			<p><Strong>Name: </Strong>{{$comment->name}}</p>
			<p><Strong>Email: </Strong>{{$comment->email}}</p>
			<p><Strong>Comment: </Strong>{{$comment->comment}}</p>
			<div class="row>">{{ Form::open(['route' =>['comments.destroy',$comment->id], 'method'=>'DELETE'])}}
			<a href="{{url()->previous()}}" class="btn  btn-default">Cancel </a>
			
				{{ Form::submit('Delete this Comment',['class'=>'btn btn-danger']) }}
			
			{{Form::close()}}
			
			</div>
			
		</div>
	</div>
</div>
@endsection	