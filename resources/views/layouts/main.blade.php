<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} | @yield('title', 'The best Movies on web')</title>

    @yield('cdns')

    {{-- style --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- JS--}}
    <script defer src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    @include('includes.header')
    <main>
        <div class="container">
            @yield('main-content')
        </div>
    </main>
</body>
</html>