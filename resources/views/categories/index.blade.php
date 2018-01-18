@extends('layouts.app')

@section('title', "| Categories")

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Categories <!-- <a href="{route('categories.show')}}"
					class="pull-right btn btn-lg btrn-block btn-primary">Create Category</a> -->
			</h1>
		</div>
	</div>

	<div class="row">
	
		<div class="col-sm-8">
			@foreach($categories as $category)
			<div class="input-group mbot-20 categoryRow" data-id="{{$category->id}}">
				<input type="text" class="form-control" value="{{$category->name}}"> <span
					class="input-group-btn">
				
					<button class="btn btn-success categorySave" type="button">Save!</button>
					<button class="btn btn-danger categoryDelete" type="button" 
						data-toggle="modal" 
						data-target="#bc-modal"
						data-id="{{$category->id}}"
						data-name="{{$category->name}}"
						><span class="fa fa-times"></span></button>
			
					
				</span>
			</div>
			@endforeach
		</div>
	
<!-- 		<div class="col-md-8">
			<table class="table table-stripped">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach($categories as $category)
					<tr>
						<td>{{$category->id}}</td>
						<td>{{$category->name}}</td>
						
						<td>{{date('M j, Y', strtotime($category->created_at))}}</td>
						<td>{!!Html::linkRoute('categories.show','View',
							array($category->id),array('class'=>'btn btn-default '))!!}
							
							{!!Html::linkRoute('categories.edit','Edit',
							array($category->id),array('class'=>'btn btn-primary '))!!}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<div class="text-center">
				!! $categories->links();!!}
			</div>
		</div> -->
		
		<div class="col-md-4">
			<div class="well">
			<h2>New Category</h2>
				{!! Form::open([
					'route'=>'categories.store',
					'method'=>'POST']) !!}
				<div class="form-group">
					{{ Form::text('name', null, ['class'=>'form-control','placeholder'=>'tag name']) }}
				</div>	
					{{ Form::submit('Create New Category',['class'=>'btn btn-primary btn-block']) }}
				{!!Form::close() !!}
			</div>
			
		</div>
	</div>
</div>

@endsection 

@section('foot_scripts')
<script>


$(document).ready(function($){
	

	$('.categorySave').on('click',function(e){
	    var parentTR = $(this).closest('.categoryRow');
		var id = parentTR.data('id');
		var data = {
			id:id,
			name:parentTR.find('input').val(),
			_method: "PATCH"
		}
	    
		$.ajax({
			method:"POST",
			type:"PATCH",
			url:"categories/"+id,
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
	
	$('#bc-modal').on('click','.confirmCategoryDelete',function(e){
		var categoryId = $(this).data('id');

		$.ajax({
			  url:'categories/'+  categoryId,
			  data:{id:categoryId,_method:'DELETE'},
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
	  var categoryName = button.data('name') 
	  var categoryId = button.data('id');
	  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
	  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.

	  
	  var modal = $(this)
	  modal.find('.modal-title').text('Confirm Delete of "'+categoryName+ '" category');
	  
	  modal.find('.modal-footer').html(`
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-danger confirmCategoryDelete" data-id="${categoryId}">Delete</button>
		      `
		      )
	})
})
</script>
@endsection
