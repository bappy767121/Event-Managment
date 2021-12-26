@extends('admin.master')
@section('content')
<hr/>
 <div class="row">
            <div class="col-lg-12">
            	<h3 class="text-center text-success">{{Session::get('message')}}</h3>

                <div class="well">
                    
                    <div class="panel-body">
                          {!! Form::open(['url' => '/type/update', 'method'=>'POST', 'class'=>'form-horizontal']) !!}
                                   <div class="form-group">
                                    
                                   Enter Type Name{{Form::text('typeName',$value=$typeById->typeName,['class'=>'form-control'])}}

                                   </div>
                                  {{Form::hidden('typeId',$value=$typeById->id,['class'=>'form-control'])}}
                                   
                                   <div class="form-group">
                                    
                                   Enter Type Description{{Form::textarea('typeDescription',$value=$typeById->typeDescription,['class'=>'form-control'])}}
                                   
                                   </div>
                                   <div class="form-group">
                                    
                                   Publication Status{{Form::select('status', ['0' => 'Published', '1' => 'Unpublished'], $typeById->status, ['placeholder'=>'Select Publication Status','class'=>'form-control'])}}
                                   
                                   </div>
                                   
                                   <div class="form-group">
                                   {{Form::submit('UPDATE',['class'=>'btn btn-success btn-block', 'name'=>'btn'])}}
                                   
                                    {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
@endsection