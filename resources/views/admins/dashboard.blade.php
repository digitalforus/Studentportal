@extends('layouts.app')

@if(Auth::guard()->check())
	@section('content')
		<div class="container-fluid">
		    <div class="row space">
		        
		    </div>
		</div>

		<div class="container-fluid">
			<div class="row">
				<nav class="col-sm-4 col-md-3 d-none d-sm-block bg-light sidebar">
					<ul class="nav nav-pills flex-column">
                                
						<li class="nav-item">
							<a class="nav-link active" href="{{url('admin/dashboard')}}">Students Info</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Online Test</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#" onclick="popup(document.getElementById('edit-admin-password'))">Change Password</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{url('admin/logout')}}">Logout</a>
						</li>
					</ul>
				</nav>

				<main class="col-sm-8 ml-sm-auto col-md- pt-3" role="main">
					
                    <span><h1 style="color: blue;">{{ "Welcome, ". Auth::guard()->user()->name}}</h1></span><br/><br/>

                    <div class="row col-md-12"> 

                            @if(Session::has('studentDeleted'))
                                <div class="alert alert-success" style="width: 80%;" role="alert">
                                    <strong>
                                        {{ session('studentDeleted')}}
                                    </strong>
                                </div>
                            @elseif(Session::has('studentDetailsChanged'))
                                <div class="alert alert-success" style="width: 80%" role="alert">
                                    <strong>
                                        {{ session('studentDetailsChanged')}}
                                    </strong>
                                </div>
                            @elseif(Session::has('adminPasswordChanged'))
                                <div class="alert alert-success" style="width: 80%" role="alert">
                                    <strong>
                                        {{ session('adminPasswordChanged')}}
                                    </strong>
                                </div>
                            @endif

                    </div>
                     
					<h2>Students Info</h2>
					<div class="table-responsive">
						<table class="table table-striped">
                            <tbody>
                                    <tr>
                                        <td><b>Matric No</b></td>
                                        <td><b>Surname</b></td>
                                        <td><b>First Name</b></td>
                                        <td><b>Faculty</b></td>
                                        <td><b>Department</b></td>
                                        <td><b>Level</b></td>
                                        <td><b>Email</b></td>
                                        <td><b>Phone No</b></td>
                                    </tr>

                                    @foreach($students as $student)
                                    
                                        <tr>
                                            <td><a class="nav-link" href="/admin/dashboard/student/{{ $student->id }}">{{$student->matricNo}}</a></td>
                                            <td>{{$student->surname}}</td>
                                            <td>{{$student->firstName}}</td>
                                            <td>{{$student->faculty}}</td>
                                            <td>{{$student->department}}</td>
                                            <td>{{$student->level}}</td>
                                            <td>{{$student->email}}</td>
                                            <td>{{$student->phoneNo}}</td>
                                        </tr>

                                    @endforeach
                                    
                            </tbody>
                        </table>
					</div>
				</main>
			</div>
		</div>


	@endsection
    
@endif

@extends('admins.changePassword')
