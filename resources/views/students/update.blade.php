@extends('layouts.app')

@if(Auth::guard('student')->check())
	@section('content')
    <div>
		<div class="container-fluid">
		    <div class="row space">
		        
		    </div>
		</div>

		<div class="container-fluid" >
			<div class="row">
				<nav class="col-sm-4 col-md-3 d-none d-sm-block bg-light sidebar">
					<ul class="nav nav-pills flex-column">
                        <img src="{{Storage::url( $student->photoId) }}" width="200" height="200" class="img-fluid rounded-circle" alt="Display Picture" style="margin: 20px auto;"><br/><br/>
                                
						<li class="nav-item">
                            <a class="nav-link" href="{{url('/dashboard')}}">View Biodata</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{url('student/update',$student->id)}}">Update Biodata</a>
                        </li>
						<li class="nav-item">
							<a class="nav-link" href="#">Online Test</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#" onclick="popup(document.getElementById('edit-student-password'))">Change Password</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{url('student/logout')}}">Logout</a>
						</li>
					</ul>
				</nav>

				<main class="col-sm-8 ml-sm-auto col-md- pt-3" role="main">
                     
					<h2>Edit Biodata</h2>
					<div class="table-responsive">
                        <form method="POST" action="{{url('student/update',$student->id)}}">
						<table class="table table-striped">
                            {{ csrf_field() }}
                            
                            <tbody>
                               	<tr>
                                    <td><b>Matric No</b></td>
                                    <td>{{$student->matricNo}}</td>
                                </tr>
                                <tr>
                                    <td><b>Surname</b></td>
                                    <td>
                                        <div class="md-form">
                                            <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                                                <i class="fa fa-user-plus prefix grey-text"></i>
                                                <input type="text" id="surname" name="surname" class="input-alternate" style="width: 95%; margin: 0px;" value="{{ $student->surname }}" autofocus>

                                                @if ($errors->has('surname'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('surname') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>First Name</b></td>
                                    <td>
                                        <div class="md-form">
                                            <div class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }}">
                                                <i class="fa fa-user-plus prefix grey-text"></i>
                                                <input type="text" id="firstName" name="firstName" class="input-alternate" style="width: 95%; margin: 0px;" value="{{ $student->firstName }}" autofocus>

                                                @if ($errors->has('firstName'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('firstName') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>User Name</b></td>
                                    <td>
                                        <div class="md-form">
                                            <div class="form-group{{ $errors->has('userName') ? ' has-error' : '' }}">
                                                <i class="fa fa-user-plus prefix grey-text"></i>
                                                <input type="text" id="userName" name="userName" class="input-alternate" style="width: 95%; margin: 0px;" value="{{ $student->userName }}" autofocus>

                                                @if ($errors->has('userName'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('userName') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Faculty</b></td>
                                    <td>{{$student->faculty}}</td>
                                </tr>
                                <tr>
                                    <td><b>Department</b></td>
                                    <td>{{$student->department}}</td>
                                </tr>
                                <tr>
                                    <td><b>Level</b></td>
                                    <td>
                                        <div class="md-form">
                                            <div class="form-group{{ $errors->has('level') ? ' has-error' : '' }}">
                                                <i class="fa fa-user-plus prefix grey-text"></i>
                                                <input type="text" id="level" name="level" class="input-alternate" style="width: 95%; margin: 0px;" value="{{ $student->level }}" autofocus>

                                                @if ($errors->has('level'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('level') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Email</b></td>
                                    <td>
                                        <div class="md-form">
                                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                <i class="fa fa-user-plus prefix grey-text"></i>
                                                <input type="text" id="email" name="email" class="input-alternate" style="width: 95%; margin: 0px;" value="{{ $student->email }}" autofocus>

                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Phone No</b></td>
                                    <td>
                                        <div class="md-form">
                                            <div class="form-group{{ $errors->has('phoneNo') ? ' has-error' : '' }}">
                                                <i class="fa fa-user-plus prefix grey-text"></i>
                                                <input type="text" id="phoneNo" name="phoneNo" class="input-alternate" style="width: 95%; margin: 0px;" value="{{ $student->phoneNo }}" autofocus>

                                                @if ($errors->has('phoneNo'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('phoneNo') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </td>
                                </tr> 
                                <tr>
                                    <td><b>Gender</b></td>
                                    <td>{{$student->gender}}</td>
                                </tr>
                                <tr>
                                    <td><b>Date Of Birth</b></td>
                                    <td>{{$student->dob}}</td>
                                </tr> 
                            </tbody>
                        </table>
                        <div class="text-center mb-4">
                            <button type="submit" class="btn btn-indigo btn-block z-depth-2">Update</button>
                        </div>

                    </form>
					</div>
				</main>
			</div>
		</div>
    </div>

	@endsection
@endif
@extends('students.changePassword')

