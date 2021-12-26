<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin-Login</title>

    <!-- Core CSS - Include with every page -->
    <link href="{{asset('admin/')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('admin/')}}/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                          {!! Form::open(['url' => '/login']) !!}
                                   <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    
                                   {{Form::email('email',$value=null,['class'=>'form-control', 'placeholder'=>'Enter email address'])}}
                                   @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                   </div>
                                   <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                   {{Form::password('password',['class'=>'form-control', 'placeholder'=>'Enter password'])}}
                                   @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                   </div>
                                   </div>
                                   <div class="form-group">
                                   <label>{{Form::checkbox('checkbox', 'rememberMe')}}Remember ME</label>
                                   </div>
                                   <div class="form-group">
                                   {{Form::submit('LOGIN',['class'=>'btn btn-success btn-block', 'name'=>'btn'])}}
                                   
                                    {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Core Scripts - Include with every page -->
    <script src="{{asset('admin/')}}/js/jquery-1.10.2.js"></script>
    <script src="{{asset('admin/')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('admin/')}}/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="{{asset('admin/')}}/js/sb-admin.js"></script>

</body>

</html>
