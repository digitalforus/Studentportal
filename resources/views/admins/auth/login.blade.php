@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-1-12|auto space">
                  
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col">
                  
        </div>
        <div class="col-md-8 col-md-offset-2">
            <section class="form-simple">
                <form method="POST" action="{{url('admin/login')}}">

                @include('layouts.error')

                {{ csrf_field() }}
                <div class="card">
                    <div class="header pt-3 grey lighten-2">

                        <div class="row d-flex justify-content-start">
                            <h3 class="deep-grey-text mt-3 mb-4 pb-1 mx-5">ADMIN LOG IN</h3>
                        </div>

                    </div>

                     <div class="card-body mx-4 mt-4">

                        <div class="md-form">
                            <i class="fa fa-envelope prefix grey-text"></i>
                            <label for="orangeForm-userName">Email</label><br>
                            <input type="text" id="email" name="email" class="form-control">
                        </div>


                        <div class="md-form">
                            <i class="fa fa-user-plus prefix grey-text"></i>
                            <label for="orangeForm-name">Password</label><br/>
                            <input type="password" id="password" name="password" class="form-control">
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button><br/>

                                <a class="dark-grey-text font-bold ml-1" href="{{url('admin/password/reset') }}">
                                    Forgot Your Password?
                                </a><br/><br/>
                            </div>
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
