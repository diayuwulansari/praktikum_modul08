<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/sass/app.scss')
    
</head>

<body class="bg-primary">
    
    <div class="container bg-primary">
        <div class="row justify-content-center py-5">
            <div class="col-md-4">
                <div class="card rounded-3">
                    <div class="card-body">  

                        <div class="container p-3">
                            <div class="bi-hexagon-fill my-3 text-primary text-center display-4"></div>

                            <p class="text-center fw-bold fs-4">Employee Data Master</p>    
                            <p> </p>                
                        </div>
                        <hr>
                        
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-0 p-3">
                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('Email Address') }}">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0 p-3">
                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('Password') }}">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <hr>

                            <div class="row p-2">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit"><i class="bi bi-box-arrow-in-right" style="padding-right:15px"></i> {{ __('Login') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>   
@vite('resources/js/app.js')
</body>
</html>
