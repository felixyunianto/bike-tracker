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
                <div class="card rounded box-shadow mb-4" style="width: 340px; max-width: 98%;">
                    <div class="card-body py-4">
                        <h5 class="mb-4 font-weight-bold text-secondary">REGISTER</h5>
                        <form method="POST" action="{{ route('register') }}" class="mb-4">
                            @csrf
                            <div class="form-group">
                                <input id="name" type="text" class="form-control form-control--light @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Full name" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="username" type="text" class="form-control form-control--light @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required placeholder="Username"autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="email" type="email" class="form-control form-control--light @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"
                                placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="password" type="password" class="form-control form-control--light @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="password-confirm" type="password" class="form-control form-control--light" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-dark w-100">Register</button>
                            </div>
                        </form>
                    </div>
<!-- .card-body -->
                </div>
<!-- .card -->
                <div class="fz-sm">
                    <span>Already have an account?</span>
                    <a href="{{ route('login') }}" class="text-primary">Login</a>
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