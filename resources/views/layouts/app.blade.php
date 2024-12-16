<!DOCTYPE html>
<html>
    <head>
        <title>Rozeno's Task List</title>
        @yield('styles')
    </head>
<body>
    <h1>@yield('title')</h1>
    <div>
        @if(session()->has('success')) {
            <p>{{session('success')}}</p>
        }
        @endif
        @yield('content')
    </div>
</body>
</html>
