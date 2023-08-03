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
<div class="container" style="margin-top: 180px">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div style=" width: 900px; margin: 0 auto;">
                <div class="card shadow" style=" padding: 50px 50px; border-radius: 20px">
                  <div class="card-body p-2">
                    <div class="d-flex align-items-center">
                    <img src="{{asset('/img/logo.png')}}" alt="" style="width: 40px; margin-right: 10px">
                <h4 class="mb-0">{{ __('ĐẶT LẠI MẬT KHẨU') }}</h4>
                    </div>
                    <hr class="mb-2 " style="border-top: 8px solid green;border-radius: 20px; width: 12%; margin-top: 0px; margin-bottom: 15px; margin-left: 50px">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3 text">
                            {{-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> --}}
                            <div style="position: relative; display: flex;">
                                
                            <div class="col-md-8 offset-md-2 mb-1">
                                <i class="bi bi-envelope-fill" style="position: absolute; top: 50%; transform: translateY(-50%); margin-left: 5px;"></i>
                                <input id="email" style="border: none; border-bottom: 2px solid black; padding-left: 25px; margin-left: 5px" 
                                placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0 mt-2">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="fw-bold" style="border: none; color: white; width: 250px; height: 45px; font-size: 20px;background-color: #006400;"">
                                    {{ __('Lấy lại mật khẩu') }}
                                </button>
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <a href="{{ route('login') }}">
                             Quay lại Đăng nhập
                            </a>
                          </div>
                    </form>
                </div>
                    </div>
                  </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
