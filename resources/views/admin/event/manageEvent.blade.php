@extends('admin.master')

@section('content')
<hr>
<h2 class="text-center text-">Event Management Table</h2>
<h3 class="text-center text-success">{{Session::get('message')}}</h3>
<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Event Name</th>
			<th>Category Name</th>
			<th>Type Name</th>
			<th>Event Date</th>
			<th>Event Location</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	@foreach($events as $event)

  		<tr>
			<th scope="row">{{$event->eventName}}</th>
			<td>{{$event->categoryName}}</td>
			<td>{{$event->typeName}}</td>
			<td>{{$event->eventDate}}</td>
			<td>{{$event->eventLocation}}</td>
			<td>{{$event->status == 0 ? 'Published' : 'Unpublished'}}</td>
			<td>
				<a href="{{url('/event/view/'.$event->id)}}" class="btn btn-info">
					<span class="glyphicon glyphicon-info-sign" title="Event View"></span>
				</a>
				<a href="{{url('/event/edit/'.$event->id)}}" class="btn btn-success">
					<span class="glyphicon glyphicon-edit"title="Event Edit"></span>
				</a>
				<a href="{{url('/event/delete/'.$event->id)}}" class="btn btn-danger" title="Event Delete"onclick="return confirm('are you sure to delete');">
					<span class="glyphicon glyphicon-trash"></span>
				</a>
			</td>
			</td>

		</tr>
		@endforeach
	</tbody>
</table>
@endsection