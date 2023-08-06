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
<div class="container" style="margin-top: 110px">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div style=" width: 500px; margin: 0 auto;">
        <div class="card shadow" style=" padding: 30px 30px; border-radius: 20px">
          <div class="card-body p-4">
            <div class="d-flex align-items-center">
              <img src="{{asset('/img/logo.png')}}" alt="" style="width: 40px; margin-right: 10px">
            <h4 class="mb-1 fw-bold" style="">{{ __('ĐĂNG KÝ') }}</h4>
            </div>
            <hr class="mb-4" style="border-top: 8px solid green;border-radius: 20px; width: 15%; margin-top: 0px; margin-bottom: 15px; margin-left: 50px">
          
            <form method="POST" action="{{ route('register') }}">
              @csrf

              <div class="mb-3">
                <div style="position: relative; display: flex;">
                {{-- <label for="name" class="form-label">{{ __('Name') }}</label> --}}
                <i class="bi bi-person-fill" style="position: absolute; top: 50%; transform: translateY(-50%); margin-left: 5px; font-size: 20px"></i>
                <input id="name" style="border: none; border-bottom: 2px solid black; padding-left: 25px; margin-left: 7px" 
                placeholder="Tên đăng nhập" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                </div>
                @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>

              <div style="margin-top: 30px">
                <div style="position: relative; display: flex;">
                {{-- <label for="email" class="form-label">{{ __('Email Address') }}</label> --}}
                <i class="bi bi-envelope-fill" style="position: absolute; top: 50%; transform: translateY(-50%); margin-left: 5px; font-size: 18px"></i>
                <input id="email" style="border: none; border-bottom: 2px solid black; padding-left: 25px; margin-left: 7px" 
                placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                </div>
                @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>

              <div style="margin-top: 30px">
                <div style="position: relative; display: flex;">
                {{-- <label for="password" class="form-label">{{ __('Password') }}</label> --}}
                <i class="bi bi-lock-fill" style="position: absolute; top: 50%; transform: translateY(-50%); margin-left: 5px; font-size: 18px"></i>
                <input id="password" style="border: none; border-bottom: 2px solid black; padding-left: 25px; margin-left: 7px"
                placeholder="Mật khẩu" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                </div>
                @error('password')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>

              <div style="margin-top: 30px">
                <div style="position: relative; display: flex;">
                {{-- <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label> --}}
                <i class="bi bi-exclamation-triangle-fill" style="position: absolute; top: 50%; transform: translateY(-50%); margin-left: 5px; font-size: 18px"></i>
                <input id="password-confirm" style="border: none; border-bottom: 2px solid black; padding-left: 25px; margin-left: 7px"
                placeholder="Xác nhận mật khẩu" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
              </div>

              <div class="d-grid gap-2" style="margin-top: 30px">
                <button type="submit" class="btn btn-register btn-lg fw-bold">
                  {{ __('Đăng ký') }}
                </button>
              </div>
              
              <div class="text-center mt-3">
                Bạn đã có tài khoản?
                <a href="{{ route('login') }}" style="font-weight: bold">
                 Đăng nhập
                </a>
              </div>
            </form>
          
        </div>
      </div>
    </div>
  </div>
    </div>
</div>
</body>
</html>
