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
                <div class="card card-image" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/pricing-table7.jpg');">
                    <div class="rgba-stylish-strong py-5 px-5 z-depth-4">

                        <form method="POST" action="{{url('student/register')}}" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        <div class="card">

                            <!--Header-->
                            <div class="header pt-3 grey lighten-2">

                                <div class="row d-flex justify-content-start">
                                    <h3 class="blue-text mt-3 mb-4 pb-1 mx-5">REGISTER</h3>
                                </div>

                            </div>
                            <!--Header-->

                            <div class="card-body mx-4 mt-4">

                                <!--Body-->
                                <div class="md-form">
                                    <div class="form-group{{ $errors->has('matricNo') ? ' has-error' : '' }}">
                                        <i class="fa fa-user-plus prefix grey-text"></i>
                                        <label for="orangeForm-name">Matric No</label><br/>
                                        <input type="text" id="matricNo" name="matricNo" class="form-control" value="{{ old('matricNo') }}" autofocus>

                                        @if ($errors->has('matricNo'))
                                            <span class="help-block myError">
                                                <strong>{{ $errors->first('matricNo') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="md-form">
                                    <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                                        <i class="fa fa-user-plus prefix grey-text"></i>
                                        <label for="orangeForm-name">Surname</label><br/>
                                        <input type="text" id="surname" name="surname" class="form-control" value="{{ old('surname') }}" autofocus>

                                        @if ($errors->has('surname'))
                                            <span class="help-block myError">
                                                <strong>{{ $errors->first('surname') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="md-form">
                                    <div class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }}">
                                        <i class="fa fa-user-plus prefix grey-text"></i>
                                        <label for="orangeForm-name">First Name</label><br/>
                                        <input type="text" id="firstName" name="firstName" class="form-control" value="{{ old('firstName') }}" autofocus>

                                        @if ($errors->has('firstName'))
                                            <span class="help-block myError">
                                                <strong>{{ $errors->first('firstName') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="md-form">
                                    <div class="form-group{{ $errors->has('userName') ? ' has-error' : '' }}">
                                        <i class="fa fa-user-plus prefix grey-text"></i>
                                        <label for="orangeForm-name">User Name</label><br/>
                                        <input type="text" id="userName" name="userName" class="form-control" value="{{ old('userName') }}" autofocus>

                                        @if ($errors->has('userName'))
                                            <span class="help-block myError">
                                                <strong>{{ $errors->first('userName') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="md-form">
                                    <div class="form-group{{ $errors->has('dept') ? ' has-error' : '' }}">
                                        <i class="fa fa-user-plus prefix grey-text"></i>
                                        <label for="orangeForm-name">Faculty</label><br/><br/>
                                        <select class="form-control" name="faculty" style="margin-left: 40px; width: 80%;">
                                            <option value="science" selected>Science</option>
                                            <option value="busAdmin">Business Adminstration</option>
                                            <option value="law">Law</option>
                                            <option value="engineering">Engineering</option>
                                            <option value="art">Art</option>
                                        </select>

                                        @if ($errors->has('faculty'))
                                            <span class="help-block myError">
                                                <strong>{{ $errors->first('faculty') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="md-form">
                                    <div class="form-group{{ $errors->has('dept') ? ' has-error' : '' }}">
                                        <i class="fa fa-user-plus prefix grey-text"></i>
                                        <label for="orangeForm-name">Department</label><br/>
                                        <input type="text" id="dept" name="dept" class="form-control" value="{{ old('dept') }}" autofocus>

                                        @if ($errors->has('dept'))
                                            <span class="help-block myError">
                                                <strong>{{ $errors->first('dept') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="md-form">
                                    <div class="form-group{{ $errors->has('level') ? ' has-error' : '' }}">
                                        <i class="fa fa-user-plus prefix grey-text"></i>
                                        <label for="orangeForm-name">Level</label><br/><br/>
                                        <select class="form-control" name="level" style="margin-left: 40px; width: 80%;">
                                            <option value="100" selected>100</option>
                                            <option value="200">200</option>
                                            <option value="300">300</option>
                                            <option value="400">400</option>
                                            <option value="500">500</option>
                                        </select>

                                        @if ($errors->has('level'))
                                            <span class="help-block myError">
                                                <strong>{{ $errors->first('level') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

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
                                    <div class="form-group{{ $errors->has('phoneNo') ? ' has-error' : '' }}">
                                        <i class="fa fa-user-plus prefix grey-text"></i>
                                        <label for="orangeForm-name">Phone No</label><br/>
                                        <input type="text" id="phoneNo" name="phoneNo" class="form-control" value="{{ old('phoneNo') }}" autofocus>

                                        @if ($errors->has('phoneNo'))
                                            <span class="help-block myError">
                                                <strong>{{ $errors->first('phoneNo') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="md-form">
                                    <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                                        <i class="fa fa-user-plus prefix grey-text"></i>
                                        <label for="orangeForm-name">Gender</label><br/><br/>
                                        <label class="radio" style="margin: 50px; width: 30%;">
                                            <input type="radio" name="gender" value="female"> Female
                                        </label>
                                        <label class="radio" style="margin: 50px; margin-left:150px;">
                                            <input type="radio" name="gender" value="male"> Male
                                        </label><br/><br/>

                                        @if ($errors->has('gender'))
                                            <span class="help-block myError">
                                                <strong>{{ $errors->first('gender') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="md-form">
                                    <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                                        <i class="fa fa-user-plus prefix grey-text"></i>
                                        <label for="orangeForm-name">Date Of Birth</label><br/>
                                        <input type="date" id="dob" name="dob" class="form-control" value="{{ old('dob') }}" autofocus>

                                        @if ($errors->has('dob'))
                                            <span class="help-block myError">
                                                <strong>{{ $errors->first('dob') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="md-form">
                                    <div class="form-group{{ $errors->has('passport') ? ' has-error' : '' }}">
                                        <i class="fa fa-user-plus prefix grey-text"></i>
                                        <label for="orangeForm-name">Passport</label><br/><br/>
                                        <input type="file" id="passport" name="passport" class="form-control">

                                        @if ($errors->has('passport'))
                                            <span class="help-block myError">
                                                <strong>{{ $errors->first('passport') }}</strong>
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
                                    <button type="submit" class="btn btn-indigo btn-block z-depth-2">Sign Up</button>
                                </div>
                                <p class="font-small grey-text d-flex justify-content-center">Do you have an account already <a href="{{url('student/login')}}" class="dark-grey-text font-bold ml-1"> Log In</a></p>

                            </div>

                        </div>
                        </form>
                    </div>
                </div>
            </section>

        </div>

        <div class="col">
                  
        </div>

    </div>
</div>

@endsection
