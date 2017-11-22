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

                        <form method="POST" action="{{url('password/email')}}">

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
                                @include('layouts.error')

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

                                <div class="text-center mb-4">
                                    <button type="submit" class="btn btn-indigo btn-block z-depth-2">Send Password Reset Link</button>
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
