<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="/api/manifest">
    <title>Bike Tracker</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>

<body>
    <main class="h-100">
        <div class="d-flex justify-content-center align-items-center p-4 p-md-5 h-100">
            <div class="text-center">
                <div class="card rounded box-shadow mb-4" style="width: 340px; max-width: 100%;">
                    <div class="card-body py-4">
                        <h5 class="mb-4 font-weight-bold text-secondary">LOGIN</h5>
                        <form method="POST" action="{{ route('login') }}" class="mb-3">
                            @csrf
                            <div class="form-group">
                                <input id="email" type="email"
                                    class="form-control form-control--light @error('email') is-invalid @enderror"
                                    name="email" placeholder="Email" value="{{ old('email') }}" required
                                    autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="password" type="password"
                                    class="form-control form-control--light @error('password') is-invalid @enderror"
                                    name="password" placeholder="Password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-dark w-100">Login</button>
                            </div>
                        </form>
                        <div class="fz-sm">
                            <a href="password-reset.html" class="text-primary">Forgot Your Password?</a>
                        </div>
                    </div>
                </div>
                <div class="fz-sm">
                    <span>Don't have an account?</span>
                    <a href="{{ route('register') }}" class="text-primary">Register</a>
                </div>
            </div>
        </div>
    </main>
    <div class="st-backdrop toggle-btn"></div>
    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
