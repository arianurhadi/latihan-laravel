<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')
    @include('includes.styles')
    <title>{{ env('APP_NAME') }}</title>
    <link rel="icon" href={{ asset('assets/images/logokm.png') }}>
</head>
<body>
    
    @include('includes.navbar')

    <div class="container p-3 bg-body">
        @yield('content')
    </div>

    @include('includes.footer')
    @include('includes.scripts')
</body>
</html>