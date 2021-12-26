@extends('admin.master')
@section('content')
<hr/>
 <div class="row">
            <div class="col-lg-12">
            	<h3 class="text-center text-success">{{Session::get('message')}}</h3>

                <div class="well">
                    
                    <div class="panel-body">
                          {!! Form::open(['url' => '/category/update', 'method'=>'POST', 'class'=>'form-horizontal']) !!}
                                   <div class="form-group">
                                    
                                   Enter Category Name{{Form::text('categoryName',$value=$categoyById->categoryName,['class'=>'form-control'])}}

                                   </div>
                                  {{Form::hidden('categoryId',$value=$categoyById->id,['class'=>'form-control'])}}
                                   
                                   <div class="form-group">
                                    
                                   Category Description{{Form::textarea('categoryDescription',$value=$categoyById->categoryDescription,['class'=>'form-control'])}}
                                   
                                   </div>
                                   <div class="form-group">
                                    
                                   Publication Status{{Form::select('status', ['0' => 'Published', '1' => 'Unpublished'], $categoyById->status, ['placeholder'=>'Select Publication Status','class'=>'form-control'])}}
                                   
                                   </div>
                                   
                                   <div class="form-group">
                                   {{Form::submit('UPDATE',['class'=>'btn btn-success btn-block', 'name'=>'btn'])}}
                                   
                                    {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
@endsection