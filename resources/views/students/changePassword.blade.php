
<div id="edit-student-password" class="alert-screen">
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

                    <form method="POST" action="{{url('student/password',$student->id)}}">

                    {{ csrf_field() }}
                    <div class="card">

                        <!--Header-->
                        <div class="header pt-3 grey lighten-2">

                            <div class="row d-flex justify-content-start">
                                <h3 class="deep-grey-text mt-3 mb-4 pb-1 mx-5">Change Password</h3>
                            </div>

                        </div>
                        <!--Header-->

                        <div class="card-body mx-4 mt-4">
                            <div class="md-form">
                                <div class="form-group{{ $errors->has('old-password') ? ' has-error' : '' }}">
                                    <i class="fa fa-user-plus prefix grey-text"></i>
                                    <label for="orangeForm-name">Old Password</label><br/>
                                    <input type="password" id="old-password" name="old-password" class="form-control" autofocus>

                                    @if ($errors->has('old-password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('old-password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="md-form">
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <i class="fa fa-user-plus prefix grey-text"></i>
                                    <label for="orangeForm-name">Password</label><br/>
                                    <input type="password" id="password" name="password" class="form-control" autofocus>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="md-form">
                                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    <i class="fa fa-user-plus prefix grey-text"></i>
                                    <label for="orangeForm-name">Password Confirmation</label><br/>
                                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" autofocus>

                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="text-center mb-4">
                                <button type="submit" class="btn btn-indigo btn-block z-depth-2">Change</button>
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

<script type="text/javascript">
    function popup(elnt) {
       elnt.style.display = 'block';
    }

    function showPopup(elnt) {
        @if(($errors->has('old-password')) && ($errors->has('password')) && ($errors->has('password_confirmation')))
            elnt.style.display = 'block';
        @endif
    }
</script>
