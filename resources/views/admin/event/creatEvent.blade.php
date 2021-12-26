@extends('admin.master')
@section('content')

 <div class="row">
            <div class="col-lg-12">
              <h2 class="text-center ">Add Event</h2>
            	<h3 class="text-center text-success">{{Session::get('message')}}</h3>

                <div class="well">
                    
                    <div class="panel-body">
                          {!! Form::open(['url' => '/event/save', 'method'=>'POST', 'class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
                                   <div class="form-group{{ $errors->has('eventName') ? ' has-error' : '' }}">
                                    
                                   Enter Event Name{{Form::text('eventName',$value=null,['class'=>'form-control'])}}
                                   @if ($errors->has('eventName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('eventName') }}</strong>
                                    </span>
                                @endif
                              </div>
                                   <div class="form-group">
                                    Category Name
                                    <select class="form-control" name="categoryId">
                                      <option>Select Category Name</option>
                                      @foreach($categories as $category)
                                      <option value="{{$category->id}}">{{$category->categoryName}}</option>
                                      @endforeach

                                    </select>
                                     
                                   </div>
                                   <div class="form-group">
                                    Type Name
                                    <select class="form-control" name="typeId">
                                      <option>Select Type Name</option>
                                      @foreach($types as $type)
                                      <option value="{{$type->id}}">{{$type->typeName}}</option>
                                      @endforeach

                                    </select>
                                     
                                   </div>
                                    <div class="form-group{{ $errors->has('eventDate') ? ' has-error' : '' }}">
                                    
                                   Event Date{{Form::date('eventDate',$value=null,['class'=>'form-control'])}}
                                   @if ($errors->has('eventDate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('eventDate') }}</strong>
                                    </span>
                                @endif
                                   </div>
                                   <div class="form-group{{ $errors->has('eventLocation') ? ' has-error' : '' }}">
                                    
                                   Event Location{{Form::text('eventLocation',$value=null,['class'=>'form-control'])}}
                                   @if ($errors->has('eventLocation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('eventLocation') }}</strong>
                                    </span>
                                @endif
                                   </div>
                                    
                                  <div class="form-group{{ $errors->has('eventShortDescription') ? ' has-error' : '' }}">
                                    
                                   Event Short Description{{Form::textarea('eventShortDescription',$value=null,['class'=>'form-control'])}}
                                   @if ($errors->has('eventShortDescription'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('eventShortDescription') }}</strong>
                                    </span>
                                @endif
                                   </div>

                                   <div class="form-group{{ $errors->has('productDescription') ? ' has-error' : '' }}">
                                    
                                   Event Description{{Form::textarea('eventDescription',$value=null,['class'=>'form-control'])}}
                                   @if ($errors->has('eventDescription'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('eventDescription') }}</strong>
                                    </span>
                                @endif
                                   </div>
                                    <div class="form-group{{ $errors->has('productImage') ? ' has-error' : '' }}">
                                    
                                   Enter Event Image{{Form::file('eventImage',$value=null,['class'=>'form-control', 'accept'=>'image/*'])}}
                                   @if ($errors->has('eventImage'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('eventImage') }}</strong>
                                    </span>
                                @endif
                                   </div>
                                   <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                                    
                                   Publication Status{{Form::select('status', ['0' => 'Published', '1' => 'Unpublished'], null, ['placeholder'=>'Select Publication Status','class'=>'form-control'])}}
                                   @if ($errors->has('status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
                                   </div>
                                   
                                   <div class="form-group">
                                   {{Form::submit('ADD',['class'=>'btn btn-success btn-block', 'name'=>'btn'])}}
                                   
                                    {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
@endsection