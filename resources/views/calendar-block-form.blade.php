@extends('layouts.app') 

@section('title', '| Calendar Blocks')

@section('banner')
	<h1>Calendar Blocks</h1>
@endsection

@section('content')
<div class="container">
	<form action="/calendar-blocks" method="POST" class="form">
		@csrf
	@for($i=0; $i<7;$i++)
		<div class="row mb-2" style="margin:25px -15px; padding-bottom:10px;border-bottom:1px solid #ccc;" data-day="{{jddayofweek($i-1, 1)}}">
			<div class="col-md-2 col-md-offset-2">
				<label>
					<input type="checkbox" name="days[]" value="{{$i}}" />
					{{jddayofweek($i-1, 1)}}
				</label>
			</div>

			<div class="time-blocks_{{$i}} col-md-4">
				<div class="time-block_{{$i}} row" data-item="1">
					<div class="col-md-6">
						<select name="start_time_{{$i}}" class="form-control select2">
							<option value="-1">Start Time</option>
							@for($hours=0; $hours<24; $hours++) 
				    			@for($mins=0; $mins<60; $mins+=30) 
				       				<option>{{str_pad($hours,2,'0',STR_PAD_LEFT).':'.str_pad($mins,2,'0',STR_PAD_LEFT)}}{{$hours>=12 ?' pm':' am'}}</option>
				       				{{-- <option>{{$hours.':'.str_pad($mins,2,'0',STR_PAD_LEFT).$hours>=12 ?' pm':' am'}}</option> --}}
				                @endfor
				            @endfor
				        </select>
			    	</div>

					<div class="col-md-6">
				        <select name="send_time_{{$i}}" class="form-control select2">
				        	<option value="-1">End Time</option>
							@for($hours=0; $hours<24; $hours++) 
				    			@for($mins=0; $mins<60; $mins+=30) 
				       				<option>{{str_pad($hours,2,'0',STR_PAD_LEFT).':'.str_pad($mins,2,'0',STR_PAD_LEFT)}}</option>
				                @endfor
				            @endfor
				        </select>
				    </div>
				</div>
			</div>

	        <input type="button" class="btn btn-primary btn-add col-md-1" value="Add" name="add_{{$i}}" data-day="{{$i}}">

		</div>
	@endfor
	<button class="btn btn-success" type="submit">Save</button>
	</form>
</div>
@endsection
@section("foot_scripts")
<script>
$(document).ready(function(){
	$(document).on('click', '.btn-add', function(e){
		e.preventDefault();
		day = $(this).data('day')
		$item = $(this).parent().find('.time-block_'+day).last().data('item', +1).clone().appendTo('.time-blocks_'+day);
		$item.attr('data-item',$item.data('item')+1)
		console.log($item.data('item'));

	})
})
</script>
@endsection
