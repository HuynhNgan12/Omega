<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
         rel="stylesheet" crossorigin="anonymous" />
     <!-- Font Awesome -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">         
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="{{ asset('/css/admin.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrapicons@1.5.0/font/bootstrap-icons.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
</head>
<body style="background-color: #f8f9fa;">
<div class="container" style="margin-top: 130px">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div style=" width: 500px; margin: 0 auto;">
        <div class="card shadow" style=" padding: 50px 50px; border-radius: 20px">
          <div class="card-body p-4">
            <div class="d-flex align-items-center">
            <img src="{{asset('/img/logo.png')}}" alt="" style="width: 40px; margin-right: 10px">
            <h4 class="mb-0"><strong>ĐĂNG NHẬP</strong></h4>
            </div>
            <hr class="mb-4" style="border-top: 8px solid green;border-radius: 20px; width: 20%; margin-top: 0px; margin-bottom: 15px; margin-left: 50px">
            <form method="POST" action="{{ route('login') }}">
              @csrf

              <div class="mb-3">
                <div style="position: relative; display: flex;">
                  <i class="bi bi-envelope-fill" style="position: absolute; top: 50%; transform: translateY(-50%); margin-left: 5px;"></i>
                  <input id="email" style="border: none; border-bottom: 2px solid black; padding-left: 25px; margin-left: 5px" 
                  placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                </div>
                @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="mt-4">
                <div style="position: relative; display: flex;">
                <i class="bi bi-lock-fill"style="position: absolute; top: 50%; transform: translateY(-50%); margin-left: 5px;"></i>
                <input id="password" style="border: none; border-bottom: 2px solid black; padding-left: 25px; margin-left: 5px"
                 type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                </div>
                @error('password')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="mt-4 form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                      Remember Me
                    </label>
                  </div>
                </div>
              
                <div class="col-md-6">
                  @if (Route::has('password.request'))
                  <div class="text-md-end mt-3">
                    <a class="btn btn-link fw-bold" href="{{ route('password.request') }}">
                      Quên mật khẩu
                    </a>
                  </div>  
                </div>
              </div>
              
              <div class="d-grid gap-2 mt-3">
                <button type="submit" class="btn btn-login btn-lg fw-bold">
                  Đăng nhập
                </button>
              </div>
              

                <div class="text-center mt-3">
                  Bạn chưa có tài khoản?
                  <a href="{{ route('register') }}" style="font-weight: bold">
                   Đăng ký
                  </a>
                </div>
              @endif
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  
  



{{-- <div class="container-scroller d-flex">
    <div class="container-fluid page-body-wrapper full-page-wrapper d-flex">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
            <form method="POST" action="{{ route('login') }}">
                @csrf
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="../../images/logo.svg" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3">
                <div class="form-group">
                    <input type="email" class="form-control form-control-lg  @error('email') is-invalid @enderror" id="email" placeholder="Username" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-lg  @error('password') is-invalid @enderror" id="password" placeholder="Password"  name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mt-3">
                    
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"type="submit">{{ __('Login') }}</button>
                
                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                    @endif
               
            </div>
              </form>
            </div>
          </div>    
        </form>
        </div>
      </div>
    </div>
  </div> --}}
  @yield('content')
</body>
</html>
