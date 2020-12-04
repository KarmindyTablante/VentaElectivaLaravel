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
    <style type="text/css">
        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -17px;
            margin-left: 6px;
        }

        .card {
            height: 330px;
        }

        .icheck-primary {
            margin-left: 8px;
        }
        input#remember {
            content: "";
            display: inline-block;
            position: absolute;
            width: 22px;
            height: 22px;
            border: 1px solid #D3CFC8;
            border-radius: 0;
            margin-left: -29px;
        }

        .rememberme{
            margin-top: 5px;
        }
    </style>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
  <div class="login-logo">
    <img src="{{asset('dist/img/TusComprasHoyLogo.png')}}" alt="TusComprasHoy Logo" style="width:200px;">
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Inicia sesión para comenzar</p>

        <form method="POST" action="{{ route('login') }}">
        @csrf

            <div class="input-group mb-3">
              <input id="email" type="email" placeholder="Correo electrónico" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            
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


            <div class="input-group mb-3">
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña" required autocomplete="current-password">

             @error('password')
                 <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                 <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  <label class="rememberme" for="remember">
                    Recuérdame
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Iniciar</button>
                  <p class="mb-1">
              </div> <br>
              <!-- /.col -->
                @if (Route::has('password.request'))
                                <br><a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Olvidé mi contraseña') }}
                                </a>
                    @endif
                  </p>
            </div>
        </form>

      <!-- /.social-auth-links -->

      
    <!--   <p class="mb-0">
        <a href="register.html" class="text-center">Regístrate</a>
      </p> -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
</body>

</html>




            

                