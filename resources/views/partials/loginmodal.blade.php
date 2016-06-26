<div class="modal fade" id="loginModal" role="dialog" aria-labelledby="loginModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="loginModalTitle">Login</h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" role="alert" id="larashortLoginError">
                </div>
                {!! Form::open(["id"=>"larashortLoginForm"]) !!}
                    <fieldset class="form-group">
                        <label for="larashortLoginEmail">Email address</label>
                        <input type="email" class="form-control" id="larashortLoginEmail" placeholder="Enter email">
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="larashortLoginPassword">Password</label>
                        <input type="password" class="form-control" id="larashortLoginPassword" placeholder="Enter password">
                    </fieldset>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="larashortLoginRemember"> Remember Me
                        </label>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Login</button>
                            &nbsp;&nbsp;<a href="{{ url('forgotpassword') }}">Forgot Password</a>
                        </div>

                        <div class="col-md-12">
                            <br/>
                            Not a member? <a href="{{ url('register') }}">Sign Up</a>
                        </div>
                    </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>