@extends('admin.master')

@section('content')
<hr>
<h2 class="text-center text-">Event Detiels</h2>
<table class="table table-bordered table-hover">
	
		<tr>
			<th>Event Id</th>
			<th>{{$eventByid->id}}</th>
		</tr>
		<tr>
			<th>Event Name</th>
			<th>{{$eventByid->eventName}}</th>
		</tr>
		<tr>
			<th>Category Name</th>
			<th>{{$eventByid->categoryName}}</th>
		</tr>
		<tr>
			<th>Manufacturer Name</th>
			<th>{{$eventByid->typeName}}</th>
		</tr>
		<tr>
			<th>Event Date</th>
			<th>TK {{$eventByid->eventDate}}</th>
		</tr>
		<tr>
			<th>Event Location</th>
			<th>{{$eventByid->eventLocation}}</th>
		</tr>
		<tr>
			<th>Event Short Description</th>
			<th>{{$eventByid->eventShortDescription}}</th>
		</tr>
		<tr>
			<th>Event Description</th>
			<th>{{$eventByid->eventDescription}}</th>
		</tr>
		<tr>
			<th>Event Image</th>
			<th><img src="{{asset($eventByid->eventImage)}}" alt="{{$eventByid->eventName}}" height="200" width="200"></th>
		</tr>
		<tr>
			<th>Event Publication Status</th>
			<th>{{$eventByid->status == 0 ? 'Published' : 'Unpublished'}}</th>
		</tr>

	
	
</table>
@endsection