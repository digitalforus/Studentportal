@extends('layouts.app')

@if(Auth::guard('student')->check())
	@section('content')
		<div class="container-fluid">
		    <div class="row space">
		        
		    </div>
		</div>

		<div class="container-fluid">
			<div class="row">
				<nav class="col-sm-4 col-md-3 d-none d-sm-block bg-light sidebar">
					<ul class="nav nav-pills flex-column">
                        <img src="{{Storage::url( $student->photoId) }}" width="200" height="200" class="img-fluid rounded-circle" alt="Display Picture" style="margin: 20px auto;"><br/><br/>
                                
						<li class="nav-item">
							<a class="nav-link active" href="{{url('/dashboard')}}">View Biodata</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{url('student/update',$student->id)}}">Update Biodata</a>
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
					
                    <span><h1 style="color: blue;">{{ "Welcome, ". Auth::guard('student')->user()->surname}}</h1></span><br/><br/>

                    <div class="row col-md-12">               
                            @if(Session::has('studentPasswordChanged'))
                                <div class="alert alert-success" style="width: 80%;" role="alert">
                                    <strong>
                                        {{ session('studentPasswordChanged')}}
                                    </strong>
                                </div>
                            @elseif(Session::has('studentDetailsChanged'))
                                <div class="alert alert-success" style="width: 80%" role="alert">
                                    <strong>
                                        {{ session('studentDetailsChanged')}}
                                    </strong>
                                </div>
                            @elseif(Session::has('studentRegisteredSuccess'))
                                <div class="alert alert-success" style="width: 80%;" role="alert">
                                    <strong>
                                        {{ session('studentRegisteredSuccess')}}
                                    </strong>
                                </div>
                            @endif

                    </div>
                     
					<h2>Biodata</h2>
					<div class="table-responsive">
						<table class="table table-striped">
                            <tbody>
                               	<tr>
                                    <td><b>Matric No</b></td>
                                    <td>{{$student->matricNo}}</td>
                                </tr>
                                <tr>
                                    <td><b>Surname</b></td>
                                    <td>{{$student->surname}}</td>
                                </tr>
                                <tr>
                                    <td><b>First Name</b></td>
                                    <td>{{$student->firstName}}</td>
                                </tr>
                                <tr>
                                    <td><b>User Name</b></td>
                                    <td>{{$student->userName}}</td>
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
                                    <td>{{$student->level}}</td>
                                </tr>
                                <tr>
                                    <td><b>Email</b></td>
                                    <td>{{$student->email}}</td>
                                </tr>
                                <tr>
                                    <td><b>Phone No</b></td>
                                    <td>{{$student->phoneNo}}</td>
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
					</div>
				</main>
			</div>
		</div>


	@endsection

    
@endif

@extends('students.changePassword')