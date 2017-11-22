
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-1-12|auto space">
                  
            </div>
        </div>
    </div>
    
            <div class="container-fluid">
                <div class="row">
    
                    <main class="col-sm-12 ml-sm-auto col-md-12 pt-3" role="main">
    
                        <section class="row text-center placeholders">
                        	<div class="col-4 col-sm-4 placeholder">
                                
                            </div>

                            <div class="col-4 col-sm-4 placeholder">
                                 <p style="color: blue; font-size: 2rem; font-weight: bold; margin: 0px; padding: 0px;"> {{$student->surname}} {{$student->firstName}}</p>
                            </div>
                           
                            <div class="col-4 col-sm-4 placeholder">
                                
                            </div>
                        </section>
                        <br/>
                        <br/>
                        <br/>
    
                        <div class="table-responsive">
                            <table class="table ">
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
                                        <td><b>Surname</b></td>
                                        <td>{{$student->firstName}}</td>
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
                                    
                                </tbody>
                            </table>

                            <a class="btn btn-outline-indigo btn-rounded" onclick="popup(document.getElementById('admin-edit-student-dept'))"><i class="left"></i> Edit</a>
                            <a class="btn btn-indigo btn-rounded" href="/admin/dashboard/student/delete/{{ $student->id }}"><i class="left"></i> Delete</a>
                        </div>
                    </main>
                </div>
            </div>
        
@endsection('content')

<div id="admin-edit-student-dept" style="display: none;" class="alert-screen">
	<div class="container">
        <div class="row">
            <div class="col-md-1-12|auto space">
                  
            </div>
        </div>
    </div>

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

            <div class="col-9">
                <section class="form-simple">

                    <form method="POST" action="{{url('/admin/dashboard/student/update',$student->id)}}">

                    {{ csrf_field() }}
                    <div class="card">

                        <!--Header-->
                        <div class="header pt-3 grey lighten-2">

                            <div class="row d-flex justify-content-start">
                                <h3 class="deep-grey-text mt-3 mb-4 pb-1 mx-5">Edit Detail</h3>
                            </div>

                        </div>
                        <!--Header-->

                        <div class="card-body mx-4 mt-4">

                            <!--Body-->
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
                                        <input type="text" id="dept" name="dept" class="form-control" value="{{ $student->department }}" autofocus>

                                        @if ($errors->has('dept'))
                                            <span class="help-block myError">
                                                <strong>{{ $errors->first('dept') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                            <div class="text-center mb-4">
                                <button type="submit" class="btn btn-indigo btn-block z-depth-2">Update</button>
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

    <div class="container">
        <div class="row">
            <div class="col-md-1-12|auto space">
                  
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-1-12|auto space">
                  
            </div>
        </div>
    </div>
</div>

<script>
	function popup(elnt) {
		elnt.style.display = 'block';
	}
</script>


