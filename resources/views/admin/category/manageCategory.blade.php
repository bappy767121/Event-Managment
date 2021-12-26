@extends('admin.master')

@section('content')
<hr>
<h2 class="text-center text-">Cetegory Management Table</h2>
<h3 class="text-center text-success">{{Session::get('message')}}</h3>
<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>ID</th>
			<th>Category Name</th>
			<th>Category Description</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	@foreach($categories as $category)

  <tr>
			<th scope="row">{{$category->id}}</th>
			<td>{{$category->categoryName}}</td>
			<td>{{$category->categoryDescription}}</td>
			<td>{{$category->status == 0 ? 'Published' : 'Unpublished'}}</td>
			<td>
				<a href="{{url('/category/edit/'.$category->id)}}" class="btn btn-success">
					<span class="glyphicon glyphicon-edit"></span>
				</a>
				<a href="{{url('/category/delete/'.$category->id)}}" class="btn btn-danger" onclick="return confirm('are you sure to delete');">
					<span class="glyphicon glyphicon-trash"></span>
				</a>
			</td>
			</td>

		</tr>
		@endforeach
	</tbody>
</table>
@endsection