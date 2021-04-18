<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.partials._head')
</head>

<body class="st-body ">
    <div class="st-wrapper">
        @include('layouts.partials._sidebar')
        <main class="st-main">
            @include('layouts.partials._navbar')
            <div class="st-content">
                @yield('content')
            </div>
        </main>
    </div>
    @include('layouts.partials._script')
</body>

</html>
