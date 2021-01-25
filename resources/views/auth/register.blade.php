@include('layout.head_auth')
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="/"><b>CUNDY</b>SMITH</a>
  </div>
  
  <div class="register-box-body">
    <p class="login-box-msg">Register a new member</p>
   
   <form method="POST" action="{{ route('register') }}">
        @csrf
      
      <div class="form-group has-feedback">
         <input id="name" type="text" placeholder="Enter your name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        
        @error('name')
            <span class="glyphicon glyphicon-user form-control-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      
      <div class="form-group has-feedback">
           <input id="email" type="email" placeholder="Enter your Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                
            @error('email')
                <span class="glyphicon glyphicon-envelope form-control-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
      </div>
      <div class="form-group has-feedback">
       <input id="password" type="password" placeholder="Enter your Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                
        @error('password')
            <span class="glyphicon glyphicon-lock form-control-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      
      </div>
      
      <div class="form-group has-feedback">
         <input id="password-confirm" type="password" placeholder="Confirm your Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
      </div>
      <div class="row">
        <div class="col-xs-8">
          <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    
   
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->
@include('layout.footer_auth')