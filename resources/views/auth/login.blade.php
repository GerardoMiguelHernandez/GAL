<link href="{{ asset('css/materialize.css') }}" rel="stylesheet">
<link href="{{ asset('css/index.css') }}" rel="stylesheet">
<link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

<!--
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>    -->

<div class="page-login">
  <div class="center">
      <div class="card bordered z-depth-5" style="margin:0% auto; max-width:400px;">
        <div class="card-header">
           <i class="material-icons medium white-text">perm_identity</i>

        </div>
        <div class="card-content">
          <form method="POST" action="{{ url('/login') }}">
          {{ csrf_field() }}
            <div class="input-field col s12">
              <input id="email" name="email" type="email" class="validate">
              <label for="username">Email</label>
            </div>
            <div class="input-field col s12">
              <input id="password" type="password" name="password" class="validate">
              <label for="password">Password</label>
            </div>
            <br>
               <input type="checkbox" id="remember" />
      <label for="remember">Recordar</label>
              <button type="submit" class="btn blue-grey right waves-effect waves-light white-text">Login</button>
          </form>
        </div>
        <div class="card-action clearfix">
          <div class="row">
            <div class="col s6 text-p">
              <a href="{{ url('/password/reset') }}" class="orange-text tooltipped" data-position="top" data-delay="50" data-tooltip="Forgot your password?">Forgot your password?</a>
            </div>
            <div class="col s6 right-align text-p">
              <a href="{{ url('/register') }}" class="orange-text tooltipped" data-position="top" data-delay="50" data-tooltip="Register now!">Register now!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!--  Scripts-->
  <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/materialize.js')}}"></script>
  <script type="text/javascript">
    $(".button-collapse").sideNav();
  </script>
  </div>
