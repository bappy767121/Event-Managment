@extends('admin.master')
@section('content')
<hr/>
 <div class="row">
            <div class="col-lg-12">
            	<h3 class="text-center text-success">{{Session::get('message')}}</h3>

                <div class="well">
                    
                    <div class="panel-body">
                          {!! Form::open(['url' => '/category/save', 'method'=>'POST', 'class'=>'form-horizontal']) !!}
                                   <div class="form-group">
                                    
                                   Enter Category Name{{Form::text('categoryName',$value=null,['class'=>'form-control'])}}
                                   
                                   </div>

                                   <div class="form-group">
                                    
                                   Category Description{{Form::textarea('categoryDescription',$value=null,['class'=>'form-control'])}}
                                   
                                   </div>
                                
                                   <div class="form-group">
                                    
                                   Publication Status{{Form::select('status', ['0' => 'Published', '1' => 'Unpublished'], null, ['placeholder'=>'Select Publication Status','class'=>'form-control'])}}
                                   
                                   </div>
                                   
                                   <div class="form-group">
                                   {{Form::submit('SAVE',['class'=>'btn btn-success btn-block', 'name'=>'btn'])}}
                                   
                                    {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
@endsection