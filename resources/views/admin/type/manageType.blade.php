@extends('admin.master')

@section('content')
<hr>
<h2 class="text-center text-">Type Management Table</h2>
<h3 class="text-center text-success">{{Session::get('message')}}</h3>
<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>ID</th>
			<th>Type Name</th>
			<th>Type Description</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	@foreach($types as $type)

  <tr>
			<th scope="row">{{$type->id}}</th>
			<td>{{$type->typeName}}</td>
			<td>{{$type->typeDescription}}</td>
			<td>{{$type->status == 0 ? 'Published' : 'Unpublished'}}</td>
			<td>
				<a href="{{url('/type/edit/'.$type->id)}}" class="btn btn-success">
					<span class="glyphicon glyphicon-edit"></span>
				</a>
				<a href="{{url('/type/delete/'.$type->id)}}" class="btn btn-danger" onclick="return confirm('are you sure to delete');">
					<span class="glyphicon glyphicon-trash"></span>
				</a>
			</td>
			</td>

		</tr>
		@endforeach
	</tbody>
</table>
@endsection