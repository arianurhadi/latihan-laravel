<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')
    @include('includes.styles')
    <title>{{ env('APP_NAME') }}</title>
</head>
<body>
    
    @include('includes.navbar')

    <div class="container p-3">
        @yield('content')
    </div>

    @include('includes.footer')
    @include('includes.scripts')
</body>
</html>