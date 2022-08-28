<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- bootstrap css --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    
    {{-- app css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- navbar css --}}
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

    {{-- footer css --}}
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    @yield('css')

    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <title>KUB Mitra Bahari</title>
</head>
<body>
    @include('frontend.layouts.navbar')

    <div class="content">
        @yield('content')
    </div>

    @include('frontend.layouts.footer')

    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    @yield('scripts')
</body>
</html>

