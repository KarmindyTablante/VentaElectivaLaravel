<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Tuscomprashoy</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="{{ asset('dist/js/adminlte.js') }}"></script>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('dist/css/adminlte.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <img src="{{asset('dist/img/TusComprasHoyLogo.png')}}" alt="TusComprasHoy Logo" style="width:200px;">
        </div>
    <!-- /.login-logo -->

        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Estás a solo un paso de tu nueva contraseña, recupera tu contraseña ahora.</p>

                <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf


                            <div class="input-group mb-3">
                              <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>


                              <div class="input-group-append">
                                <div class="input-group-text">
                                  <span class="fas fa-envelope"></span>
                                </div>
                              </div>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>


                            <div class="row">
                              <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-block">
                                        {{ __('Enviar enlace de restablecimiento') }}
                                </button>
                              </div>
                              <!-- /.col -->
                            </div>
                    @if (Route::has('login'))
                                <a class="btn btn-link" href="{{ route('login') }}">
                                    {{ __('Ó inicia sesión') }}
                                </a>
                    @endif
                    </form>

                 </div>
            </div>  
            
      
    </div>
</body>
</html>