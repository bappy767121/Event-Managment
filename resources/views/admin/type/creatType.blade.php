@extends('admin.master')
@section('content')
<hr/>
 <div class="row">
            <div class="col-lg-12">
            	<h3 class="text-center text-success">{{Session::get('message')}}</h3>

                <div class="well">
                    
                    <div class="panel-body">
                          {!! Form::open(['url' => '/type/save', 'method'=>'POST', 'class'=>'form-horizontal']) !!}
                                   <div class="form-group">
                                    
                                   Enter Type Name{{Form::text('typeName',$value=null,['class'=>'form-control'])}}
                                   
                                   </div>

                                   <div class="form-group">
                                    
                                   Type Description{{Form::textarea('typeDescription',$value=null,['class'=>'form-control'])}}
                                   
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