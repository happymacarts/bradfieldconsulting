@extends('layouts.app') 

@section('title', "| Tags") 
<?php

if (isset ( $tag )) {
	$activeTag = $tag;
} else {
	$activeTag = ( object ) [ 
			'id' => - 1 
	];
}
?>
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Tags</h1>
		</div>
	</div>

	<div class="row">


		<div class="col-sm-8">
			@foreach($tags as $tag)
			<div class="input-group mbot-20 tagRow" data-id="{{$tag->id}}">
				<span class="input-group-btn">
					<a href="{{ route('tags.show', $tag->id) }}"
					class="btn btn-default" title="View Posts"><span class="fa fa-folder-open"></span></a>
				</span>
				
				<input type="text"
					class="form-control <?php echo $activeTag->id == $tag->id? "active":""?> "
					value="{{$tag->name}}"> 
				<span class="input-group-btn">
					
					<button class="btn btn-success tagSave" type="button">Save</button>
					<button class="btn btn-danger tagDelete" type="button"
						data-toggle="modal" 
						data-target="#bc-modal"
						data-id="{{$tag->id}}"
						data-name="{{$tag->name}}"><span class="fa fa-times"></span></button>
					
					
					
				</span>
			</div>
			@endforeach
		</div>

		<div class="col-md-3 col-md-offset-1">
			<div class="well">
				<h2>New Tag</h2>
				{!! Form::open([ 'route'=>'tags.store', 'method'=>'POST']) !!}
				<div class="form-group">{{ Form::text('name', null,
					['class'=>'form-control']) }}</div>
				{{ Form::submit('Create New Tag',['class'=>'btn btn-primary
				btn-block']) }} {!!Form::close() !!}
			</div>

		</div>

	</div>

	<p class="text-center col-md-12">{!! $tags->links();!!}

</div>
@endsection @section('foot_scripts')
<script>
$(document).ready(function($){
	$('.tagSave').on('click',function(e){
	    var parentTR = $(this).closest('.tagRow');
		var id = parentTR.data('id');
		var data = {
			id:id,
			name:parentTR.find('input').val(),
			_method: "PATCH"
		}
	    
		$.ajax({
			method:"POST",
			type:"PATCH",
			url:"tags/"+id,
			data:data,
			success:function(msg){
				//console.log('Status: Success');
				location.reload();
				},
			error:function(msg){
				console.log(msg)
				}	
		})
	})
	
	$('#bc-modal').on('click','.confirmTagDelete',function(e){
		var tagId = $(this).data('id');

		$.ajax({
			  url:'/tags/'+  tagId,
			  data:{id:tagId, _method:'DELETE'},
			  method:'POST',
			  type:'DELETE',
			  success:function(msg){
				  console.log(msg);
				  location.reload();
				  }
		  })
	});
	
	$('#bc-modal').on('show.bs.modal', function (event) {
	  var button = $(event.relatedTarget) // Button that triggered the modal
	  var tagName = button.data('name') 
	  var tagId = button.data('id');
	  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
	  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.

	  
	  var modal = $(this)
	  modal.find('.modal-title').text('Confirm Delete of "'+tagName+ '" tag');
	  
	  modal.find('.modal-footer').html(`
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-danger confirmTagDelete" data-id="${tagId}">Delete</button>
		      `)
	})
	
	$('body input.active').focus();
})
</script>
@endsection
