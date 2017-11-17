@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row space">
                
    </div>
</div>
        
<div class="container">
    <div class="row">
        <div class="col">
                  
        </div>

        <div class="col-9">
            <section class="form-simple">

                <!--Form without header-->

                        <form method="POST" action="{{url('student/password/reset')}}" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        <div class="card">

                            <!--Header-->
                            <div class="header pt-3 grey lighten-2">

                                <div class="row d-flex justify-content-start">
                                    <h3 class="blue-text mt-3 mb-4 pb-1 mx-5">RESET PASSWORD</h3>
                                </div>

                            </div>
                            <!--Header-->

                            <div class="card-body mx-4 mt-4">

                                <!--Body-->

                                <div class="md-form">
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <i class="fa fa-user-plus prefix grey-text"></i>
                                        <label for="orangeForm-name">Email</label><br/>
                                        <input type="text" id="email" name="email" class="form-control" value="{{ old('email') }}" autofocus>

                                        @if ($errors->has('email'))
                                            <span class="help-block myError">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="md-form">
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <i class="fa fa-user-plus prefix grey-text"></i>
                                        <label for="orangeForm-name">Password</label><br/>
                                        <input type="password" id="password" name="password" class="form-control" value="{{ old('password') }}" autofocus>

                                        @if ($errors->has('password'))
                                            <span class="help-block myError">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="md-form">
                                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                        <i class="fa fa-user-plus prefix grey-text"></i>
                                        <label for="orangeForm-name">Confirm Password</label><br/>
                                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}" autofocus>

                                        @if ($errors->has('password_confirmation'))
                                            <span class="help-block myError">
                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                            </span><br/><br/>
                                        @endif
                                    </div>
                                </div>

                                <div class="text-center mb-4">
                                    <button type="submit" class="btn btn-indigo btn-block z-depth-2">Reset</button>
                                </div>
                            </div>

                        </div>
                        </form>
                    
            </section>

        </div>

        <div class="col">
                  
        </div>

    </div>
</div>

@endsection
